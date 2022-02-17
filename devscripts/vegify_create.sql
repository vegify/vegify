-- Created by Vertabelo (http://vertabelo.com)
-- Last modification date: 2022-02-14 18:50:48.912

CREATE EXTENSION IF NOT EXISTS pgcrypto;;

-- tables
-- Table: amount
CREATE TABLE amount (
    id serial  NOT NULL,
    unit varchar  NOT NULL,
    amount decimal  NULL,
    grams decimal  NOT NULL,
    CONSTRAINT amount_pk PRIMARY KEY (id)
);

-- Table: app_user
CREATE TABLE app_user (
    id serial  NOT NULL,
    username varchar  NOT NULL,
    img_id int  NULL,
    bio varchar  NULL,
    website varchar  NULL,
    email varchar  NOT NULL,
    pwd varchar  NOT NULL,
    CONSTRAINT u_au UNIQUE (username, email, id) NOT DEFERRABLE  INITIALLY IMMEDIATE,
    CONSTRAINT id PRIMARY KEY (id)
);

-- Table: href
CREATE TABLE href (
    id serial  NOT NULL,
    url varchar  NOT NULL,
    "desc" varchar  NULL,
    CONSTRAINT u_h UNIQUE (id, url) NOT DEFERRABLE  INITIALLY IMMEDIATE,
    CONSTRAINT href_pk PRIMARY KEY (id)
);

-- Table: img
CREATE TABLE img (
    id serial  NOT NULL,
    "desc" varchar  NULL,
    url varchar  NOT NULL,
    CONSTRAINT u_img UNIQUE (id, url) NOT DEFERRABLE  INITIALLY IMMEDIATE,
    CONSTRAINT img_pk PRIMARY KEY (id)
);

-- Table: img_tag
CREATE TABLE img_tag (
    img_tag_id serial  NOT NULL,
    img_id int  NOT NULL,
    tag_id int  NOT NULL,
    CONSTRAINT img_tag_pk PRIMARY KEY (img_tag_id)
);

-- Table: ingredient
CREATE TABLE ingredient (
    id serial  NOT NULL,
    name varchar  NULL,
    "desc" varchar  NULL,
    is_vegan bool  NULL,
    serving_size int  NULL,
    batch_size int  NULL,
    creator_id int  NOT NULL,
    CONSTRAINT u_i_i UNIQUE (id) NOT DEFERRABLE  INITIALLY IMMEDIATE,
    CONSTRAINT u_i_n UNIQUE (name) NOT DEFERRABLE  INITIALLY IMMEDIATE,
    CONSTRAINT ingredient_pk PRIMARY KEY (id)
);

CREATE INDEX ingredient_idx_name on ingredient (name ASC,id ASC);

-- Table: ingredient_img
CREATE TABLE ingredient_img (
    id serial  NOT NULL,
    img_id int  NOT NULL,
    ingredient_id int  NOT NULL,
    CONSTRAINT ingredient_img_pk PRIMARY KEY (id)
);

-- Table: ingredient_in_recipe
CREATE TABLE ingredient_in_recipe (
    id serial  NOT NULL,
    recipe_id int  NOT NULL,
    ingredient_id int  NOT NULL,
    amount_id int  NOT NULL,
    CONSTRAINT ingredient_in_recipe_pk PRIMARY KEY (id)
);

-- Table: ingredient_in_recipe_nutrient_amount
CREATE TABLE ingredient_in_recipe_nutrient_amount (
    id serial  NOT NULL,
    ingredient_in_recipe_id int  NOT NULL,
    nutrient_amount_id int  NOT NULL,
    CONSTRAINT ingredient_in_recipe_nutrient_amount_pk PRIMARY KEY (id)
);

-- Table: ingredient_product
CREATE TABLE ingredient_product (
    id serial  NOT NULL,
    ingredient_id int  NOT NULL,
    product_id int  NOT NULL,
    CONSTRAINT ingredient_product_pk PRIMARY KEY (id)
);

COMMENT ON TABLE ingredient_product IS 'Ingredient''''s Associated Product';

-- Table: ingredient_serving_nutrient_amount
CREATE TABLE ingredient_serving_nutrient_amount (
    id serial  NOT NULL,
    nutrient_amount_id int  NOT NULL,
    ingredient_id int  NOT NULL,
    CONSTRAINT ingredient_serving_nutrient_amount_pk PRIMARY KEY (id)
);

-- Table: ingredient_tag
CREATE TABLE ingredient_tag (
    id serial  NOT NULL,
    ingredient_id int  NOT NULL,
    tag_id int  NOT NULL,
    CONSTRAINT ingredient_tag_pk PRIMARY KEY (id)
);

-- Table: nutrient
CREATE TABLE nutrient (
    id serial  NOT NULL,
    name varchar  NOT NULL,
    "desc" varchar  NOT NULL,
    CONSTRAINT u_n UNIQUE (id, name) NOT DEFERRABLE  INITIALLY IMMEDIATE,
    CONSTRAINT nutrient_pk PRIMARY KEY (id)
);

-- Table: nutrient_amount
CREATE TABLE nutrient_amount (
    id serial  NOT NULL,
    nutrient_id int  NOT NULL,
    amount_id int  NOT NULL,
    CONSTRAINT nutrient_amount_pk PRIMARY KEY (id)
);

-- Table: nutrient_img
CREATE TABLE nutrient_img (
    id serial  NOT NULL,
    img_id int  NOT NULL,
    nutrient_id int  NOT NULL,
    CONSTRAINT nutrient_img_pk PRIMARY KEY (id)
);

-- Table: nutrition_profile
CREATE TABLE nutrition_profile (
    id serial  NOT NULL,
    name varchar  NULL,
    img_url varchar  NULL,
    originator_name varchar  NULL,
    originator_url varchar  NULL,
    "desc" varchar  NULL,
    CONSTRAINT u_np UNIQUE (id) NOT DEFERRABLE  INITIALLY IMMEDIATE,
    CONSTRAINT nutrition_profile_pk PRIMARY KEY (id)
);

-- Table: nutrition_profile_img
CREATE TABLE nutrition_profile_img (
    id serial  NOT NULL,
    nutrition_profile_id int  NOT NULL,
    img_id int  NOT NULL,
    CONSTRAINT nutrition_profile_img_pk PRIMARY KEY (id)
);

-- Table: nutrition_profile_tracked_nutrient
CREATE TABLE nutrition_profile_tracked_nutrient (
    id serial  NOT NULL,
    nutrient_amount_id int  NOT NULL,
    nutrition_profile_id int  NOT NULL,
    CONSTRAINT nutrition_profile_tracked_nutrient_pk PRIMARY KEY (id)
);

-- Table: product
CREATE TABLE product (
    id serial  NOT NULL,
    name varchar  NOT NULL,
    upc int  NOT NULL,
    price money  NOT NULL,
    is_vegan boolean  NOT NULL,
    amazon_link int  NOT NULL,
    store_locator_link int  NOT NULL,
    "desc" varchar  NOT NULL,
    CONSTRAINT product_pk PRIMARY KEY (id)
);

-- Table: product_img
CREATE TABLE product_img (
    id serial  NOT NULL,
    img_id int  NOT NULL,
    product_id int  NOT NULL,
    label boolean  NOT NULL,
    nutrition_label boolean  NOT NULL,
    ingredient_label boolean  NOT NULL,
    CONSTRAINT product_img_pk PRIMARY KEY (id)
);

-- Table: product_ingredient_label
CREATE TABLE product_ingredient_label (
    id serial  NOT NULL,
    product_id int  NOT NULL,
    ingredient_id int  NOT NULL,
    CONSTRAINT product_ingredient_label_pk PRIMARY KEY (id)
);

COMMENT ON TABLE product_ingredient_label IS 'Ingredients in product';

-- Table: product_tag
CREATE TABLE product_tag (
    id serial  NOT NULL,
    tag_id int  NOT NULL,
    product_id int  NOT NULL,
    CONSTRAINT product_tag_pk PRIMARY KEY (id)
);

-- Table: recipe
CREATE TABLE recipe (
    id serial  NOT NULL,
    as_ingredient_id int  NOT NULL,
    creator_id int  NOT NULL,
    subtitle varchar  NULL,
    prep_minutes int  NULL,
    cook_minutes int  NULL,
    total_time int  NULL,
    video_id int  NOT NULL,
    steps int  NOT NULL,
    CONSTRAINT u_r UNIQUE (id, as_ingredient_id) NOT DEFERRABLE  INITIALLY IMMEDIATE,
    CONSTRAINT recipe_pk PRIMARY KEY (id)
);

-- Table: recipe_review
CREATE TABLE recipe_review (
    id serial  NOT NULL,
    review_id int  NOT NULL,
    recipe_id int  NOT NULL,
    user_id int  NOT NULL,
    CONSTRAINT recipe_review_pk PRIMARY KEY (id)
);

-- Table: recipe_step
CREATE TABLE recipe_step (
    id serial  NOT NULL,
    header_text varchar  NOT NULL,
    main_text varchar  NOT NULL,
    video_id int  NOT NULL,
    recipe_id int  NOT NULL,
    CONSTRAINT recipe_step_pk PRIMARY KEY (id)
);

-- Table: recipe_step_img
CREATE TABLE recipe_step_img (
    id serial  NOT NULL,
    img_id int  NOT NULL,
    recipe_step_id int  NOT NULL,
    CONSTRAINT recipe_step_img_pk PRIMARY KEY (id)
);

-- Table: recipe_tag
CREATE TABLE recipe_tag (
    id serial  NOT NULL,
    recipe_id int  NOT NULL,
    tag_id int  NOT NULL,
    CONSTRAINT recipe_tag_pk PRIMARY KEY (id)
);

-- Table: recipe_user
CREATE TABLE recipe_user (
    id serial  NOT NULL,
    recipe_id int  NOT NULL,
    user_id int  NOT NULL,
    CONSTRAINT recipe_user_pk PRIMARY KEY (id)
);

-- Table: review
CREATE TABLE review (
    id serial  NOT NULL,
    stars int  NOT NULL,
    title varchar  NOT NULL,
    text varchar  NOT NULL,
    CONSTRAINT review_pk PRIMARY KEY (id)
);

-- Table: review_img
CREATE TABLE review_img (
    id serial  NOT NULL,
    review_id int  NOT NULL,
    img_id int  NOT NULL,
    CONSTRAINT review_img_pk PRIMARY KEY (id)
);

-- Table: tag
CREATE TABLE tag (
    id serial  NOT NULL,
    tag varchar  NOT NULL,
    CONSTRAINT u_t UNIQUE (id, tag) NOT DEFERRABLE  INITIALLY IMMEDIATE,
    CONSTRAINT tag_pk PRIMARY KEY (id)
);

-- Table: user_biometrics
CREATE TABLE user_biometrics (
    id int  NOT NULL,
    calorie_tracking boolean  NOT NULL,
    weight_goal varchar  NOT NULL,
    weight_in_kg decimal  NOT NULL,
    height_in_cm decimal  NOT NULL,
    sex_multiplier decimal  NOT NULL,
    CONSTRAINT user_biometrics_pk PRIMARY KEY (id)
);

-- Table: user_demographics
CREATE TABLE user_demographics (
    id serial  NOT NULL,
    gender varchar  NOT NULL,
    birthdate timestamp  NOT NULL,
    location varchar  NOT NULL,
    user_id int  NOT NULL,
    CONSTRAINT user_demographics_pk PRIMARY KEY (id)
);

-- Table: user_nutrition_profile
CREATE TABLE user_nutrition_profile (
    id serial  NOT NULL,
    user_id int  NOT NULL,
    nutrition_profile_id int  NOT NULL,
    CONSTRAINT user_nutrition_profile_pk PRIMARY KEY (id)
);

-- Table: video
CREATE TABLE video (
    id serial  NOT NULL,
    url varchar  NOT NULL,
    "desc" int  NOT NULL,
    CONSTRAINT video_pk PRIMARY KEY (id)
);

-- views
-- View: RecipePage
CREATE VIEW RecipePage AS
SELECT
 recipe.id    r_id
, as_ingredient_id
, creator_id
, subtitle
, prep_minutes
, cook_minutes
, total_time
, recipe.video_id recipe_vid_id
, Ingredient.*
, ingredient_in_recipe.id iir_id
, ingredient_in_recipe.ingredient_id iir_ing_id
, ingredient_in_recipe.amount_id iir_amount_id
, amount.unit iir_unit
, amount.amount iir_amount
, amount.grams iir_grams
, ingredient_in_recipe_nutrient_amount.ingredient_in_recipe_id iirna_iir_id
, recipe_user.recipe_id ru_r_id
, recipe_user.user_id ru_u_id
, recipe_tag.recipe_id rt_r_id
, recipe_tag.tag_id rt_tag_id
, recipe_step.recipe_id rs_recipe_id
, recipe_step.header_text rs_header_text
, recipe_step.main_text rs_main_text
, recipe_step.video_id rs_vid_id
, video.id vid_id
, recipe_step_img.img_id rs_img_img_id
, recipe_step_img.recipe_step_id rs_img_rs_id
, img.id img_id
, img.url img_url
FROM 
  recipe
 , Ingredient
 , ingredient_in_recipe
 , amount
, ingredient_in_recipe_nutrient_amount
, recipe_user
, recipe_tag
, recipe_step
, video
, recipe_step_img
, img;

-- View: IngredientPage
CREATE VIEW IngredientPage AS
SELECT 
 ingredient.id ing_id
,  ingredient.name ing_name
,  ingredient.desc
,  ingredient.is_vegan ing_isv
,  ingredient.serving_size
,  ingredient.batch_size
,  ingredient_tag.ingredient_id it_ing_id
, ingredient_tag.tag_id it_tag_id
,  tag.id tag_id
, ingredient_serving_nutrient_amount.ingredient_id isna_ing_id
, amount.unit ing_unit
, amount.amount ing_amount
, amount.grams ing_grams
, ingredient_img.img_id ii_img_id
, ingredient_img.ingredient_id ii_ing_id
, upc
, price
, product.is_vegan prod_isv
, product.amazon_link
, product.store_locator_link
, product_img.img_id prod_img_img_id
, nutrient.name nut_name
, href.url
FROM
  ingredient
,  ingredient_tag
,  tag
, ingredient_serving_nutrient_amount
, amount
, ingredient_img
, img
, product
, product_img
, nutrient
, href;

COMMENT ON VIEW IngredientPage IS 'need to add appropriate changes re: inheritance';

-- foreign keys
-- Reference: img_tag_img (table: img_tag)
ALTER TABLE img_tag ADD CONSTRAINT img_tag_img
    FOREIGN KEY (img_id)
    REFERENCES img (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: img_tag_tag (table: img_tag)
ALTER TABLE img_tag ADD CONSTRAINT img_tag_tag
    FOREIGN KEY (tag_id)
    REFERENCES tag (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: ingredient_app_user (table: ingredient)
ALTER TABLE ingredient ADD CONSTRAINT ingredient_app_user
    FOREIGN KEY (creator_id)
    REFERENCES app_user (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: ingredient_batch_size (table: ingredient)
ALTER TABLE ingredient ADD CONSTRAINT ingredient_batch_size
    FOREIGN KEY (batch_size)
    REFERENCES amount (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: ingredient_img_img (table: ingredient_img)
ALTER TABLE ingredient_img ADD CONSTRAINT ingredient_img_img
    FOREIGN KEY (img_id)
    REFERENCES img (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: ingredient_img_ingredient (table: ingredient_img)
ALTER TABLE ingredient_img ADD CONSTRAINT ingredient_img_ingredient
    FOREIGN KEY (ingredient_id)
    REFERENCES ingredient (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: ingredient_product_ingredient (table: ingredient_product)
ALTER TABLE ingredient_product ADD CONSTRAINT ingredient_product_ingredient
    FOREIGN KEY (ingredient_id)
    REFERENCES ingredient (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: ingredient_product_product (table: ingredient_product)
ALTER TABLE ingredient_product ADD CONSTRAINT ingredient_product_product
    FOREIGN KEY (product_id)
    REFERENCES product (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: ingredient_serving_nutrient_amount_ingredient (table: ingredient_serving_nutrient_amount)
ALTER TABLE ingredient_serving_nutrient_amount ADD CONSTRAINT ingredient_serving_nutrient_amount_ingredient
    FOREIGN KEY (ingredient_id)
    REFERENCES ingredient (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: ingredient_serving_nutrient_amount_nutrient_amount (table: ingredient_serving_nutrient_amount)
ALTER TABLE ingredient_serving_nutrient_amount ADD CONSTRAINT ingredient_serving_nutrient_amount_nutrient_amount
    FOREIGN KEY (nutrient_amount_id)
    REFERENCES nutrient_amount (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: ingredient_serving_size (table: ingredient)
ALTER TABLE ingredient ADD CONSTRAINT ingredient_serving_size
    FOREIGN KEY (serving_size)
    REFERENCES amount (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: ingredient_tag_ingredient (table: ingredient_tag)
ALTER TABLE ingredient_tag ADD CONSTRAINT ingredient_tag_ingredient
    FOREIGN KEY (ingredient_id)
    REFERENCES ingredient (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: ingredient_tag_tag (table: ingredient_tag)
ALTER TABLE ingredient_tag ADD CONSTRAINT ingredient_tag_tag
    FOREIGN KEY (tag_id)
    REFERENCES tag (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: nutrient_amount_nutrient (table: nutrient_amount)
ALTER TABLE nutrient_amount ADD CONSTRAINT nutrient_amount_nutrient
    FOREIGN KEY (nutrient_id)
    REFERENCES nutrient (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: nutrient_img_img (table: nutrient_img)
ALTER TABLE nutrient_img ADD CONSTRAINT nutrient_img_img
    FOREIGN KEY (img_id)
    REFERENCES img (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: nutrient_img_nutrient (table: nutrient_img)
ALTER TABLE nutrient_img ADD CONSTRAINT nutrient_img_nutrient
    FOREIGN KEY (nutrient_id)
    REFERENCES nutrient (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: nutrition_profile_img_img (table: nutrition_profile_img)
ALTER TABLE nutrition_profile_img ADD CONSTRAINT nutrition_profile_img_img
    FOREIGN KEY (img_id)
    REFERENCES img (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: nutrition_profile_img_nutrition_profile (table: nutrition_profile_img)
ALTER TABLE nutrition_profile_img ADD CONSTRAINT nutrition_profile_img_nutrition_profile
    FOREIGN KEY (nutrition_profile_id)
    REFERENCES nutrition_profile (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: nutrition_profile_nutrient_amount_nutrition_profile (table: nutrition_profile_tracked_nutrient)
ALTER TABLE nutrition_profile_tracked_nutrient ADD CONSTRAINT nutrition_profile_nutrient_amount_nutrition_profile
    FOREIGN KEY (nutrition_profile_id)
    REFERENCES nutrition_profile (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: nutrition_profile_tracked_nutrient_nutrient_amount (table: nutrition_profile_tracked_nutrient)
ALTER TABLE nutrition_profile_tracked_nutrient ADD CONSTRAINT nutrition_profile_tracked_nutrient_nutrient_amount
    FOREIGN KEY (nutrient_amount_id)
    REFERENCES nutrient_amount (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: product_img_img (table: product_img)
ALTER TABLE product_img ADD CONSTRAINT product_img_img
    FOREIGN KEY (img_id)
    REFERENCES img (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: product_img_product (table: product_img)
ALTER TABLE product_img ADD CONSTRAINT product_img_product
    FOREIGN KEY (product_id)
    REFERENCES product (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: product_ingredient_ingredient (table: product_ingredient_label)
ALTER TABLE product_ingredient_label ADD CONSTRAINT product_ingredient_ingredient
    FOREIGN KEY (ingredient_id)
    REFERENCES ingredient (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: product_ingredient_product (table: product_ingredient_label)
ALTER TABLE product_ingredient_label ADD CONSTRAINT product_ingredient_product
    FOREIGN KEY (product_id)
    REFERENCES product (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: product_tag_product (table: product_tag)
ALTER TABLE product_tag ADD CONSTRAINT product_tag_product
    FOREIGN KEY (product_id)
    REFERENCES product (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: product_tag_tag (table: product_tag)
ALTER TABLE product_tag ADD CONSTRAINT product_tag_tag
    FOREIGN KEY (tag_id)
    REFERENCES tag (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: recipe_creator (table: recipe)
ALTER TABLE recipe ADD CONSTRAINT recipe_creator
    FOREIGN KEY (creator_id)
    REFERENCES app_user (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: recipe_ingredient (table: recipe)
ALTER TABLE recipe ADD CONSTRAINT recipe_ingredient
    FOREIGN KEY (as_ingredient_id)
    REFERENCES ingredient (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: recipe_ingredient_amount (table: ingredient_in_recipe)
ALTER TABLE ingredient_in_recipe ADD CONSTRAINT recipe_ingredient_amount
    FOREIGN KEY (amount_id)
    REFERENCES amount (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: recipe_ingredient_ingredient (table: ingredient_in_recipe)
ALTER TABLE ingredient_in_recipe ADD CONSTRAINT recipe_ingredient_ingredient
    FOREIGN KEY (ingredient_id)
    REFERENCES ingredient (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: recipe_ingredient_nutrient_amount_nutrient_amount (table: ingredient_in_recipe_nutrient_amount)
ALTER TABLE ingredient_in_recipe_nutrient_amount ADD CONSTRAINT recipe_ingredient_nutrient_amount_nutrient_amount
    FOREIGN KEY (nutrient_amount_id)
    REFERENCES nutrient_amount (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: recipe_ingredient_nutrient_amount_recipe_ingredient (table: ingredient_in_recipe_nutrient_amount)
ALTER TABLE ingredient_in_recipe_nutrient_amount ADD CONSTRAINT recipe_ingredient_nutrient_amount_recipe_ingredient
    FOREIGN KEY (ingredient_in_recipe_id)
    REFERENCES ingredient_in_recipe (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: recipe_recipe_ingredient (table: ingredient_in_recipe)
ALTER TABLE ingredient_in_recipe ADD CONSTRAINT recipe_recipe_ingredient
    FOREIGN KEY (recipe_id)
    REFERENCES recipe (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: recipe_review_recipe (table: recipe_review)
ALTER TABLE recipe_review ADD CONSTRAINT recipe_review_recipe
    FOREIGN KEY (recipe_id)
    REFERENCES recipe (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: recipe_review_review (table: recipe_review)
ALTER TABLE recipe_review ADD CONSTRAINT recipe_review_review
    FOREIGN KEY (review_id)
    REFERENCES review (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: recipe_review_user (table: recipe_review)
ALTER TABLE recipe_review ADD CONSTRAINT recipe_review_user
    FOREIGN KEY (user_id)
    REFERENCES app_user (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: recipe_step_img_img (table: recipe_step_img)
ALTER TABLE recipe_step_img ADD CONSTRAINT recipe_step_img_img
    FOREIGN KEY (img_id)
    REFERENCES img (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: recipe_step_img_recipe_step (table: recipe_step_img)
ALTER TABLE recipe_step_img ADD CONSTRAINT recipe_step_img_recipe_step
    FOREIGN KEY (recipe_step_id)
    REFERENCES recipe_step (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: recipe_step_video (table: recipe_step)
ALTER TABLE recipe_step ADD CONSTRAINT recipe_step_video
    FOREIGN KEY (video_id)
    REFERENCES video (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: recipe_tag_recipe (table: recipe_tag)
ALTER TABLE recipe_tag ADD CONSTRAINT recipe_tag_recipe
    FOREIGN KEY (recipe_id)
    REFERENCES recipe (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: recipe_tag_tag (table: recipe_tag)
ALTER TABLE recipe_tag ADD CONSTRAINT recipe_tag_tag
    FOREIGN KEY (tag_id)
    REFERENCES tag (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: recipe_users_recipe (table: recipe_user)
ALTER TABLE recipe_user ADD CONSTRAINT recipe_users_recipe
    FOREIGN KEY (recipe_id)
    REFERENCES recipe (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: recipe_users_user (table: recipe_user)
ALTER TABLE recipe_user ADD CONSTRAINT recipe_users_user
    FOREIGN KEY (user_id)
    REFERENCES app_user (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: recipe_video (table: recipe)
ALTER TABLE recipe ADD CONSTRAINT recipe_video
    FOREIGN KEY (video_id)
    REFERENCES video (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: review_img_img (table: review_img)
ALTER TABLE review_img ADD CONSTRAINT review_img_img
    FOREIGN KEY (img_id)
    REFERENCES img (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: review_img_review (table: review_img)
ALTER TABLE review_img ADD CONSTRAINT review_img_review
    FOREIGN KEY (review_id)
    REFERENCES review (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: serving_nutrient (table: nutrient_amount)
ALTER TABLE nutrient_amount ADD CONSTRAINT serving_nutrient
    FOREIGN KEY (amount_id)
    REFERENCES amount (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: step_recipe (table: recipe_step)
ALTER TABLE recipe_step ADD CONSTRAINT step_recipe
    FOREIGN KEY (recipe_id)
    REFERENCES recipe (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: store_locator_url (table: product)
ALTER TABLE product ADD CONSTRAINT store_locator_url
    FOREIGN KEY (amazon_link)
    REFERENCES href (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: url_product_amazon_url (table: product)
ALTER TABLE product ADD CONSTRAINT url_product_amazon_url
    FOREIGN KEY (store_locator_link)
    REFERENCES href (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: user_biometrics_user (table: user_biometrics)
ALTER TABLE user_biometrics ADD CONSTRAINT user_biometrics_user
    FOREIGN KEY (id)
    REFERENCES app_user (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: user_demo_user (table: user_demographics)
ALTER TABLE user_demographics ADD CONSTRAINT user_demo_user
    FOREIGN KEY (user_id)
    REFERENCES app_user (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: user_img (table: app_user)
ALTER TABLE app_user ADD CONSTRAINT user_img
    FOREIGN KEY (img_id)
    REFERENCES img (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: user_nutrition_profile_nutrition_profile (table: user_nutrition_profile)
ALTER TABLE user_nutrition_profile ADD CONSTRAINT user_nutrition_profile_nutrition_profile
    FOREIGN KEY (nutrition_profile_id)
    REFERENCES nutrition_profile (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: user_nutrition_profile_user (table: user_nutrition_profile)
ALTER TABLE user_nutrition_profile ADD CONSTRAINT user_nutrition_profile_user
    FOREIGN KEY (user_id)
    REFERENCES app_user (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- End of file.

