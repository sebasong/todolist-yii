<?php

namespace backend\modules\todolist\models;

use Yii;

/**
 * This is the model class for table "teams".
 *
 * @property integer $id
 * @property integer $owner_id
 * @property string $title
 */
class Teams extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'teams';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['owner_id'], 'required'],
            [['owner_id'], 'integer'],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'owner_id' => 'Owner ID',
            'title' => 'Title',
        ];
    }
}
