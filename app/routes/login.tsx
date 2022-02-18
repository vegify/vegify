import type { ActionFunction, LinksFunction } from "remix";
import {
    useActionData, 
    Link, 
    useSearchParams,
    json
} from "remix";

import { db } from "~/utils/db.server";
import {
  createUserSession,
  login
} from "~/utils/session.server";

function validateUsername(username: unknown) {
  if (typeof username !== "string" || username.length < 3) {
    return `Usernames must be at least 3 characters long`;
  }
}

function validatePassword(password: unknown) {
  if (typeof password !== "string" || password.length < 6) {
    return `Passwords must be at least 6 characters long`;
  }
}

type ActionData = {
  formError?: string;
  fieldErrors?: {
    username: string | undefined;
    password: string | undefined;
  };
  fields?: {
    loginType: string;
    username: string;
    password: string;
  };
};

const badRequest = (data: ActionData) =>
  json(data, { status: 400 });

export const action: ActionFunction = async ({
  request
}) => {
  const form = await request.formData();
  const loginType = form.get("loginType");
  const username = form.get("username");
  const password = form.get("password");
  const redirectTo = form.get("redirectTo") || "/";
  if (
    typeof loginType !== "string" ||
    typeof username !== "string" ||
    typeof password !== "string" ||
    typeof redirectTo !== "string"
  ) {
    return badRequest({
      formError: `Form not submitted correctly.`
    });
  }

  const fields = { loginType, username, password };
  const fieldErrors = {
    username: validateUsername(username),
    password: validatePassword(password)
  };
  if (Object.values(fieldErrors).some(Boolean))
    return badRequest({ fieldErrors, fields });

  switch (loginType) {
    case "login": {
      const user = await login({ username, password });

      if (!user) {
        return badRequest({
          fields,
          formError: `Username/Password combination is incorrect`
        });
      }
      return createUserSession(user.id, redirectTo);
    }
    case "register": {
      const userExists = await db.app_user.findFirst({
        where: { username }
      });
      if (userExists) {
        return badRequest({
          fields,
          formError: `User with username ${username} already exists`
        });
      }
      // create the user
      // create their session and redirect to /
      return badRequest({
        fields,
        formError: "Not implemented"
      });
    }
    default: {
      return badRequest({
        fields,
        formError: `Login type invalid`
      });
    }
  }
};


export default function Login() {
  const actionData = useActionData<ActionData>();
  const [searchParams] = useSearchParams();
  return (
    <div className="flex h-screen w-full m-auto bg-gradient-radial from-green to-forest-green">
      <div className="m-auto py-3">
        <div className="flex flex-col w-[400px] max-w-full m-auto justify-center items-center rounded-md p-4 bg-gray-light" data-light="">
          <h1 className="text-4xl font-serif mt-0 pt-4 pb-2">Login</h1>
          <form 
            method="post" 
            aria-describedby={
              actionData?.formError
                ? "form-error-message"
                : undefined
            }          
            className="flex flex-col gap-4 w-full"
          >
            <input
              type="hidden"
              name="redirectTo"
              value={
                searchParams.get("redirectTo") ?? undefined
              }
            />
            <fieldset className="flex justify-center m-0 p-0 b-0">
              <legend className="sr-only mr-8 block max-w-full mb-1 whitespace-normal">
                Login or Register?
              </legend>
              <label className="mr-8">
                <input
                  type="radio"
                  name="loginType"
                  value="login"
                  defaultChecked={
                    !actionData?.fields?.loginType ||
                    actionData?.fields?.loginType === "login"
                  }
                />{" "}
                Login
              </label>
              <label className="">
                <input
                  type="radio"
                  name="loginType"
                  value="register"
                  defaultChecked={
                    actionData?.fields?.loginType ===
                    "register"
                  }                
                />{" "}
                Register
              </label>
            </fieldset>
            <div>
              <label htmlFor="username-input">Username</label>
              <input
                type="text"
                id="username-input"
                name="username"
                className="
                  block flex items-center w-full h-10 m-0 py-2 px-3 
                  border-2 border-solid border-forest-green rounded
                  bg-white shadow-none bg-blend-multiply
                  font-sans text-base font-normal
                "
                defaultValue={actionData?.fields?.username}
                aria-invalid={Boolean(
                  actionData?.fieldErrors?.username
                )}
                aria-describedby={
                  actionData?.fieldErrors?.username
                    ? "username-error"
                    : undefined
                }              
              />
              {actionData?.fieldErrors?.username ? (
                <p
                  className="form-validation-error"
                  role="alert"
                  id="username-error"
                >
                  {actionData?.fieldErrors.username}
                </p>
              ) : null}
            </div>
            <div>
              <label htmlFor="password-input">Password</label>
              <input
                id="password-input"
                name="password"
                defaultValue={actionData?.fields?.password}              
                type="password"
                className="
                  block flex items-center w-full h-10 m-0 py-2 px-3 
                  border-2 border-solid border-forest-green rounded
                  bg-white shadow-none bg-blend-multiply
                  font-sans text-base font-normal
                "     
                aria-invalid={
                  Boolean(
                    actionData?.fieldErrors?.password
                  ) || undefined
                }
                aria-describedby={
                  actionData?.fieldErrors?.password
                    ? "password-error"
                    : undefined
                }                       
              />
              {actionData?.fieldErrors?.password ? (
                <p
                  className="form-validation-error"
                  role="alert"
                  id="password-error"
                >
                  {actionData?.fieldErrors.password}
                </p>
              ) : null}            
            </div>
            <div id="form-error-message">
            {actionData?.formError ? (
              <p
                className="form-validation-error"
                role="alert"
              >
                {actionData.formError}
              </p>
            ) : null}
            </div>            
            <button 
              type="submit" 
              className="
                  button px-5 py-3 text-gray-light rounded bg-forest-green
                  hover:bg-green active:bg-forest-green
              ">
              Submit
            </button>
          </form>
        </div>
        <div className="links mx-auto">
          <ul className="mt-4 p-0 list-none flex flex-row justify-center gap-6">
            <li>
              <Link to="/" className="text-yellow hover:underline">Home</Link>
            </li>
            <li>
              <Link to="/ingredient" className="text-yellow hover:underline">Ingredients</Link>
            </li>
          </ul>
        </div>
      </div>
    </div>
  );
}