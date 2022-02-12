-- CreateTable
CREATE TABLE "amount" (
    "id" SERIAL NOT NULL,
    "unit" VARCHAR NOT NULL,
    "amount" DECIMAL,
    "grams" DECIMAL NOT NULL,

    CONSTRAINT "amount_pk" PRIMARY KEY ("id")
);

-- CreateTable
CREATE TABLE "app_user" (
    "id" SERIAL NOT NULL,
    "username" VARCHAR NOT NULL,
    "img_id" INTEGER,
    "bio" VARCHAR,
    "website" VARCHAR,
    "email" VARCHAR NOT NULL,
    "pwd" VARCHAR NOT NULL,

    CONSTRAINT "id" PRIMARY KEY ("id")
);

-- CreateTable
CREATE TABLE "href" (
    "id" SERIAL NOT NULL,
    "url" VARCHAR NOT NULL,
    "desc" VARCHAR NOT NULL,

    CONSTRAINT "href_pk" PRIMARY KEY ("id")
);

-- CreateTable
CREATE TABLE "img" (
    "id" SERIAL NOT NULL,
    "desc" VARCHAR,
    "url" VARCHAR NOT NULL,

    CONSTRAINT "img_pk" PRIMARY KEY ("id")
);

-- CreateTable
CREATE TABLE "img_tag" (
    "img_tag_id" SERIAL NOT NULL,
    "img_id" INTEGER NOT NULL,
    "tag_id" INTEGER NOT NULL,

    CONSTRAINT "img_tag_pk" PRIMARY KEY ("img_tag_id")
);

-- CreateTable
CREATE TABLE "ingredient" (
    "id" SERIAL NOT NULL,
    "name" VARCHAR,
    "desc" VARCHAR,
    "is_vegan" BOOLEAN NOT NULL,
    "serving_size" INTEGER,
    "batch_size" INTEGER,

    CONSTRAINT "ingredient_pk" PRIMARY KEY ("id")
);

-- CreateTable
CREATE TABLE "ingredient_img" (
    "id" SERIAL NOT NULL,
    "img_id" INTEGER NOT NULL,
    "ingredient_id" INTEGER NOT NULL,

    CONSTRAINT "ingredient_img_pk" PRIMARY KEY ("id")
);

-- CreateTable
CREATE TABLE "ingredient_in_recipe" (
    "id" SERIAL NOT NULL,
    "recipe_id" INTEGER NOT NULL,
    "ingredient_id" INTEGER NOT NULL,
    "amount_id" INTEGER NOT NULL,

    CONSTRAINT "ingredient_in_recipe_pk" PRIMARY KEY ("id")
);

-- CreateTable
CREATE TABLE "ingredient_in_recipe_nutrient_amount" (
    "id" SERIAL NOT NULL,
    "unit" VARCHAR NOT NULL,
    "amount" DECIMAL,
    "grams" DECIMAL NOT NULL,
    "nutrient_id" INTEGER NOT NULL,
    "ingredient_in_recipe_id" INTEGER NOT NULL,

    CONSTRAINT "ingredient_in_recipe_nutrient_amount_pk" PRIMARY KEY ("id")
);

-- CreateTable
CREATE TABLE "ingredient_product" (
    "id" SERIAL NOT NULL,
    "ingredient_id" INTEGER NOT NULL,
    "product_id" INTEGER NOT NULL,

    CONSTRAINT "ingredient_product_pk" PRIMARY KEY ("id")
);

-- CreateTable
CREATE TABLE "ingredient_serving_nutrient_amount" (
    "id" SERIAL NOT NULL,
    "unit" VARCHAR NOT NULL,
    "amount" DECIMAL,
    "grams" DECIMAL NOT NULL,
    "nutrient_id" INTEGER NOT NULL,
    "ingredient_id" INTEGER NOT NULL,

    CONSTRAINT "ingredient_serving_nutrient_amount_pk" PRIMARY KEY ("id")
);

-- CreateTable
CREATE TABLE "ingredient_tag" (
    "id" SERIAL NOT NULL,
    "ingredient_id" INTEGER NOT NULL,
    "tag_id" INTEGER NOT NULL,

    CONSTRAINT "ingredient_tag_pk" PRIMARY KEY ("id")
);

-- CreateTable
CREATE TABLE "nutrient" (
    "id" SERIAL NOT NULL,
    "name" VARCHAR NOT NULL,
    "desc" VARCHAR NOT NULL,

    CONSTRAINT "nutrient_pk" PRIMARY KEY ("id")
);

