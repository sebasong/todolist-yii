<?php

use yii\db\Migration;

class m160524_123905_comments extends Migration
{
    public function up()
    {
        $this->createTable('comments', [
            'id' => $this->primaryKey(),
            'owner_id' => $this->integer()->notNull(),
            'job_id' => $this->integer()->notNull(),
            'comment' => $this->string(),
        ]);

    }

    public function down()
    {
        echo "m160524_123905_comments cannot be reverted.\n";

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
