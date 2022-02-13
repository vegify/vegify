import type { LoaderFunction } from "remix";
import { useLoaderData, Link } from "remix";
import type { ingredient } from "@prisma/client";

import { db } from "~/utils/db.server";

type LoaderData = { randomIngredient: Ingredient };
export const loader: LoaderFunction = async () => {
  const count = await db.ingredient.count();
  const randomRowNumber = Math.floor(Math.random() * count);
  const [randomIngredient] = await db.ingredient.findMany({
    take: 1,
    skip: randomRowNumber
  });
  const data: LoaderData = { randomIngredient };
  return data;
};

export default function IngredientIndexRoute() {
    const data = useLoaderData<LoaderData>();
    
    return (
      <div className="text-lg">
        <p className="">Here's a random ingredient:</p>
        <Link to={data.randomIngredient.id.toString()} className="text-white font-serif text-2xl hover:underline">
        {data.randomIngredient.name}
      </Link>        
        <p className="py-4">{data.randomIngredient.desc}</p>
      </div>
    );
  }