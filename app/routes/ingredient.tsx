import { Outlet } from "remix";

export default function IngredientRoute() {
  return (
    <div>
      <h1>🧂ngredient</h1>
      <main>
        <Outlet />
      </main>
    </div>
  );
}