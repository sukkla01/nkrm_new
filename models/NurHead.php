<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "nur_head".
 *
 * @property integer $id
 * @property string $vstdate
 * @property string $opdnur1
 * @property string $opdnur2
 * @property string $opdnur3
 * @property string $opdnur4
 * @property string $opddoctor
 * @property string $opdaides
 * @property string $opdworker
 * @property string $ernur1
 * @property string $ernur2
 * @property string $ernur3
 * @property string $ernur4
 * @property string $erdoctor
 * @property string $eraides
 * @property string $erworker
 * @property string $lrnur1
 * @property string $lrnur2
 * @property string $lrnur3
 * @property string $lrnur4
 * @property string $lrdoctor
 * @property string $lraides
 * @property string $lrworker
 * @property string $wardnur1
 * @property string $wardnur2
 * @property string $wardnur3
 * @property string $wardnur4
 * @property string $warddoctor
 * @property string $wardaides
 * @property string $wardworker
 * @property string $cardroom
 * @property string $launder
 * @property string $centersupport
 * @property string $kitchen
 * @property string $xrayroom
 * @property string $carman
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
            [['centersupport', 'kitchen', 'xrayroom', 'carman'], 'string'],
            [['vstdate','duty'],'required'],
            [['opdnur1', 'opdnur2', 'opdnur3', 'opdnur4', 'opddoctor', 'opdaides', 'opdworker', 'ernur1', 'ernur2', 'ernur3', 'ernur4', 'erdoctor', 'eraides', 'erworker', 'lrnur1', 'lrnur2', 'lrnur3', 'lrnur4', 'lrdoctor', 'lraides', 'lrworker', 'wardnur1', 'wardnur2', 'wardnur3', 'wardnur4', 'warddoctor', 'wardaides', 'wardworker', 'cardroom', 'launder', 'duty', 'staff'], 'string', 'max' => 10]
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
            'opdnur1' => 'พยาบาล1',
            'opdnur2' => 'พยาบาล2',
            'opdnur3' => 'พยาบาล3',
            'opdnur4' => 'พยาบาล4',
            'opddoctor' => 'แพทย์',
            'opdaides' => 'ผู้ช่วยเหลือคนไข้',
            'opdworker' => 'คนงาน',
            'ernur1' => 'พยาบาล1',
            'ernur2' => 'พยาบาล2',
            'ernur3' => 'พยาบาล3',
            'ernur4' => 'พยาบาล4',
            'erdoctor' => 'แพทย์',
            'eraides' => 'ผู้ช่วยเหลือคนไข้',
            'erworker' => 'คนงาน',
            'lrnur1' => 'พยาบาล1',
            'lrnur2' => 'พยาบาล2',
            'lrnur3' => 'พยาบาล3',
            'lrnur4' => 'พยาบาล4',
            'lrdoctor' => 'แพทย์',
            'lraides' => 'ผู้ช่วยเหลือคนไข้',
            'lrworker' => 'คนงาน',
            'wardnur1' => 'พยาบาล1',
            'wardnur2' => 'พยาบาล2',
            'wardnur3' => 'พยาบาล3',
            'wardnur4' => 'พยาบาล4',
            'warddoctor' => 'แพทย์',
            'wardaides' => 'ผู้ช่วยเหลือคนไข้',
            'wardworker' => 'คนงาน',
            'cardroom' => 'ห้องบัตร',
            'launder' => 'ซักฟอก',
            'centersupport' => 'หน่วยจ่ายกลาง',
            'kitchen' => 'โรงครัว',
            'xrayroom' => 'ห้อง x-ray',
            'carman' => 'คนขับรถ',
            'duty' => 'เวร',
            'staff' => 'ผู้บันทึก',
        ];
    }
}
