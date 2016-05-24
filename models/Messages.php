<?php

namespace backend\modules\todolist\models;

use Yii;

/**
 * This is the model class for table "messages".
 *
 * @property integer $id
 * @property integer $sender_id
 * @property integer $receiver_id
 * @property string $message
 */
class Messages extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'messages';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sender_id', 'receiver_id'], 'required'],
            [['sender_id', 'receiver_id'], 'integer'],
            [['message'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'sender_id' => 'Sender ID',
            'receiver_id' => 'Receiver ID',
            'message' => 'Message',
        ];
    }
}
