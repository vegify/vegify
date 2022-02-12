/*
  Warnings:

  - A unique constraint covering the columns `[username,email,id]` on the table `app_user` will be added. If there are existing duplicate values, this will fail.
  - A unique constraint covering the columns `[id,url]` on the table `href` will be added. If there are existing duplicate values, this will fail.
  - A unique constraint covering the columns `[id,url]` on the table `img` will be added. If there are existing duplicate values, this will fail.
  - A unique constraint covering the columns `[name,id]` on the table `ingredient` will be added. If there are existing duplicate values, this will fail.
  - A unique constraint covering the columns `[id,name]` on the table `nutrient` will be added. If there are existing duplicate values, this will fail.
  - A unique constraint covering the columns `[id,as_ingredient_id]` on the table `recipe` will be added. If there are existing duplicate values, this will fail.
  - A unique constraint covering the columns `[id,tag]` on the table `tag` will be added. If there are existing duplicate values, this will fail.

*/
-- AlterTable
ALTER TABLE "href" ALTER COLUMN "desc" DROP NOT NULL;

-- AlterTable
ALTER TABLE "ingredient" ALTER COLUMN "is_vegan" DROP NOT NULL;

-- AlterTable
ALTER TABLE "nutrition_profile" ALTER COLUMN "name" DROP NOT NULL,
ALTER COLUMN "img_url" DROP NOT NULL,
ALTER COLUMN "originator_name" DROP NOT NULL,
ALTER COLUMN "originator_url" DROP NOT NULL,
ALTER COLUMN "desc" DROP NOT NULL;

-- CreateIndex
CREATE UNIQUE INDEX "u_au" ON "app_user"("username", "email", "id");

-- CreateIndex
CREATE UNIQUE INDEX "u_h" ON "href"("id", "url");

-- CreateIndex
CREATE UNIQUE INDEX "u_img" ON "img"("id", "url");

-- CreateIndex
CREATE INDEX "ingredient_idx_name" ON "ingredient"("name", "id");

-- CreateIndex
CREATE UNIQUE INDEX "u_i" ON "ingredient"("name", "id");

-- CreateIndex
CREATE UNIQUE INDEX "u_n" ON "nutrient"("id", "name");

-- CreateIndex
CREATE UNIQUE INDEX "u_r" ON "recipe"("id", "as_ingredient_id");

-- CreateIndex
CREATE UNIQUE INDEX "u_t" ON "tag"("id", "tag");
