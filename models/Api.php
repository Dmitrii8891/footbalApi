<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "api".
 *
 * @property integer $id
 * @property string $provider
 */
class Api extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'api';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['provider'], 'required'],
            [['provider'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'provider' => 'Provider',
        ];
    }

    public function getSettings()
    {
        return $this->hasOne(ApiSettings::className(), ['api_id' => 'id']);
    }

}
