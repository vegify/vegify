import type { LoaderFunction } from "remix";
import { Link, useLoaderData } from "remix";
import type { Ingredient } from "@prisma/client";

export default function IngredientRoute() {
    return (
      <div>
        <p>Here's your delicious ingredient:</p>
        <p>
          Yeast
        </p>
      </div>
    );
  }