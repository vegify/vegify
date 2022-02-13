import type { ActionFunction } from "remix";
import { redirect } from "remix";

import { db } from "~/utils/db.server";

export const action: ActionFunction = async ({
  request
}) => {
  const form = await request.formData();
  const name = form.get("name");
  const desc = form.get("desc");
  // we do this type check to be extra sure and to make TypeScript happy
  // we'll explore validation next!
  if (
    typeof desc !== "string" ||
    typeof desc !== "string"
  ) {
    throw new Error(`Form not submitted correctly.`);
  }

  const fields = { name, desc };

  const ingredient = await db.ingredient.create({ data: fields });
  return redirect(`/ingredient/${ingredient.id}`);
};

export default function NewIngredientRoute() {
    return (
      <div>
        <p>Add your own delicious ingredient</p>
        <form method="post">
          <div className="py-4">
            <label>
              Name: <br /> <input type="text" name="name" className="shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" />
            </label>
          </div>
          <div className="pb-4">
            <label>
              Description: <br /> <textarea name="desc" className="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" />
            </label>
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