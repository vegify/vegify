import type { LinksFunction } from "remix";
import { Links, LiveReload, Outlet } from "remix";

import styles from "./styles/tailwind.css";

export const links: LinksFunction = () => {
  return [{ rel: "stylesheet", href: styles }];
}

export default function App() {
  return (
    <html lang="en" className="box-border">
      <head>
        <meta charSet="utf-8" />
        <title>Vegify | Micronutrition Tracker</title>
        <Links />
      </head>
      <body 
        className="
          bg-forest-green
          text-gray-dark
        ">
        <Outlet />
        {process.env.NODE_ENV === "development" ? (
          <LiveReload />
        ) : null}
      </body>
    </html>
  );
}