<?php

use yii\db\Schema;
use yii\db\Migration;

class m160213_192124_create_table_blog extends Migration
{


    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
        $this->execute("CREATE TABLE IF NOT EXISTS `blg_blog` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `user_id` INT NOT NULL,
  `description` VARCHAR(255) NOT NULL,
  `artictle` TEXT NOT NULL,
  `create_date` DATETIME NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  INDEX `fk_blg_blog_1_idx` (`user_id` ASC),
  CONSTRAINT `fk_blg_blog_1`
    FOREIGN KEY (`user_id`)
    REFERENCES `mydb`.`blg_user` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = MyIsam DEFAULT CHARSET UTF8;");
    }

    public function safeDown()
    {
        $this->execute("drop table if EXISTS blg_blog");
    }

}