-- CreateTable
CREATE TABLE "nutrient_amount" (
    "id" SERIAL NOT NULL,
    "unit" VARCHAR NOT NULL,
    "amount" DECIMAL,
    "grams" DECIMAL NOT NULL,
    "nutrient_id" INTEGER NOT NULL,

    CONSTRAINT "nutrient_amount_pk" PRIMARY KEY ("id")
);

-- CreateTable
CREATE TABLE "nutrient_img" (
    "id" SERIAL NOT NULL,
    "img_id" INTEGER NOT NULL,
    "nutrient_id" INTEGER NOT NULL,

    CONSTRAINT "nutrient_img_pk" PRIMARY KEY ("id")
);

-- CreateTable
CREATE TABLE "nutrition_profile" (
    "id" SERIAL NOT NULL,
    "name" VARCHAR NOT NULL,
    "img_url" VARCHAR NOT NULL,
    "originator_name" VARCHAR NOT NULL,
    "originator_url" VARCHAR NOT NULL,
    "desc" VARCHAR NOT NULL,

    CONSTRAINT "nutrition_profile_pk" PRIMARY KEY ("id")
);

-- CreateTable
CREATE TABLE "nutrition_profile_img" (
    "id" SERIAL NOT NULL,
    "nutrition_profile_id" INTEGER NOT NULL,
    "img_id" INTEGER NOT NULL,

    CONSTRAINT "nutrition_profile_img_pk" PRIMARY KEY ("id")
);

-- CreateTable
CREATE TABLE "nutrition_profile_tracked_nutrient" (
    "id" SERIAL NOT NULL,
    "unit" VARCHAR NOT NULL,
    "amount" DECIMAL,
    "grams" DECIMAL NOT NULL,
    "nutrient_id" INTEGER NOT NULL,
    "nutrition_profile_id" INTEGER NOT NULL,

    CONSTRAINT "nutrition_profile_tracked_nutrient_pk" PRIMARY KEY ("id")
);

-- CreateTable
CREATE TABLE "product" (
    "id" SERIAL NOT NULL,
    "name" VARCHAR NOT NULL,
    "upc" INTEGER NOT NULL,
    "price" MONEY NOT NULL,
    "is_vegan" BOOLEAN NOT NULL,
    "amazon_link" INTEGER NOT NULL,
    "store_locator_link" INTEGER NOT NULL,
    "desc" VARCHAR NOT NULL,

    CONSTRAINT "product_pk" PRIMARY KEY ("id")
);

-- CreateTable
CREATE TABLE "product_img" (
    "id" SERIAL NOT NULL,
    "img_id" INTEGER NOT NULL,
    "product_id" INTEGER NOT NULL,
    "label" BOOLEAN NOT NULL,
    "nutrition_label" BOOLEAN NOT NULL,
    "ingredient_label" BOOLEAN NOT NULL,

    CONSTRAINT "product_img_pk" PRIMARY KEY ("id")
);

-- CreateTable
CREATE TABLE "product_ingredient_label" (
    "id" SERIAL NOT NULL,
    "product_id" INTEGER NOT NULL,
    "ingredient_id" INTEGER NOT NULL,

    CONSTRAINT "product_ingredient_label_pk" PRIMARY KEY ("id")
);

-- CreateTable
CREATE TABLE "product_tag" (
    "id" SERIAL NOT NULL,
    "tag_id" INTEGER NOT NULL,
    "product_id" INTEGER NOT NULL,

    CONSTRAINT "product_tag_pk" PRIMARY KEY ("id")
);

-- CreateTable
CREATE TABLE "recipe" (
    "id" SERIAL NOT NULL,
    "as_ingredient_id" INTEGER NOT NULL,
    "creator_id" INTEGER NOT NULL,
    "subtitle" VARCHAR,
    "prep_minutes" INTEGER,
    "cook_minutes" INTEGER,
    "total_time" INTEGER,
    "video_id" INTEGER NOT NULL,
    "steps" INTEGER NOT NULL,

    CONSTRAINT "recipe_pk" PRIMARY KEY ("id")
);

-- CreateTable
CREATE TABLE "recipe_review" (
    "id" SERIAL NOT NULL,
    "review_id" INTEGER NOT NULL,
    "recipe_id" INTEGER NOT NULL,
    "user_id" INTEGER NOT NULL,

    CONSTRAINT "recipe_review_pk" PRIMARY KEY ("id")
);

-- CreateTable
CREATE TABLE "recipe_step" (
    "id" SERIAL NOT NULL,
    "header_text" VARCHAR NOT NULL,
    "main_text" VARCHAR NOT NULL,
    "video_id" INTEGER NOT NULL,
    "recipe_id" INTEGER NOT NULL,

    CONSTRAINT "recipe_step_pk" PRIMARY KEY ("id")
);

