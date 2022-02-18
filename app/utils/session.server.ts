import bcrypt from "bcryptjs";

import { db } from "./db.server";

type LoginForm = {
  username: string;
  password: string;
};

export async function login({
  username,
  password
}: LoginForm) {
  const user = await db.app_user.findUnique({
    where: { username }
  });
  if (!user) return null;

  const isCorrectPassword = await bcrypt.compare(
    password,
    user.password
  );
  if (!isCorrectPassword) return null;

  return { id: user.id, username };
}