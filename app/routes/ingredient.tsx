import { Outlet } from "remix";

export default function IngredientRoute() {
  return (
    <div className="">
      <h1 className="text-7xl font-serif underline">🧂ngredient</h1>
      <main>
        <Outlet />
      </main>
    </div>
  );
}