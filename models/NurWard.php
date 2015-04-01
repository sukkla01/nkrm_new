<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "nur_ward".
 *
 * @property string $ward
 * @property string $name
 */
class NurWard extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'nur_ward';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ward'], 'required'],
            [['ward'], 'string', 'max' => 5],
            [['name'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ward' => 'รหัส',
            'name' => 'ชื่อหอผู้ป่วย',
        ];
    }
}
