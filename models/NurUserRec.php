<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "nur_user_rec".
 *
 * @property integer $id
 * @property string $code
 * @property string $fname
 * @property string $lname
 * @property string $dept
 */
class NurUserRec extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'nur_user_rec';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['code', 'dept'], 'string', 'max' => 10],
            [['fname', 'lname'], 'string', 'max' => 50]
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
            'fname' => 'ชื่อ',
            'lname' => 'นามสกุล',
            'dept' => 'แผนก',
        ];
    }
}
