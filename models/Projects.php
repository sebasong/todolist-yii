<?php

namespace backend\modules\todolist\models;

use Yii;

/**
 * This is the model class for table "projects".
 *
 * @property integer $id
 * @property integer $team_id
 * @property string $title
 */
class Projects extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'projects';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['team_id'], 'integer'],
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
            'team_id' => 'Team ID',
            'title' => 'Title',
        ];
    }
}
