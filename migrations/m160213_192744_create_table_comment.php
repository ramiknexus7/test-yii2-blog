<?php

use yii\db\Schema;
use yii\db\Migration;

class m160213_192744_create_table_comment extends Migration
{
    public function safeUp()
    {
$this->execute("CREATE TABLE IF NOT EXISTS `blg_comment` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `user_id` INT NOT NULL,
  `blog_id` INT NOT NULL,
  `comment` VARCHAR(255) NOT NULL,
  `create_date` DATETIME NOT NULL DEFAULT current_timestamp,
  PRIMARY KEY (`id`),
  INDEX `fk_blg_comment_1_idx` (`user_id` ASC),
  INDEX `fk_blg_comment_2_idx` (`blog_id` ASC),
  CONSTRAINT `fk_blg_comment_1`
    FOREIGN KEY (`user_id`)
    REFERENCES `mydb`.`blg_user` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_blg_comment_2`
    FOREIGN KEY (`blog_id`)
    REFERENCES `mydb`.`blg_blog` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = MyIsam DEFAULT CHARSET UTF8;
");
    }

    public function safeDown()
    {
       $this->execute("drop table if EXISTS blg_comment");
    }


}
