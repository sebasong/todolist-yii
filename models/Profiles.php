<?php

namespace backend\modules\todolist\models;

use Yii;

/**
 * This is the model class for table "profiles".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $firstname
 * @property string $lastname
 * @property string $city
 */
class Profiles extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'profiles';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id'], 'integer'],
            [['firstname', 'lastname', 'city'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'firstname' => 'Firstname',
            'lastname' => 'Lastname',
            'city' => 'City',
        ];
    }
}
