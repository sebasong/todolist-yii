<?php

use yii\db\Migration;

class m160524_123917_messages extends Migration
{
    public function up()
    {
        $this->createTable('messages', [
            'id' => $this->primaryKey(),
            'sender_id' => $this->integer()->notNull(),
            'receiver_id' => $this->integer()->notNull(),
            'message' => $this->string(),
        ]);
    }

    public function down()
    {
        echo "m160524_123917_messages cannot be reverted.\n";

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
