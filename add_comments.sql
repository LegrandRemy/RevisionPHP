-- Active: global_127.0.0.1_3306_root@@127.0.0.1@3306@partage_de_recettes

CREATE TABLE
    `partage_de_recettes`.`comments` (
        `comment_id` INT NOT NULL AUTO_INCREMENT,
        `user_id` INT NOT NULL,
        `recipe_id` INT NOT NULL,
        `comment` TEXT NOT NULL,
        PRIMARY KEY (`comment_id`),
        FOREIGN KEY (`user_id`) REFERENCES users(`user_id`),
        FOREIGN KEY (`recipe_id`) REFERENCES recipes(`recipe_id`)
    ) ENGINE = MyISAM;