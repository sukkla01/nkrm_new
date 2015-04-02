<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "nur_opd".
 *
 * @property integer $id
 * @property string $vstdate
 * @property integer $vopd
 * @property integer $ver
 * @property integer $vtreatment
 * @property integer $vhome
 * @property integer $vrefer
 * @property string $duty
 * @property string $staff
 */
class NurOpd extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'nur_opd';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['vstdate'], 'safe'],
            [['vopd', 'ver', 'vtreatment', 'vhome', 'vrefer'], 'integer'],
            [['vopd', 'ver', 'vtreatment', 'vhome', 'vrefer','duty','vstdate'], 'required'],
            [['duty'], 'string', 'max' => 5],
            [['staff'], 'string', 'max' => 10]
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
            'vopd' => 'ผู้ป่วยทั่วไป /คน',
            'ver' => 'ผู้ป่วยฉุกเฉิน /คน',
            'vtreatment' => 'รับไว้รักษาต่อ /คน',
            'vhome' => 'รับยากลับบ้าน /คน',
            'vrefer' => 'ส่งต่อ /คน',
            'duty' => 'เวร',
            'staff' => 'ผู้บันทึก',
        ];
    }
}
