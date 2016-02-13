<?php

use yii\db\Schema;
use yii\db\Migration;

class m160213_190129_create_table_user extends Migration
{
    public function safeUp()
    {
          $this->execute("
          CREATE TABLE IF NOT EXISTS  `blg_user` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(128) NOT NULL,
  `surname` VARCHAR(45) NOT NULL,
  `name` VARCHAR(45) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  `salt` VARCHAR(255) NOT NULL,
  `access_token` VARCHAR(255) NULL,
  `create_date` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `username_UNIQUE` (`username` ASC))
ENGINE = MyIsam DEFAULT CHARSET UTF8;");
    }

    public function safeDown()
    {
       $this->execute("DROP table if EXISTS blg_user ");
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
