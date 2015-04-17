<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "city".
 *
 * @property integer $id
 * @property string $city
 * @property string $state
 * @property string $zip_5
 */
class City extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'city';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['city', 'state', 'zip_5'], 'required'],
            [['city'], 'string', 'max' => 50],
            [['state'], 'string', 'max' => 2],
            [['zip_5'], 'string', 'max' => 5]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'city' => 'City',
            'state' => 'State',
            'zip_5' => 'Zip 5',
        ];
    }
}
