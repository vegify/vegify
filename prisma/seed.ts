import { PrismaClient } from "@prisma/client";
const db = new PrismaClient();

async function seed() {
  await Promise.all(
    getIngredients().map(ingredient => {
      return db.ingredient.create({ data: ingredient });
    })
  );
}

seed();

function getIngredients() {
  // shout-out to https://icanhazdadjoke.com/

  return [
    {
      name: "Flour",
      desc: `For bread.`
    },
    {
      name: "Water",
      desc: `For drinking.`
    },
    {
      name: "Salt",
      desc: "For saltiness"
    },
    {
      name: "Yeast",
      desc: "For rising"
    }
    
  ];
}