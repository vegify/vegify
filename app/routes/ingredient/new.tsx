import type { ActionFunction } from "remix";
import { useActionData, redirect, json } from "remix";

import { db } from "~/utils/db.server";
import { requireUserId } from "~/utils/session.server";

function validateIngredientDesc(desc: string) {
  if (desc.length < 10) {
    return `That description is too short`;
  }
}

function validateIngredientName(name: string) {
  if (name.length < 2) {
    return `That ingredient's name is too short`;
  }
}

type ActionData = {
  formError?: string;
  fieldErrors?: {
    name: string | undefined;
    desc: string | undefined;
  };
  fields?: {
    name: string;
    desc: string;
  };
};

const badRequest = (data: ActionData) =>
  json(data, { status: 400 });

export const action: ActionFunction = async ({
  request
}) => {
  const userId = await requireUserId(request);
  const form = await request.formData();
  const name = form.get("name");
  const desc = form.get("desc");
  // we do this type check to be extra sure and to make TypeScript happy
  // we'll explore validation next!
  if (
    typeof desc !== "string" ||
    typeof desc !== "string"
  ) {
    return badRequest({
      formError: `Form not submitted correctly.`
    });
  }

  const fieldErrors = {
    name: validateIngredientName(name),
    desc: validateIngredientDesc(desc)
  };
  const fields = { name, desc };
  if (Object.values(fieldErrors).some(Boolean)) {
    return badRequest({ fieldErrors, fields });
  }

  const ingredient = await db.ingredient.create({ 
    data: { ...fields, userId: userId}
});
  return redirect(`/ingredient/${ingredient.id}`);
};

export default function NewIngredientRoute() {
  const actionData = useActionData<ActionData>();

  return (
    <div>
      <p>Add your own delicious ingredient</p>
      <form method="post">
        <div className="py-4">
          <label>
            Name: {" "} <br /> 
              <input 
                type="text" 
                name="name" 
                className="shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                defaultValue={actionData?.fields?.name}
                aria-invalid={
                  Boolean(actionData?.fieldErrors?.name) ||
                  undefined
                }
                aria-describedby={
                  actionData?.fieldErrors?.name
                    ? "name-error"
                    : undefined
                }                
              />
          </label>
          {actionData?.fieldErrors?.name ? (
            <p
              className="form-validation-error"
              role="alert"
              id="name-error"
            >
              {actionData.fieldErrors.name}
            </p>
          ) : null}          
        </div>
        <div className="pb-4">
          <label>
            Description: {" "} <br /> 
            <textarea 
              defaultValue={actionData?.fields?.desc}            
              name="desc" 
              aria-invalid={
                Boolean(actionData?.fieldErrors?.desc) ||
                undefined
              }
              aria-describedby={
                actionData?.fieldErrors?.desc
                  ? "desc-error"
                  : undefined
              }              
              className="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
            />
          </label>
          {actionData?.fieldErrors?.content ? (
            <p
              className="form-validation-error"
              role="alert"
              id="desc-error"
            >
              {actionData.fieldErrors.desc}
            </p>
          ) : null}          
        </div>
        <div>
          <button type="submit" className="button">
            Add
          </button>
        </div>
      </form>
    </div>
  );
}