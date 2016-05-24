<?php

namespace backend\modules\todolist\models;

use Yii;

/**
 * This is the model class for table "jobs".
 *
 * @property integer $id
 * @property integer $project_id
 * @property string $title
 */
class Jobs extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'jobs';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['project_id'], 'integer'],
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
            'project_id' => 'Project ID',
            'title' => 'Title',
        ];
    }
}
