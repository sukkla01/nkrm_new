<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "nur_dept".
 *
 * @property integer $id
 * @property string $name
 */
class NurDept extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'nur_dept';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id'], 'integer'],
            [['name'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'รหัส',
            'name' => 'แผนก',
        ];
    }
}
