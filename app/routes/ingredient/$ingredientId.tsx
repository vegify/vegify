import type { LoaderFunction } from "remix";
import { Link, useLoaderData } from "remix";
import type { Ingredient } from "@prisma/client";

import { db } from "~/utils/db.server";

type LoaderData = { ingredient: Ingredient };

export const loader: LoaderFunction = async ({
  params
}) => {
  const ingredient = await db.ingredient.findUnique({
    where: { id: parseInt(params.ingredientId) }
  });
  if (!ingredient) throw new Error("Ingredient not found");
  const data: LoaderData = { ingredient };
  return data;
};

export default function IngredientRoute() {
  const data = useLoaderData<LoaderData>();  
    return (
      <div>
        <Link to="." className="text-white font-serif text-2xl hover:underline">{data.ingredient.name}</Link>        
        <p className="py-4">{data.ingredient.desc}</p>
      </div>
    );
  }