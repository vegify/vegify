/*
  Warnings:

  - A unique constraint covering the columns `[name]` on the table `ingredient` will be added. If there are existing duplicate values, this will fail.
  - Added the required column `creator_id` to the `ingredient` table without a default value. This is not possible if the table is not empty.

*/
-- DropIndex
DROP INDEX "u_i";

-- AlterTable
ALTER TABLE "ingredient" ADD COLUMN     "creator_id" INTEGER NOT NULL;

-- CreateIndex
CREATE UNIQUE INDEX "u_i_n" ON "ingredient"("name");

-- AddForeignKey
ALTER TABLE "ingredient" ADD CONSTRAINT "ingredient_app_user" FOREIGN KEY ("creator_id") REFERENCES "app_user"("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