-- CreateTable
CREATE TABLE "recipe_step_img" (
    "id" SERIAL NOT NULL,
    "img_id" INTEGER NOT NULL,
    "recipe_step_id" INTEGER NOT NULL,

    CONSTRAINT "recipe_step_img_pk" PRIMARY KEY ("id")
);

-- CreateTable
CREATE TABLE "recipe_tag" (
    "id" SERIAL NOT NULL,
    "recipe_id" INTEGER NOT NULL,
    "tag_id" INTEGER NOT NULL,

    CONSTRAINT "recipe_tag_pk" PRIMARY KEY ("id")
);

-- CreateTable
CREATE TABLE "recipe_user" (
    "id" SERIAL NOT NULL,
    "recipe_id" INTEGER NOT NULL,
    "user_id" INTEGER NOT NULL,

    CONSTRAINT "recipe_user_pk" PRIMARY KEY ("id")
);

-- CreateTable
CREATE TABLE "review" (
    "id" SERIAL NOT NULL,
    "stars" INTEGER NOT NULL,
    "title" VARCHAR NOT NULL,
    "text" VARCHAR NOT NULL,

    CONSTRAINT "review_pk" PRIMARY KEY ("id")
);

-- CreateTable
CREATE TABLE "review_img" (
    "id" SERIAL NOT NULL,
    "review_id" INTEGER NOT NULL,
    "img_id" INTEGER NOT NULL,

    CONSTRAINT "review_img_pk" PRIMARY KEY ("id")
);

-- CreateTable
CREATE TABLE "tag" (
    "id" SERIAL NOT NULL,
    "tag" VARCHAR NOT NULL,

    CONSTRAINT "tag_pk" PRIMARY KEY ("id")
);

-- CreateTable
CREATE TABLE "user_biometrics" (
    "id" INTEGER NOT NULL,
    "calorie_tracking" BOOLEAN NOT NULL,
    "weight_goal" VARCHAR NOT NULL,
    "weight_in_kg" DECIMAL NOT NULL,
    "height_in_cm" DECIMAL NOT NULL,
    "sex_multiplier" DECIMAL NOT NULL,

    CONSTRAINT "user_biometrics_pk" PRIMARY KEY ("id")
);

-- CreateTable
CREATE TABLE "user_demographics" (
    "id" SERIAL NOT NULL,
    "gender" VARCHAR NOT NULL,
    "birthdate" TIMESTAMP(6) NOT NULL,
    "location" VARCHAR NOT NULL,
    "user_id" INTEGER NOT NULL,

    CONSTRAINT "user_demographics_pk" PRIMARY KEY ("id")
);

-- CreateTable
CREATE TABLE "user_nutrition_profile" (
    "id" SERIAL NOT NULL,
    "user_id" INTEGER NOT NULL,
    "nutrition_profile_id" INTEGER NOT NULL,

    CONSTRAINT "user_nutrition_profile_pk" PRIMARY KEY ("id")
);

-- CreateTable
CREATE TABLE "video" (
    "id" SERIAL NOT NULL,
    "url" VARCHAR NOT NULL,
    "desc" INTEGER NOT NULL,

    CONSTRAINT "video_pk" PRIMARY KEY ("id")
);

