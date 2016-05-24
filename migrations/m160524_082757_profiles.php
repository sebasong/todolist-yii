<?php

use yii\db\Migration;

class m160524_082757_profiles extends Migration
{
    public function up()
    {
        $this->createTable('profiles', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(),
            'firstname' => $this->string(),
            'lastname' => $this->string(),
            'city' => $this->string(),
        ]);
    }

    public function down()
    {
        echo "m160524_082757_profiles cannot be reverted.\n";

        return false;
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
