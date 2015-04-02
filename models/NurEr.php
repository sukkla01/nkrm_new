<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "nur_er".
 *
 * @property integer $id
 * @property string $vstdate
 * @property integer $vnonac
 * @property integer $vemergency
 * @property integer $vresus
 * @property integer $vhome
 * @property integer $vvisit
 * @property integer $vac
 * @property integer $vurgent
 * @property integer $vobservations
 * @property integer $vrefer
 * @property integer $vadmit
 * @property string $duty
 * @property string $staff
 */
class NurEr extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'nur_er';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['vstdate', 'vnonac', 'vemergency', 'vresus', 'vhome', 'vvisit', 'vac', 'vurgent', 'vobservations', 'vrefer', 'vadmit', 'duty', 'staff'], 'required'],
            [['vstdate'], 'safe'],
            [['vnonac', 'vemergency', 'vresus', 'vhome', 'vvisit', 'vac', 'vurgent', 'vobservations', 'vrefer', 'vadmit'], 'integer'],
            [['duty', 'staff'], 'string', 'max' => 50]
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
            'vnonac' => 'ผู้ป่วย Non ac.illness /คน',
            'vemergency' => 'ผู้ป่วย Emergency /คน',
            'vresus' => 'ผู้ป่วย Resuscitation /คน',
            'vhome' => 'รับยากลับบ้าน /คน',
            'vvisit' => 'รับไว้รักษาต่อ /คน',
            'vac' => 'ผู้ป่วย Ac.illness /คน',
            'vurgent' => 'ผู้ป่วย Urgent /คน',
            'vobservations' => 'รับไว้สังเกตอาการ /คน',
            'vrefer' => 'ส่งต่อ /คน',
            'vadmit' => 'รับย้าย Admit จาก Ward /คน',
            'duty' => 'เวร',
            'staff' => 'ผู้บันทึก',
        ];
    }
}
