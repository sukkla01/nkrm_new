<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "nur_catogory".
 *
 * @property integer $code
 * @property string $name
 */
class NurCatogory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'nur_catogory';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['code'], 'required'],
            [['code'], 'integer'],
            [['name'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'code' => 'รหัส',
            'name' => 'รายการ',
        ];
    }
}
