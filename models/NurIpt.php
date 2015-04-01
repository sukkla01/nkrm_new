<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "nur_ipt".
 *
 * @property integer $id
 * @property string $vstdate
 * @property string $ward
 * @property string $bed
 * @property string $category
 * @property string $status
 * @property string $staff
 */
class NurIpt extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'nur_ipt';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['vstdate'], 'safe'],
            [['ward', 'category', 'status'], 'string', 'max' => 5],
            [['ward', 'category', 'status','vstdate','bed','duty'], 'required'],
            [['bed', 'staff'], 'string', 'max' => 10]
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
            'ward' => 'หอผู้ป่วย',
            'bed' => 'เตียง',
            'category' => 'ประเภท',
            'status' => 'สถานะ',
            'duty' => 'เวร',
            'staff' => 'ผู้บันทึก',
        ];
    }
}
