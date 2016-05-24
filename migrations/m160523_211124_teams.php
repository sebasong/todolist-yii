<?php

use yii\db\Migration;

class m160523_211124_teams extends Migration
{
    public function up()
    {
    	$this->createTable('teams', [
            'id' => $this->primaryKey(),
            'owner_id' => $this->integer()->notNull(),
            'title' => $this->string(),
        ]);

    }

    public function down()
    {
        echo "m160523_211124_teams_table cannot be reverted.\n";
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
