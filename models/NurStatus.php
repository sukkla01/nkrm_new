<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "nur_status".
 *
 * @property integer $id
 * @property integer $code
 * @property string $name
 */
class NurStatus extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'nur_status';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
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
            'id' => 'ID',
            'code' => 'รหัส',
            'name' => 'ชื่อสถานะ',
        ];
    }
}
