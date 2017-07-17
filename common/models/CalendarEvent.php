<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%calendar_event}}".
 *
 * @property integer $id
 * @property string $start
 * @property string $end
 * @property string $title
 * @property integer $calender_id
 * @property string $desc
 */
class CalendarEvent extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%calendar_event}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['start', 'end', 'title', 'calendar_id'], 'required'],
            [['start', 'end'], 'safe'],
            [['calendar_id'], 'integer'],
            [['desc'], 'string'],
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
            'start' => 'start',
            'end' => 'End',
            'title' => 'Title',
            'calendar_id' => 'Calender ID',
            'desc' => 'desc',
        ];
    }
}
