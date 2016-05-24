<?php

namespace backend\modules\todolist\models;

use Yii;

/**
 * This is the model class for table "comments".
 *
 * @property integer $id
 * @property integer $owner_id
 * @property integer $job_id
 * @property string $comment
 */
class Comments extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'comments';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['owner_id', 'job_id'], 'required'],
            [['owner_id', 'job_id'], 'integer'],
            [['comment'], 'string', 'max' => 255],
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
            'job_id' => 'Job ID',
            'comment' => 'Comment',
        ];
    }
}
