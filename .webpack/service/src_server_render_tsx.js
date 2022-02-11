exports.id = "src_server_render_tsx";
exports.ids = ["src_server_render_tsx"];
exports.modules = {

/***/ "./src/App.tsx":
/*!*********************!*\
  !*** ./src/App.tsx ***!
  \*********************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ App)
/* harmony export */ });
/* harmony import */ var _main_css__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./main.css */ "./src/main.css");
/* harmony import */ var _main_css__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_main_css__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! react */ "./node_modules/react/index.js");
/* harmony import */ var react_router_dom__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! react-router-dom */ "./node_modules/react-router/index.js");
/* harmony import */ var _components_Nav__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./components/Nav */ "./src/components/Nav.tsx");
/* harmony import */ var _Error__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./Error */ "./src/Error.js");
/* harmony import */ var _components_useConfig__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./components/useConfig */ "./src/components/useConfig.tsx");
/* harmony import */ var _components_recipe_RecipeHome__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./components/recipe/RecipeHome */ "./src/components/recipe/RecipeHome.tsx");
/* harmony import */ var _components_recipe_RecipePage__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ./components/recipe/RecipePage */ "./src/components/recipe/RecipePage.tsx");
/* harmony import */ var _components_ingredient_IngredientHome__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ./components/ingredient/IngredientHome */ "./src/components/ingredient/IngredientHome.tsx");
/* harmony import */ var _components_ingredient_IngredientPage__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! ./components/ingredient/IngredientPage */ "./src/components/ingredient/IngredientPage.tsx");











function classNames(...classes) {
  return classes.filter(Boolean).join(' ');
}
/* import axios from "axios";
// serverless React on Lambda: https://medium.com/bcgdv-engineering/production-ready-react-js-web-app-on-aws-lambda-in-15-minutes-or-less-f9d5c6a36ea8
// axios code: https://www.freecodecamp.org/news/how-to-use-axios-with-react/

 const client = axios.create({
  baseURL: 'https://4p1xc9a9gf.execute-api.us-west-1.amazonaws.com/staging/'
}); */


