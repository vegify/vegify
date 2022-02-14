import { PrismaClient } from "@prisma/client";
const db = new PrismaClient();

async function seed() {
  const john = await db.app_user.create({
    data: {
      username: "john",
      // this is a hashed version of "twixrox"
      pwd:
        "$2b$10$K7L1OJ45/4Y2nIvhRVpCe.FSmhDdWoXehVzJptJ/op0lSsvqNu/1u",
      email: "john@vegify.app"
    }
  });
  await Promise.all(
    getIngredients().map(ingredient => {
      const data = { creator_id: john.id, ...ingredient };
      return db.ingredient.create({ data });
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