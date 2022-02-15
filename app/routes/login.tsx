import type { LinksFunction } from "remix";
import { Link, useSearchParams } from "remix";

export default function Login() {
  const [searchParams] = useSearchParams();
  return (
    <div className="container flex flex-col h-screen w-full mx-auto bg-gradient-radial from-green to-forest-green">
      <div className="content flex flex-col w-[400px] max-w-full m-auto justify-center items-center rounded-md p-4 bg-gray-light" data-light="">
        <h1 className="text-4xl font-serif mt-0 pt-4 pb-2">Login</h1>
        <form method="post" className="flex flex-col gap-4 w-full">
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
                defaultChecked
              />{" "}
              Login
            </label>
            <label className="">
              <input
                type="radio"
                name="loginType"
                value="register"
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
            />
          </div>
          <div>
            <label htmlFor="password-input">Password</label>
            <input
              id="password-input"
              name="password"
              type="password"
            />
          </div>
          <button type="submit" className="button px-5 py-3 text-gray-light rounded bg-forest-green">
            Submit
          </button>
        </form>
      </div>
      <div className="links">
        <ul>
          <li>
            <Link to="/">Home</Link>
          </li>
          <li>
            <Link to="/ingredient">Ingredients</Link>
          </li>
        </ul>
      </div>
    </div>
  );
}