-- AddForeignKey
ALTER TABLE "app_user" ADD CONSTRAINT "user_img" FOREIGN KEY ("img_id") REFERENCES "img"("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- AddForeignKey
ALTER TABLE "img_tag" ADD CONSTRAINT "img_tag_img" FOREIGN KEY ("img_id") REFERENCES "img"("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- AddForeignKey
ALTER TABLE "img_tag" ADD CONSTRAINT "img_tag_tag" FOREIGN KEY ("tag_id") REFERENCES "tag"("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- AddForeignKey
ALTER TABLE "ingredient" ADD CONSTRAINT "ingredient_batch_size" FOREIGN KEY ("batch_size") REFERENCES "amount"("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- AddForeignKey
ALTER TABLE "ingredient" ADD CONSTRAINT "ingredient_serving_size" FOREIGN KEY ("serving_size") REFERENCES "amount"("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- AddForeignKey
ALTER TABLE "ingredient_img" ADD CONSTRAINT "ingredient_img_img" FOREIGN KEY ("img_id") REFERENCES "img"("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- AddForeignKey
ALTER TABLE "ingredient_img" ADD CONSTRAINT "ingredient_img_ingredient" FOREIGN KEY ("ingredient_id") REFERENCES "ingredient"("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- AddForeignKey
ALTER TABLE "ingredient_in_recipe" ADD CONSTRAINT "recipe_ingredient_amount" FOREIGN KEY ("amount_id") REFERENCES "amount"("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- AddForeignKey
ALTER TABLE "ingredient_in_recipe" ADD CONSTRAINT "recipe_ingredient_ingredient" FOREIGN KEY ("ingredient_id") REFERENCES "ingredient"("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- AddForeignKey
ALTER TABLE "ingredient_in_recipe" ADD CONSTRAINT "recipe_recipe_ingredient" FOREIGN KEY ("recipe_id") REFERENCES "recipe"("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- AddForeignKey
ALTER TABLE "ingredient_in_recipe_nutrient_amount" ADD CONSTRAINT "recipe_ingredient_nutrient_amount_recipe_ingredient" FOREIGN KEY ("ingredient_in_recipe_id") REFERENCES "ingredient_in_recipe"("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- AddForeignKey
ALTER TABLE "ingredient_in_recipe_nutrient_amount" ADD CONSTRAINT "ingredient_in_recipe_nutrient_amount_nutrient" FOREIGN KEY ("nutrient_id") REFERENCES "nutrient"("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- AddForeignKey
ALTER TABLE "ingredient_product" ADD CONSTRAINT "ingredient_product_ingredient" FOREIGN KEY ("ingredient_id") REFERENCES "ingredient"("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- AddForeignKey
ALTER TABLE "ingredient_product" ADD CONSTRAINT "ingredient_product_product" FOREIGN KEY ("product_id") REFERENCES "product"("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- AddForeignKey
ALTER TABLE "ingredient_serving_nutrient_amount" ADD CONSTRAINT "ingredient_serving_nutrient_amount_ingredient" FOREIGN KEY ("ingredient_id") REFERENCES "ingredient"("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- AddForeignKey
ALTER TABLE "ingredient_serving_nutrient_amount" ADD CONSTRAINT "ingredient_serving_nutrient_amount_nutrient" FOREIGN KEY ("nutrient_id") REFERENCES "nutrient"("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- AddForeignKey
ALTER TABLE "ingredient_tag" ADD CONSTRAINT "ingredient_tag_ingredient" FOREIGN KEY ("ingredient_id") REFERENCES "ingredient"("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- AddForeignKey
ALTER TABLE "ingredient_tag" ADD CONSTRAINT "ingredient_tag_tag" FOREIGN KEY ("tag_id") REFERENCES "tag"("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- AddForeignKey
ALTER TABLE "nutrient_amount" ADD CONSTRAINT "nutrient_amount_nutrient" FOREIGN KEY ("nutrient_id") REFERENCES "nutrient"("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- AddForeignKey
ALTER TABLE "nutrient_img" ADD CONSTRAINT "nutrient_img_img" FOREIGN KEY ("img_id") REFERENCES "img"("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- AddForeignKey
ALTER TABLE "nutrient_img" ADD CONSTRAINT "nutrient_img_nutrient" FOREIGN KEY ("nutrient_id") REFERENCES "nutrient"("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- AddForeignKey
ALTER TABLE "nutrition_profile_img" ADD CONSTRAINT "nutrition_profile_img_img" FOREIGN KEY ("img_id") REFERENCES "img"("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- AddForeignKey
ALTER TABLE "nutrition_profile_img" ADD CONSTRAINT "nutrition_profile_img_nutrition_profile" FOREIGN KEY ("nutrition_profile_id") REFERENCES "nutrition_profile"("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- AddForeignKey
ALTER TABLE "nutrition_profile_tracked_nutrient" ADD CONSTRAINT "nutrition_profile_tracked_nutrient_nutrient" FOREIGN KEY ("nutrient_id") REFERENCES "nutrient"("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- AddForeignKey
ALTER TABLE "nutrition_profile_tracked_nutrient" ADD CONSTRAINT "nutrition_profile_nutrient_amount_nutrition_profile" FOREIGN KEY ("nutrition_profile_id") REFERENCES "nutrition_profile"("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- AddForeignKey
ALTER TABLE "product" ADD CONSTRAINT "store_locator_url" FOREIGN KEY ("amazon_link") REFERENCES "href"("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- AddForeignKey
ALTER TABLE "product" ADD CONSTRAINT "url_product_amazon_url" FOREIGN KEY ("store_locator_link") REFERENCES "href"("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- AddForeignKey
ALTER TABLE "product_img" ADD CONSTRAINT "product_img_img" FOREIGN KEY ("img_id") REFERENCES "img"("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- AddForeignKey
ALTER TABLE "product_img" ADD CONSTRAINT "product_img_product" FOREIGN KEY ("product_id") REFERENCES "product"("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- AddForeignKey
ALTER TABLE "product_ingredient_label" ADD CONSTRAINT "product_ingredient_ingredient" FOREIGN KEY ("ingredient_id") REFERENCES "ingredient"("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- AddForeignKey
ALTER TABLE "product_ingredient_label" ADD CONSTRAINT "product_ingredient_product" FOREIGN KEY ("product_id") REFERENCES "product"("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- AddForeignKey
ALTER TABLE "product_tag" ADD CONSTRAINT "product_tag_product" FOREIGN KEY ("product_id") REFERENCES "product"("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- AddForeignKey
ALTER TABLE "product_tag" ADD CONSTRAINT "product_tag_tag" FOREIGN KEY ("tag_id") REFERENCES "tag"("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- AddForeignKey
ALTER TABLE "recipe" ADD CONSTRAINT "recipe_creator" FOREIGN KEY ("creator_id") REFERENCES "app_user"("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- AddForeignKey
ALTER TABLE "recipe" ADD CONSTRAINT "recipe_ingredient" FOREIGN KEY ("as_ingredient_id") REFERENCES "ingredient"("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- AddForeignKey
ALTER TABLE "recipe" ADD CONSTRAINT "recipe_video" FOREIGN KEY ("video_id") REFERENCES "video"("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- AddForeignKey
ALTER TABLE "recipe_review" ADD CONSTRAINT "recipe_review_user" FOREIGN KEY ("user_id") REFERENCES "app_user"("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- AddForeignKey
ALTER TABLE "recipe_review" ADD CONSTRAINT "recipe_review_recipe" FOREIGN KEY ("recipe_id") REFERENCES "recipe"("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- AddForeignKey
ALTER TABLE "recipe_review" ADD CONSTRAINT "recipe_review_review" FOREIGN KEY ("review_id") REFERENCES "review"("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- AddForeignKey
ALTER TABLE "recipe_step" ADD CONSTRAINT "step_recipe" FOREIGN KEY ("recipe_id") REFERENCES "recipe"("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- AddForeignKey
ALTER TABLE "recipe_step" ADD CONSTRAINT "recipe_step_video" FOREIGN KEY ("video_id") REFERENCES "video"("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- AddForeignKey
ALTER TABLE "recipe_step_img" ADD CONSTRAINT "recipe_step_img_img" FOREIGN KEY ("img_id") REFERENCES "img"("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- AddForeignKey
ALTER TABLE "recipe_step_img" ADD CONSTRAINT "recipe_step_img_recipe_step" FOREIGN KEY ("recipe_step_id") REFERENCES "recipe_step"("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- AddForeignKey
ALTER TABLE "recipe_tag" ADD CONSTRAINT "recipe_tag_recipe" FOREIGN KEY ("recipe_id") REFERENCES "recipe"("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- AddForeignKey
ALTER TABLE "recipe_tag" ADD CONSTRAINT "recipe_tag_tag" FOREIGN KEY ("tag_id") REFERENCES "tag"("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- AddForeignKey
ALTER TABLE "recipe_user" ADD CONSTRAINT "recipe_users_user" FOREIGN KEY ("user_id") REFERENCES "app_user"("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- AddForeignKey
ALTER TABLE "recipe_user" ADD CONSTRAINT "recipe_users_recipe" FOREIGN KEY ("recipe_id") REFERENCES "recipe"("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- AddForeignKey
ALTER TABLE "review_img" ADD CONSTRAINT "review_img_img" FOREIGN KEY ("img_id") REFERENCES "img"("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- AddForeignKey
ALTER TABLE "review_img" ADD CONSTRAINT "review_img_review" FOREIGN KEY ("review_id") REFERENCES "review"("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- AddForeignKey
ALTER TABLE "user_biometrics" ADD CONSTRAINT "user_biometrics_user" FOREIGN KEY ("id") REFERENCES "app_user"("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- AddForeignKey
ALTER TABLE "user_demographics" ADD CONSTRAINT "user_demo_user" FOREIGN KEY ("user_id") REFERENCES "app_user"("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- AddForeignKey
ALTER TABLE "user_nutrition_profile" ADD CONSTRAINT "user_nutrition_profile_user" FOREIGN KEY ("user_id") REFERENCES "app_user"("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- AddForeignKey
ALTER TABLE "user_nutrition_profile" ADD CONSTRAINT "user_nutrition_profile_nutrition_profile" FOREIGN KEY ("nutrition_profile_id") REFERENCES "nutrition_profile"("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
