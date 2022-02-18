/*
  Warnings:

  - A unique constraint covering the columns `[username]` on the table `app_user` will be added. If there are existing duplicate values, this will fail.
  - A unique constraint covering the columns `[email]` on the table `app_user` will be added. If there are existing duplicate values, this will fail.

*/
-- DropIndex
DROP INDEX "u_au";

-- AlterTable
ALTER TABLE "app_user" ALTER COLUMN "email" DROP NOT NULL;

-- CreateIndex
CREATE UNIQUE INDEX "username" ON "app_user"("username");

-- CreateIndex
CREATE UNIQUE INDEX "email" ON "app_user"("email");
