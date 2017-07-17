<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%calendar}}".
 *
 * @property integer $id
 * @property string $name
 * @property integer $user_id
 * @property string $hint
 * @property integer $status
 */
class Calendar extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%calendar}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'user_id', 'status'], 'required'],
            [['user_id', 'status'], 'integer'],
            [['hint'], 'string'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'user_id' => 'User ID',
            'hint' => 'Hint',
            'status' => 'Status',
        ];
    }
}
