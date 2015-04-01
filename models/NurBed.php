<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "nur_bed".
 *
 * @property string $bedno
 * @property string $ward
 */
class NurBed extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'nur_bed';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bedno'], 'required'],
            [['bedno', 'ward'], 'string', 'max' => 10]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'bedno' => 'เตียง',
            'ward' => 'หอผู้ป่วย',
        ];
    }
}
