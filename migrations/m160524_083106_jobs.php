<?php

use yii\db\Migration;

class m160524_083106_jobs extends Migration
{
    public function up()
    {
        $this->createTable('jobs', [
            'id' => $this->primaryKey(),
            'project_id' => $this->integer(),
            'title' => $this->string(),
        ]);
    }

    public function down()
    {
        echo "m160524_083106_jobs cannot be reverted.\n";

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
