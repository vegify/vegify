import type { LinksFunction } from "remix";
import { Outlet, Link } from "remix";

import icon from "../img/VegifyIconWhite.svg";

export default function IngredientRoute() {
  return (
    <div className="jokes-layout container mx-auto flex flex-col">
      <header className="jokes-header py-4 border-gray-dark border-solid border-b-2">
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
            <Link to=".">Get a random ingredient</Link>
            <p>Here are a few more ingredients to check out:</p>
            <ul>
              <li>
                <Link to="some-joke-id" className="">Flour</Link>
              </li>
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