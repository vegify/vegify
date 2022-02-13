import type { LinksFunction, LoaderFunction } from "remix";
import { Link, Outlet, useLoaderData } from "remix";

import { db } from "~/utils/db.server";

import icon from "../img/VegifyIconWhite.svg";

type LoaderData = {
  ingredientListItems: Array<{ id: bigint; name: string }>;
};

export const loader: LoaderFunction = async () => {
  const data: LoaderData = {
    IngrdientListItems: await db.ingredient.findMany({
      take: 5,
      select: { id: true, name: true },
      orderBy: { id: "asc" }      
    })
  };
  return data;
};

export default function IngredientRoute() {
  const data = useLoaderData<LoaderData>();

  return (
    <div className="jokes-layout container mx-auto flex flex-col">
      <header className="jokes-header py-4 border-gray-light border-solid border-b-2">
        <div className="container flex justify-between items-center">
          <h1 className="home-link text-5xl font-serif">
            <Link
              to="/"
              title="Vegify"
              aria-label="Vegify"
              className="
                hover:border-b-2 text-gray-light hover:decoration-gray-light align-text-bottom
              "
            >
              <img src={icon} className="logo object-contain h-12 px-2 pb-2 sm:inline md:hidden" />
              <span className="hidden sm:inline">🧂ngredient</span>
            </Link>
          </h1>
        </div>
      </header>
      <main className="jokes-main py-8">
        <div className="container mt-0 flex flex-wrap space-x-4 place-items-start text-gray-light">
          <div className="jokes-list max-w-12rem">
            <Link to="." className="text-yellow hover:underline">Get a random ingredient</Link>
            <p className="py-4">Here are a few more ingredients to check out:</p>
            <ul className="pb-4">
              {data.IngrdientListItems.map(ingredient => (
                <li key={ingredient.id}>
                  <Link to={ingredient.id.toString()} className="text-yellow hover:underline">{ingredient.name}</Link>
                </li>
              ))}
            </ul>
            <Link to="new" className="button">
              Add your own
            </Link>
          </div>
          <div className="jokes-outlet flex-auto">
            <Outlet />
          </div>
        </div>
      </main>
    </div>    
  );
}