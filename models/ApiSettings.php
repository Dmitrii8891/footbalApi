<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "api_settings".
 *
 * @property integer $id
 * @property integer $api_id
 * @property string $data_keys
 * @property integer $interval
 */
class ApiSettings extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'api_settings';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['api_id', 'interval'], 'integer'],
            [['data_keys', 'interval'], 'required'],
            [['data_keys'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'api_id' => 'Api ID',
            'data_keys' => 'Data Keys',
            'interval' => 'Interval',
        ];
    }
}
