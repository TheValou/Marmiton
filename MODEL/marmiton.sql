#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------

#------------------------------------------------------------
# Database: marmiton
#------------------------------------------------------------

CREATE DATABASE IF NOT EXISTS marmiton
DEFAULT CHARACTER SET utf8
DEFAULT COLLATE utf8_general_ci;
USE marmiton;

#------------------------------------------------------------
# Table: recipe
#------------------------------------------------------------

DROP TABLE IF EXISTS recipe;
CREATE TABLE recipe(
       id                   int (11) Auto_increment  NOT NULL ,
       title                Varchar (120) ,
       id_recipe_category   Int ,
       ingredients          Text ,
       description          Text ,
       preparation_time     Varchar (10) ,
       author               Varchar (50) ,
       author_mail          Varchar (50) ,
       PRIMARY KEY (id )
)ENGINE=InnoDB;

#------------------------------------------------------------
# Table: recipe_category
#------------------------------------------------------------

DROP TABLE IF EXISTS recipe_category;
CREATE TABLE recipe_category(
        id_recipe_category int (11) Auto_increment  NOT NULL ,
        name               Varchar (120) ,
        PRIMARY KEY (id_recipe_category )
)ENGINE=InnoDB;

#------------------------------------------------------------
# Table: reviews
#------------------------------------------------------------

DROP TABLE IF EXISTS reviews;
CREATE TABLE reviews(
       id        int (11) Auto_increment  NOT NULL ,
       rating    Int ,
       comments  Text ,
       author    Varchar (50) ,
       id_recipe Int ,
       PRIMARY KEY (id )
)ENGINE=InnoDB;

#------------------------------------------------------------
# Table: step
#------------------------------------------------------------

DROP TABLE IF EXISTS step;
CREATE TABLE step(
       id               int (11) Auto_increment  NOT NULL ,
       step_order       Int ,
       description      Text ,
       id_recipe Int ,
       PRIMARY KEY (id )
)ENGINE=InnoDB;

#------------------------------------------------------------
# Inserts
#------------------------------------------------------------

INSERT INTO recipe_category (id_recipe_category, name)
VALUES
(1, "Entree"),
(2, "Plat Principal"),
(3, "Dessert"),
(4, "Accompagnement"),
(5, "Amuse-gueule"),
(6, "Boisson"),
(7, "Confiserie"),
(8, "Sauce");

ALTER TABLE recipe ADD CONSTRAINT FK_recipe_id_recipe_category FOREIGN KEY (id_recipe_category) REFERENCES recipe_category(id_recipe_category);
ALTER TABLE reviews ADD CONSTRAINT FK_reviews_id_recipe FOREIGN KEY (id_recipe) REFERENCES recipe(id);
ALTER TABLE step ADD CONSTRAINT FK_step_id_recipe FOREIGN KEY (id_recipe) REFERENCES recipe(id);