function App() {
  const {
    app
  } = (0,_components_useConfig__WEBPACK_IMPORTED_MODULE_4__["default"])();
  /* const [recipe, setRecipe] = React.useState(null);
   React.useEffect(() => {
    async function getRecipe() {
      const response = await client.get("recipe/");
      setRecipe(response.data);
    }
    getRecipe();
  }, []);
   async function deleteRecipe() {
    await client.delete("recipe/");
    alert("Recipe deleted!");
    setRecipe(null);
  }
   if (!recipe) return "No recipe!"
   console.log(recipe); 
  */

  return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_1__.createElement("div", {
    className: "max-w-7xl mx-auto"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_1__.createElement(_components_Nav__WEBPACK_IMPORTED_MODULE_2__["default"], null), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_1__.createElement(react_router_dom__WEBPACK_IMPORTED_MODULE_9__.Routes, null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_1__.createElement(react_router_dom__WEBPACK_IMPORTED_MODULE_9__.Route, {
    path: "/",
    element: /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_1__.createElement("div", null, "Home")
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_1__.createElement(react_router_dom__WEBPACK_IMPORTED_MODULE_9__.Route, {
    path: "recipe/",
    element: /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_1__.createElement(_components_recipe_RecipeHome__WEBPACK_IMPORTED_MODULE_5__["default"], null)
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_1__.createElement(react_router_dom__WEBPACK_IMPORTED_MODULE_9__.Route, {
    path: "recipe/:recipeId",
    element: /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_1__.createElement(_components_recipe_RecipePage__WEBPACK_IMPORTED_MODULE_6__["default"], null)
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_1__.createElement(react_router_dom__WEBPACK_IMPORTED_MODULE_9__.Route, {
    path: "ingredient",
    element: /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_1__.createElement(_components_ingredient_IngredientHome__WEBPACK_IMPORTED_MODULE_7__["default"], null)
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_1__.createElement(react_router_dom__WEBPACK_IMPORTED_MODULE_9__.Route, {
    path: "ingredient/:ingredientId",
    element: /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_1__.createElement(_components_ingredient_IngredientPage__WEBPACK_IMPORTED_MODULE_8__["default"], null)
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_1__.createElement(react_router_dom__WEBPACK_IMPORTED_MODULE_9__.Route, {
    path: "user",
    element: /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_1__.createElement("div", null, "User")
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_1__.createElement(react_router_dom__WEBPACK_IMPORTED_MODULE_9__.Route, {
    path: "*",
    element: /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_1__.createElement(_Error__WEBPACK_IMPORTED_MODULE_3__["default"], null)
  })));
}

/***/ }),

/***/ "./src/Error.js":
/*!**********************!*\
  !*** ./src/Error.js ***!
  \**********************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "./node_modules/react/index.js");
/* harmony import */ var react_router_dom__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! react-router-dom */ "./node_modules/react-router-dom/index.js");



class Error extends react__WEBPACK_IMPORTED_MODULE_0__.Component {
  constructor(props) {
    super(props);
  }

  render() {
    return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("div", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("h2", null, "Nothing to see here!"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("p", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement(react_router_dom__WEBPACK_IMPORTED_MODULE_1__.Link, {
      to: "/"
    }, "Go to the home page")));
  }

}

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (Error);

/***/ }),

/***/ "./src/components/ConfigContext.tsx":
/*!******************************************!*\
  !*** ./src/components/ConfigContext.tsx ***!
  \******************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "./node_modules/react/index.js");
/**
 * Provide configuration settings
 */

const ConfigContext = /*#__PURE__*/(0,react__WEBPACK_IMPORTED_MODULE_0__.createContext)(undefined);
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (ConfigContext);

/***/ }),

/***/ "./src/components/Nav.tsx":
/*!********************************!*\
  !*** ./src/components/Nav.tsx ***!
  \********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "./node_modules/react/index.js");
/* harmony import */ var react_router_dom__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! react-router-dom */ "./node_modules/react-router-dom/index.js");
/* harmony import */ var react_router_dom__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! react-router-dom */ "./node_modules/react-router/index.js");


const navLinks = [["/", "Home"], ["recipe", "Recipe"], ["ingredient", "Ingredient"], ["user", "User"]];
const navMap = navLinks.map(navLink => /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("li", {
  className: "flex-auto text-center",
  key: navLink[1]
}, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement(react_router_dom__WEBPACK_IMPORTED_MODULE_1__.Link, {
  className: " hover:underline  text-gray-light  font-semibold uppercase text-sm tracking-wider antialiased ",
  to: navLink[0]
}, navLink[1])));

class Nav extends react__WEBPACK_IMPORTED_MODULE_0__.Component {
  constructor(props) {
    super(props);
  }

  render() {
    return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("div", {
      className: "bg-forest-green"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("nav", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("ul", {
      className: "flex"
    }, navMap)), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement(react_router_dom__WEBPACK_IMPORTED_MODULE_2__.Outlet, null));
  }

}

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (Nav);

/***/ }),

/***/ "./src/components/NutritionLabel.js":
/*!******************************************!*\
  !*** ./src/components/NutritionLabel.js ***!
  \******************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ NutritionLabel)
/* harmony export */ });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "./node_modules/react/index.js");
 //<!-- component -->
//<!-- https://www.fda.gov/food/food-labeling-nutrition/changes-nutrition-facts-label -->

function NutritionLabel() {
  return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("div", {
    className: "p-1 border-2 border-black font-sans w-72"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("div", {
    className: "text-4xl font-extrabold leading-none"
  }, "Nutrition Facts"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("div", {
    className: "leading-snug"
  }, "8 servings per container"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("div", {
    className: "flex justify-between font-bold border-b-8 border-black"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("div", null, "Serving size"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("div", null, "2/3 cup (55g)")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("div", {
    className: "flex justify-between items-end font-extrabold"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("div", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("div", {
    className: "font-bold"
  }, "Amount per serving"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("div", {
    className: "text-4xl"
  }, "Calories")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("div", {
    className: "text-5xl"
  }, "45")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("div", {
    className: "border-t-4 border-black text-sm pb-1"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("div", {
    className: "text-right font-bold pt-1 pb-1"
  }, "% Daily value*"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("hr", {
    className: "border-gray-500"
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("div", {
    className: "flex justify-between"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("div", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("span", {
    className: "font-bold"
  }, "Total Fat"), " 8g"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("div", {
    className: "font-bold"
  }, "10%")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("hr", {
    className: "border-gray-500"
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("div", {
    className: "flex justify-between"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("div", null, "Saturated Fat 1g"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("div", {
    className: "font-bold"
  }, "5%")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("hr", {
    className: "border-gray-500"
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("div", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("span", {
    className: "italic"
  }, "Trans Fat"), " 8g"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("hr", {
    className: "border-gray-500"
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("div", {
    className: "flex justify-between"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("div", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("span", {
    className: "font-bold"
  }, "Cholesterol"), " 0mg"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("div", {
    className: "font-bold"
  }, "0%")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("hr", {
    className: "border-gray-500"
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("div", {
    className: "flex justify-between"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("div", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("span", {
    className: "font-bold"
  }, "Sodium"), " 160mg"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("div", {
    className: "font-bold"
  }, "7%")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("hr", {
    className: "border-gray-500"
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("div", {
    className: "flex justify-between"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("div", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("span", {
    className: "font-bold"
  }, "Total Carbohydrate"), " 37g"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("div", {
    className: "font-bold"
  }, "13%")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("hr", {
    className: "border-gray-500"
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("div", {
    className: "flex justify-between"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("div", {
    className: "pl-4"
  }, "Dietary Fiber 4g"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("div", {
    className: "font-bold"
  }, "14%")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("hr", {
    className: "border-gray-500"
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("div", {
    className: "pl-4"
  }, "Total Sugar 12g", /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("div", {
    className: "pl-4"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("hr", {
    className: "border-gray-500"
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("div", {
    className: "flex justify-between"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("div", null, "Includes 10g Added Sugars"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("div", {
    className: "font-bold"
  }, "20%")))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("hr", {
    className: "border-gray-500"
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("div", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("span", {
    className: "font-bold"
  }, "Protein"), " 3g")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("div", {
    className: "border-t-8 border-black pt-1 text-sm"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("div", {
    className: "flex justify-between"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("div", null, "Vitamin D 2mcg"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("div", null, "10%")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("hr", {
    className: "border-gray-500"
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("div", {
    className: "flex justify-between"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("div", null, "Calcium 260mg"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("div", null, "20%")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("hr", {
    className: "border-gray-500"
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("div", {
    className: "flex justify-between"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("div", null, "Iron 8mg"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("div", null, "45%")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("hr", {
    className: "border-gray-500"
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("div", {
    className: "flex justify-between"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("div", null, "Potassium 240mg"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("div", null, "6%")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("div", {
    className: "border-t-4 border-black flex leading-none text-xs pt-2 pb-1"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("div", {
    className: "pr-1"
  }, "*"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("div", null, "The % Daily Value (DV) tells you how much a nutrient in a serving of food contributes to a daily diet. 2,000 calories a day is used for general nutrition advice."))));
}

/***/ }),

/***/ "./src/components/ingredient/IngredientHome.tsx":
/*!******************************************************!*\
  !*** ./src/components/ingredient/IngredientHome.tsx ***!
  \******************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "./node_modules/react/index.js");
/* harmony import */ var react_router_dom__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! react-router-dom */ "./node_modules/react-router-dom/index.js");


/*
//import ingredients from "./ingredients.json";
//const ingredients = require('json-loader!./ingredients.json');
*/

const ingredients = [{
  "name": "Water",
  "id": 3
}, {
  "name": "Flour",
  "id": 1
}, {
  "name": "Yeast",
  "id": 2
}];
const ingredientsMap = ingredients.map((ingredient, index) => /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("li", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement(react_router_dom__WEBPACK_IMPORTED_MODULE_1__.Link, {
  to: `${ingredient.id}`
}, ingredient.name)));

class IngredientHome extends react__WEBPACK_IMPORTED_MODULE_0__.Component {
  render() {
    return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("div", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("ul", null, ingredientsMap));
  }

}

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (IngredientHome);

/***/ }),

/***/ "./src/components/ingredient/IngredientPage.tsx":
/*!******************************************************!*\
  !*** ./src/components/ingredient/IngredientPage.tsx ***!
  \******************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "./node_modules/react/index.js");

const ingredient = {
  "id": 3,
  "name": "Water",
  "desc": "Good ol' H20",
  "is_vegan": true,
  "serving_size": {
    "unit": "mL",
    "amount": 500,
    "grams": 500
  },
  "batch_size": {
    "unit": "L",
    "amount": 1,
    "grams": 1000
  },
  "imgs": [{
    url: "https://images.unsplash.com/photo-1511593358241-7eea1f3c84e5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2274&q=80",
    desc: "water 1"
  }, {
    url: "https://images.unsplash.com/photo-1562016600-ece13e8ba570?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2238&q=80",
    desc: "water 2"
  }, {
    url: "https://images.unsplash.com/photo-1519873174361-37788c5a73c7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2141&q=80",
    desc: "water 3"
  }]
};
const imgsMap = ingredient.imgs.map(img => /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("li", {
  className: "m3"
}, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("img", {
  src: img.url,
  alt: img.desc,
  className: " h-24  w-24 overflow-clip "
})));

class IngredientPage extends react__WEBPACK_IMPORTED_MODULE_0__.Component {
  render() {
    return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("div", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("h1", null, ingredient.name), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("p", null, ingredient.desc), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("ul", {
      className: "flex"
    }, imgsMap), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("span", null, ingredient.is_vegan), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("span", null, ingredient.serving_size.amount, ingredient.serving_size.unit, " per serving"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("span", null, ingredient.batch_size.amount, ingredient.batch_size.unit, " per batch"));
  }

}

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (IngredientPage);

/***/ }),

/***/ "./src/components/recipe/RecipeHero.js":
/*!*********************************************!*\
  !*** ./src/components/recipe/RecipeHero.js ***!
  \*********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "./node_modules/react/index.js");


class RecipeHero extends react__WEBPACK_IMPORTED_MODULE_0__.Component {
  constructor(props) {
    super(props);
  }

  render() {
    return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("div", {
      className: "relative bg-white overflow-hidden"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("div", {
      className: "max-w-7xl mx-auto"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("div", {
      className: "relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("main", {
      className: "mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("div", {
      className: "sm:text-center lg:text-left"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("h1", {
      className: "text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("span", {
      className: "block xl:inline"
    }, this.props.recipe.name), ' '), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("h2", {
      className: "mt-5 text-3xl tracking-tight font-bold italic text-gray-300 sm:text-4xl md:text-5xl"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("span", {
      className: "block text-indigo-600 xl:inline"
    }, this.props.recipe.subtitle)), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("p", {
      className: "mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0"
    }, "created by @username"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("div", {
      className: "mt-2 sm:mt-2 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-2 md:text-xl lg:mx-0"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("img", {
      className: "inline-block h-10 w-10 rounded-full ring-2 ring-white",
      src: "https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80",
      alt: ""
    })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("p", {
      className: "flex -space-x-1 mt-1 text-sm text-gray-500 sm:mt-2 sm:text-md sm:max-w-xl sm:mx-auto md:mt-2 md:text-l lg:mx-0"
    }, "used by @username and 3 others"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("div", {
      className: "flex -space-x-1 mt-2 sm:mt-2 sm:text-md sm:max-w-xl sm:mx-auto md:mt-2 md:text-l lg:mx-0"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("img", {
      className: "inline-block h-6 w-6 rounded-full ring-2 ring-white",
      src: "https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80",
      alt: ""
    }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("img", {
      className: "inline-block h-6 w-6 rounded-full ring-2 ring-white",
      src: "https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80",
      alt: ""
    }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("img", {
      className: "inline-block h-6 w-6 rounded-full ring-2 ring-white",
      src: "https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.25&w=256&h=256&q=80",
      alt: ""
    }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("img", {
      className: "inline-block h-6 w-6 rounded-full ring-2 ring-white",
      src: "https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80",
      alt: ""
    })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("div", {
      className: "mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("div", {
      className: "rounded-md shadow"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("a", {
      href: "#",
      className: "w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 md:py-4 md:text-lg md:px-3"
    }, "Prep Time")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("div", {
      className: "mt-3 sm:mt-0 sm:ml-3"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("a", {
      href: "#",
      className: "w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-indigo-700 bg-indigo-100 hover:bg-indigo-200 md:py-4 md:text-lg md:px-3"
    }, "Cook Time")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("div", {
      className: "mt-3 sm:mt-0 sm:ml-3"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("a", {
      href: "#",
      className: "w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-indigo-700 bg-indigo-100 hover:bg-indigo-200 md:py-4 md:text-lg md:px-3"
    }, "Total Time"))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("div", {
      className: ""
    }, this.props.recipe.desc.split('\n\n').map(i => {
      return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("p", {
        key: i,
        className: "pt-5 text-sm text-gray-500"
      }, i);
    })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("p", {
      className: "mt-5 text-sm"
    }, "\u221A/X vegan"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("p", {
      className: "text-xs"
    }, "tags"))))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("div", {
      className: "lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("img", {
      className: "h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full",
      src: this.props.recipe.img,
      alt: this.props.recipe.img_alt
    })));
  }

}

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (RecipeHero);

/***/ }),

/***/ "./src/components/recipe/RecipeHome.tsx":
/*!**********************************************!*\
  !*** ./src/components/recipe/RecipeHome.tsx ***!
  \**********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "./node_modules/react/index.js");
/* harmony import */ var react_router_dom__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! react-router-dom */ "./node_modules/react-router-dom/index.js");


const biga = {
  recipe: {
    id: 1,
    name: 'Biga',
    subtitle: 'Proper Pre-ferment Prevents Poor Pan',
    desc: 'Biga is a type of pre-fermentation used in Italian baking. Many popular Italian breads, including ciabatta, are made using a biga. Using a biga adds complexity to the bread\'s flavor and is often used in breads that need a light, open texture with holes. Apart from adding to flavor and texture, a biga also helps to preserve bread by making it less perishable.\n\n Biga techniques were developed after the advent of baker\'s yeast as bakers in Italy moved away from the use of sourdough and needed to recover some of the flavor that was given up in this move. Bigas are usually dry and thick compared to a sourdough starter. This thickness is believed to give a Biga its characteristic slightly nutty taste. Biga is usually made fresh every day, using a small amount of baker\'s yeast in a thick dough, which varies from 45 to 90% hydration as a baker\'s percentage, and is allowed to ferment from 12 to 16 hours to fully develop its flavor.',
    prepMinutes: "12 minutes",
    cookMinutes: "0 minutes",
    totalTime: "12-14 hours",
    img: "https://s3.us-west-1.amazonaws.com/img.vegify.app/biga-istock-orig.jpeg",
    img_alt: "Biga"
  },
  ingredients: [{
    amount: '165g',
    name: 'Flour',
    image: 'https://s3.us-west-1.amazonaws.com/img.vegify.app/flour-istock-orig.jpeg'
  }, {
    amount: '0.2g',
    name: 'Yeast',
    image: 'https://s3.us-west-1.amazonaws.com/img.vegify.app/yeast-istock-orig.jpeg'
  }, {
    amount: '250g',
    name: 'Water',
    image: 'https://s3.us-west-1.amazonaws.com/img.vegify.app/water-unsplash-orig.jpeg'
  }],
  steps: [{
    headerText: 'Make the Biga',
    mainText: 'Two nights before you plan to make pizza, measure and mix the Biga ingredients. Put the water (90-95ºF) in a 4- to 6- quart dough tub. Add the 0.2 gram of instant dried yeast to the water, let it rest there for a minute to hydrate, then swish it around until dissolved. Add the 250 grams of flour and mix by hand, using the pincer method, alternating with folding the dough until all of the ingredients are incorporated. Put a lid on the dough container and let it develop overnight at room temperature. At 68ºF, the Biga should be ready in about 12 hours; it should have tripled and be visibly gassy.',
    image: "https://s3.us-west-1.amazonaws.com/img.vegify.app/biga-istock-orig.jpeg"
  }]
};
const recipes = [biga, biga];
const recipesMap = recipes.map((recipe, index) => /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("li", {
  key: index
}, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement(react_router_dom__WEBPACK_IMPORTED_MODULE_1__.Link, {
  to: `${recipe.recipe.id}`
}, recipe.recipe.name)));

class RecipeHome extends react__WEBPACK_IMPORTED_MODULE_0__.Component {
  constructor(props) {
    super(props);
  }

  render() {
    return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("div", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("ul", null, recipesMap));
  }

}

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (RecipeHome);

/***/ }),

/***/ "./src/components/recipe/RecipeIngredients.tsx":
/*!*****************************************************!*\
  !*** ./src/components/recipe/RecipeIngredients.tsx ***!
  \*****************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "./node_modules/react/index.js");
/* harmony import */ var react_router_dom__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! react-router-dom */ "./node_modules/react-router-dom/index.js");



class RecipeIngredients extends react__WEBPACK_IMPORTED_MODULE_0__.Component {
  constructor(props) {
    super(props);
  }

  render() {
    return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("div", {
      className: "px-4 py-5 sm:px-6"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("h3", {
      className: "text-lg leading-6 font-medium text-gray-900"
    }, "Ingredients"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("table", {
      className: "min-w-full divide-y divide-gray-200"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("tbody", {
      className: "bg-white divide-y divide-gray-200"
    }, this.props.ingredients.map(ingredient => /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("tr", {
      key: ingredient.name
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("td", {
      className: "px-6 py-4 whitespace-normal"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("div", {
      className: "flex items-center"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("div", {
      className: "flex-shrink-0 h-10 w-10"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("img", {
      className: "h-10 w-10 rounded-full",
      src: ingredient.image,
      alt: ""
    })))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("td", {
      className: "px-6 py-4 whitespace-normal text-sm text-gray-500"
    }, ingredient.amount), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("td", {
      className: "px-6 py-4 whitespace-normal"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement(react_router_dom__WEBPACK_IMPORTED_MODULE_1__.Link, {
      to: `/ingredient/${ingredient.id}`
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("div", {
      className: "text-sm text-gray-900"
    }, ingredient.name))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("td", {
      className: "px-6 py-4 whitespace-normal"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("span", {
      className: "px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800"
    }, "Vegan")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("td", {
      className: "px-6 py-4 whitespace-nowrap text-right text-sm font-medium"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("a", {
      href: "#",
      className: "text-indigo-600 hover:text-indigo-900"
    }, "Edit")))))));
  }

}

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (RecipeIngredients);

/***/ }),

/***/ "./src/components/recipe/RecipePage.tsx":
/*!**********************************************!*\
  !*** ./src/components/recipe/RecipePage.tsx ***!
  \**********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "./node_modules/react/index.js");
/* harmony import */ var _RecipeHero__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./RecipeHero */ "./src/components/recipe/RecipeHero.js");
/* harmony import */ var _RecipeIngredients__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./RecipeIngredients */ "./src/components/recipe/RecipeIngredients.tsx");
/* harmony import */ var _RecipeSteps__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./RecipeSteps */ "./src/components/recipe/RecipeSteps.js");
/* harmony import */ var _NutritionLabel__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ../NutritionLabel */ "./src/components/NutritionLabel.js");





const recipe = {
  recipe: {
    name: 'Biga',
    subtitle: 'Proper Pre-ferment Prevents Poor Pan',
    desc: 'Biga is a type of pre-fermentation used in Italian baking. Many popular Italian breads, including ciabatta, are made using a biga. Using a biga adds complexity to the bread\'s flavor and is often used in breads that need a light, open texture with holes. Apart from adding to flavor and texture, a biga also helps to preserve bread by making it less perishable.\n\n Biga techniques were developed after the advent of baker\'s yeast as bakers in Italy moved away from the use of sourdough and needed to recover some of the flavor that was given up in this move. Bigas are usually dry and thick compared to a sourdough starter. This thickness is believed to give a Biga its characteristic slightly nutty taste. Biga is usually made fresh every day, using a small amount of baker\'s yeast in a thick dough, which varies from 45 to 90% hydration as a baker\'s percentage, and is allowed to ferment from 12 to 16 hours to fully develop its flavor.',
    prepMinutes: "12 minutes",
    cookMinutes: "0 minutes",
    totalTime: "12-14 hours",
    img: "https://s3.us-west-1.amazonaws.com/img.vegify.app/biga-istock-orig.jpeg",
    img_alt: "Biga"
  },
  ingredients: [{
    id: 1,
    amount: '165g',
    name: 'Flour',
    image: 'https://s3.us-west-1.amazonaws.com/img.vegify.app/flour-istock-orig.jpeg'
  }, {
    id: 2,
    amount: '0.2g',
    name: 'Yeast',
    image: 'https://s3.us-west-1.amazonaws.com/img.vegify.app/yeast-istock-orig.jpeg'
  }, {
    id: 3,
    amount: '250g',
    name: 'Water',
    image: 'https://s3.us-west-1.amazonaws.com/img.vegify.app/water-unsplash-orig.jpeg'
  }],
  steps: [{
    headerText: 'Make the Biga',
    mainText: 'Two nights before you plan to make pizza, measure and mix the Biga ingredients. Put the water (90-95ºF) in a 4- to 6- quart dough tub. Add the 0.2 gram of instant dried yeast to the water, let it rest there for a minute to hydrate, then swish it around until dissolved. Add the 250 grams of flour and mix by hand, using the pincer method, alternating with folding the dough until all of the ingredients are incorporated. Put a lid on the dough container and let it develop overnight at room temperature. At 68ºF, the Biga should be ready in about 12 hours; it should have tripled and be visibly gassy.',
    image: "https://s3.us-west-1.amazonaws.com/img.vegify.app/biga-istock-orig.jpeg"
  }]
};

class RecipePage extends react__WEBPACK_IMPORTED_MODULE_0__.Component {
  constructor(props) {
    super(props);
  }

  render() {
    return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("div", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement(_RecipeHero__WEBPACK_IMPORTED_MODULE_1__["default"], {
      recipe: recipe.recipe
    }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement(_RecipeIngredients__WEBPACK_IMPORTED_MODULE_2__["default"], {
      ingredients: recipe.ingredients
    }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement(_RecipeSteps__WEBPACK_IMPORTED_MODULE_3__["default"], {
      steps: recipe.steps
    }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement(_NutritionLabel__WEBPACK_IMPORTED_MODULE_4__["default"], null));
  }

}

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (RecipePage);

/***/ }),

/***/ "./src/components/recipe/RecipeSteps.js":
/*!**********************************************!*\
  !*** ./src/components/recipe/RecipeSteps.js ***!
  \**********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "./node_modules/react/index.js");


class RecipeSteps extends react__WEBPACK_IMPORTED_MODULE_0__.Component {
  constructor(props) {
    super(props);
  }

  render() {
    return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("div", {
      className: "px-4 py-5 sm:px-6"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("h3", {
      className: "text-lg leading-6 font-medium text-gray-900"
    }, "Directions"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("table", {
      className: "min-w-full divide-y divide-gray-200"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("tbody", {
      className: "bg-white divide-y divide-gray-200"
    }, this.props.steps.map((step, index) => /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("tr", {
      key: step.mainText
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("td", {
      className: "px-6 py-4 whitespace-normal"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("div", {
      className: "flex items-center"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("div", {
      className: "flex-shrink-0 h-10 w-10"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("img", {
      className: "h-10 w-10 rounded-full",
      src: step.image,
      alt: ""
    })))), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("td", {
      className: "px-6 py-4 whitespace-normal"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("div", {
      className: "text-md font-bold text-gray-900"
    }, index + 1, ". ", step.headerText), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("div", {
      className: "text-sm text-gray-500"
    }, step.mainText)), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("td", {
      className: "px-6 py-4 whitespace-normal text-right text-sm font-medium"
    }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("a", {
      href: "#",
      className: "text-indigo-600 hover:text-indigo-900"
    }, "Edit")))))));
  }

}

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (RecipeSteps);

/***/ }),

/***/ "./src/components/useConfig.tsx":
/*!**************************************!*\
  !*** ./src/components/useConfig.tsx ***!
  \**************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ useConfig)
/* harmony export */ });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "./node_modules/react/index.js");
/* harmony import */ var _ConfigContext__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./ConfigContext */ "./src/components/ConfigContext.tsx");


/**
 * Hook to read application configuration settings
 */

function useConfig() {
  const config = (0,react__WEBPACK_IMPORTED_MODULE_0__.useContext)(_ConfigContext__WEBPACK_IMPORTED_MODULE_1__["default"]);

  if (!config) {
    throw new Error("Configuration context not initialized!");
  }

  return config;
}

/***/ }),

/***/ "./src/server/config.tsx":
/*!*******************************!*\
  !*** ./src/server/config.tsx ***!
  \*******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _public_manifest_json__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../../public/manifest.json */ "./public/manifest.json");
/**
 * Configuration
 */

/** Whether we're running on a local desktop or on AWS Lambda */

const isLocal = process.env.IS_LOCAL || process.env.IS_OFFLINE;
/**
 * Configuration Options
 *
 * IMPORTANT:
 * The config is injected into the client (browser) and accessible through the {@link useConfig}
 * hook. However, due to this behavior, it is important NOT to expose any sensitive information
 * such as passwords or tokens through the config.
 */

const config = {
  /** Application Config */
  app: {
    /** Name of the app is loaded from the `manifest.json` */
    TITLE: _public_manifest_json__WEBPACK_IMPORTED_MODULE_0__.short_name,

    /** Theme is also loaded from the `manifest.json` */
    THEME_COLOR: _public_manifest_json__WEBPACK_IMPORTED_MODULE_0__.theme_color,

    /** URL to our public API Gateway endpoint */
    URL: isLocal ? `http://localhost:3000` : String(process.env.APIGATEWAY_URL),

    /** Where the bundled distribution files (`main.js`, `main.css`) are hosted */
    DIST_URL: isLocal ? "http://localhost:8080" : String(process.env.APP_DIST_URL),

    /** Where the contents of the `public` folder are hosted (might be the same as `config.app.DIST_URL`) */
    PUBLIC_URL: isLocal ? "http://localhost:8080" : String(process.env.APP_PUBLIC_URL)
  }
};
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (config);

/***/ }),

/***/ "./src/server/html.tsx":
/*!*****************************!*\
  !*** ./src/server/html.tsx ***!
  \*****************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/**
 * This HTML file acts as a template that we insert all our generated
 * application code into before sending it to the client as regular HTML.
 * Note we're returning a template string from this function.
 */
const html = ({
  stats,
  content,
  config,
  css = ''
}) => `<!DOCTYPE html>
  <html lang="en" class="h-full bg-gray-100">
    <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="minimum-scale=1, initial-scale=1, width=device-width" />
      <meta name="theme-color" content="${config.app.THEME_COLOR}" />
      <title>${config.app.TITLE}</title>
      <link rel="manifest" href="${config.app.PUBLIC_URL}/manifest.json" />
      <link rel="shortcut icon" href="${config.app.PUBLIC_URL}/favicon.ico" />
      <link href="${config.app.PUBLIC_URL}/tailwind.css" rel="stylesheet">      
      ${stats.styles.map(filename => `<link rel="stylesheet" href="${config.app.DIST_URL}/${filename}" />`).join('\n')}
      <style id="jss-server-side">${css}</style>
      <script id="config-server-side">
        window.__CONFIG__ = ${JSON.stringify(config)};
      </script>
    </head>
    <body class="h-full">
      <div id="root">${content}</div>
      ${stats.scripts.map(filename => `<script src="${config.app.DIST_URL}/${filename}" crossorigin></script>`).join('\n')}
    </body>
  </html>`;

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (html);

/***/ }),

/***/ "./src/server/render.tsx":
/*!*******************************!*\
  !*** ./src/server/render.tsx ***!
  \*******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ render)
/* harmony export */ });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "./node_modules/react/index.js");
/* harmony import */ var react_dom_server__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! react-dom/server */ "./node_modules/react-dom/server.js");
/* harmony import */ var react_router_dom_server__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! react-router-dom/server */ "./node_modules/react-router-dom/server.js");
/* harmony import */ var _App__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../App */ "./src/App.tsx");
/* harmony import */ var _components_ConfigContext__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../components/ConfigContext */ "./src/components/ConfigContext.tsx");
/* harmony import */ var _config__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./config */ "./src/server/config.tsx");
/* harmony import */ var _html__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./html */ "./src/server/html.tsx");
/**
 * Server Side Rendering
 */








/**
 * Server-side rendering
 */
async function render(_event) {
  // The stats are generated by the Webpack Stats Plugin (`webpack-stats-plugin`)
  // We need to build the request location string manually from the event path and the query string parameters
  let location = _event.path;

  if (_event.queryStringParameters) {
    const searchParams = new URLSearchParams();
    Object.entries(_event.queryStringParameters).forEach(([key, value]) => searchParams.append(key, value !== null && value !== void 0 ? value : ''));
    location += `?${searchParams.toString()}`;
  }

  const stats = await __webpack_require__.e(/*! import() */ "dist_stats_json").then(__webpack_require__.t.bind(__webpack_require__, /*! ../../dist/stats.json */ "./dist/stats.json", 19));
  const content = (0,react_dom_server__WEBPACK_IMPORTED_MODULE_1__.renderToString)( /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement(_components_ConfigContext__WEBPACK_IMPORTED_MODULE_3__["default"].Provider, {
    value: _config__WEBPACK_IMPORTED_MODULE_4__["default"]
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement(react_router_dom_server__WEBPACK_IMPORTED_MODULE_6__.StaticRouter, {
    location: location
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement(_App__WEBPACK_IMPORTED_MODULE_2__["default"], null))));
  return (0,_html__WEBPACK_IMPORTED_MODULE_5__["default"])({
    stats,
    content,
    config: _config__WEBPACK_IMPORTED_MODULE_4__["default"]
  });
}

/***/ }),

/***/ "./src/main.css":
/*!**********************!*\
  !*** ./src/main.css ***!
  \**********************/
/***/ (() => {



/***/ }),

/***/ "./public/manifest.json":
/*!******************************!*\
  !*** ./public/manifest.json ***!
  \******************************/
/***/ ((module) => {

"use strict";
module.exports = JSON.parse('{"short_name":"Vegify","name":"Vegify.App","icons":[{"src":"favicon.ico","sizes":"64x64 32x32 24x24 16x16","type":"image/x-icon"}],"display":"standalone","theme_color":"#000000","background_color":"#ffffff"}');

/***/ })

};
;
//# sourceMappingURL=src_server_render_tsx.js.map