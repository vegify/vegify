import { Link } from "remix";

import logo from "../img/VegifyLogoOrigBGLight.svg";

export default function Index() {
  return (
    <div className="flex h-screen w-full mx-auto bg-gradient-radial from-green to-forest-green">
      <div className="m-auto py-3">
        <img src={logo} className="object-fill h-40 drop-shadow-2xl leading-4" alt="Vegify" />
        <nav  className="">
          <ul  className="list-none p-0 m-0 flex items-stretch gap-4 text-lg text-gray-light leading-5">
            <li className="mx-auto my-6">
              <Link 
                to="ingredient"
                className="
                  hover:decoration-wavy
                  hover:decoration-yellow-orange
                ">Ingredients</Link>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  );
}