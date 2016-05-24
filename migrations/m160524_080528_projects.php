<?php

use yii\db\Migration;

class m160524_080528_projects extends Migration
{
    public function up()
    {
    	$this->createTable('projects', [
            'id' => $this->primaryKey(),
            'team_id' => $this->integer(),
            'title' => $this->string(),
        ]);
    }

    public function down()
    {
        echo "m160524_080528_projects cannot be reverted.\n";

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
