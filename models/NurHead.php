<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "nur_head".
 *
 * @property integer $id
 * @property string $vstdate
 * @property string $dept
 * @property string $nur1
 * @property string $nur2
 * @property string $nur3
 * @property string $nur4
 * @property string $doctor
 * @property string $aides
 * @property string $worker
 * @property string $duty
 * @property string $staff
 */
class NurHead extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'nur_head';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['vstdate'], 'safe'],
            [['dept', 'nur1', 'nur2', 'nur3', 'nur4', 'doctor', 'aides', 'worker', 'duty', 'staff'], 'string', 'max' => 10]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'vstdate' => 'วันที่',
            'dept' => 'แผนก',
            'nur1' => 'พยาบาล1',
            'nur2' => 'พยาบาล2',
            'nur3' => 'พยาบาล3',
            'nur4' => 'พยาบาล4',
            'doctor' => 'แพทย์',
            'aides' => 'ผู้ช่วยเหลือคนไข้',
            'worker' => 'คนงาน',
            'duty' => 'เวร',
            'staff' => 'ผู้บันทึก',
        ];
    }
}
