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
            'vstdate' => 'Vstdate',
            'vopd' => 'Vopd',
            'ver' => 'Ver',
            'vtreatment' => 'Vtreatment',
            'vhome' => 'Vhome',
            'vrefer' => 'Vrefer',
            'duty' => 'Duty',
            'staff' => 'Staff',
        ];
    }
}
