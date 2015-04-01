<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;
use yii\helpers\ArrayHelper;
use app\models\NurUserRec;

/* @var $this yii\web\View */
/* @var $model app\models\Nurhead */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nurhead-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="col-md-12">
        <div class="col-md-6">
            <?=
            $form->field($model, 'vstdate')->widget(DatePicker::className(), [
                'language' => 'th',
                'dateFormat' => 'yyyy-MM-dd',
                //'value'=>$date1,
                'clientOptions' => [
                    'changeMonth' => true,
                    'changeYear' => true,
                ],
                'options' => ['class' => 'form-control']
            ]);
            ?>
        </div>
    </div>


    <div class="col-md-12">
        <div class="col-md-6">

            <?= $form->field($model, 'duty')->dropDownList(['1' => 'ดึก', '2' => 'เช้า', '3' => 'บ่าย'], ['prompt' => '--กรุณาเลือกเวร--']) ?>
        </div>
    </div>

    <div class="col-md-12">
        <div class="panel panel-info">

            <div class="panel-body">
                <div class="col-md-3">
                    <h4><label class="label label-success"> <?php echo 'พยาบาล OPD'; ?></label></h4>
                </div>

                <div class="col-md-3">

                    <?=
                    $form->field($model, 'opdnur1')->dropDownList(ArrayHelper::map(NurUserRec::find()
                                            ->where('dept=1')
                                            ->orderBy('code ASC')
                                            ->all(), 'code', 'fullName'), ['prompt' => '--กรุณาเลือกพยาบาล--'])
                    ?>
                </div>
                <div class="col-md-3">
                    <?=
                    $form->field($model, 'opdnur2')->dropDownList(ArrayHelper::map(NurUserRec::find()
                                            ->where('dept=1')
                                            ->orderBy('code ASC')
                                            ->all(), 'code', 'fullName'), ['prompt' => '--กรุณาเลือกพยาบาล--'])
                    ?>
                </div>
                <div class="col-md-3">
                    <?=
                    $form->field($model, 'opdnur3')->dropDownList(ArrayHelper::map(NurUserRec::find()
                                            ->where('dept=1')
                                            ->orderBy('code ASC')
                                            ->all(), 'code', 'fullName'), ['prompt' => '--กรุณาเลือกพยาบาล--'])
                    ?>
                </div>

                <div class="col-md-3">

                </div>
                <div class="col-md-3">
                    <?=
                    $form->field($model, 'opdnur4')->dropDownList(ArrayHelper::map(NurUserRec::find()
                                            ->where('dept=1')
                                            ->orderBy('code ASC')
                                            ->all(), 'code', 'fullName'), ['prompt' => '--กรุณาเลือกพยาบาล--'])
                    ?>
                </div>
                <div class="col-md-3">
                    <?=
                    $form->field($model, 'opddoctor')->dropDownList(ArrayHelper::map(NurUserRec::find()
                                            ->where('dept=5')
                                            ->orderBy('code ASC')
                                            ->all(), 'code', 'fullName'), ['prompt' => '--กรุณาเลือกแพทย์--'])
                    ?>
                </div>
                <div class="col-md-3">

                    <?=
                    $form->field($model, 'opdaides')->dropDownList(ArrayHelper::map(NurUserRec::find()
                                            ->where('dept=6')
                                            ->orderBy('code ASC')
                                            ->all(), 'code', 'fullName'), ['prompt' => '--กรุณาเลือกผู้ช่วยเหลือคนไข้--'])
                    ?>
                </div>

                <div class="col-md-3">

                </div>
                <div class="col-md-3">

                    <?=
                    $form->field($model, 'opdworker')->dropDownList(ArrayHelper::map(NurUserRec::find()
                                            ->where('dept=7')
                                            ->orderBy('code ASC')
                                            ->all(), 'code', 'fullName'), ['prompt' => '--กรุณาเลือกคนงาน--'])
                    ?>
                </div>
            </div>
        </div>
    </div>


    <div class="col-md-12" >
        <div class="panel panel-info">

            <div class="panel-body">
                <div class="col-md-3">
                    <h4><label class="label label-success"> <?php echo 'พยาบาล ER'; ?></label></h4>
                </div>
                <div class="col-md-3">
                    <?=
                    $form->field($model, 'ernur1')->dropDownList(ArrayHelper::map(NurUserRec::find()
                                            ->where('dept=2')
                                            ->orderBy('code ASC')
                                            ->all(), 'code', 'fullName'), ['prompt' => '--กรุณาเลือกพยาบาล--'])
                    ?>
                </div>
                <div class="col-md-3">
                    <?=
                    $form->field($model, 'ernur2')->dropDownList(ArrayHelper::map(NurUserRec::find()
                                            ->where('dept=2')
                                            ->orderBy('code ASC')
                                            ->all(), 'code', 'fullName'), ['prompt' => '--กรุณาเลือกพยาบาล--'])
                    ?>
                </div>
                <div class="col-md-3">
                    <?=
                    $form->field($model, 'ernur3')->dropDownList(ArrayHelper::map(NurUserRec::find()
                                            ->where('dept=2')
                                            ->orderBy('code ASC')
                                            ->all(), 'code', 'fullName'), ['prompt' => '--กรุณาเลือกพยาบาล--'])
                    ?>
                </div>
                <div class="col-md-3">

                </div>
                <div class="col-md-3">
                    <?=
                    $form->field($model, 'ernur4')->dropDownList(ArrayHelper::map(NurUserRec::find()
                                            ->where('dept=2')
                                            ->orderBy('code ASC')
                                            ->all(), 'code', 'fullName'), ['prompt' => '--กรุณาเลือกพยาบาล--'])
                    ?>
                </div>
                <div class="col-md-3">
                    <?=
                    $form->field($model, 'erdoctor')->dropDownList(ArrayHelper::map(NurUserRec::find()
                                            ->where('dept=5')
                                            ->orderBy('code ASC')
                                            ->all(), 'code', 'fullName'), ['prompt' => '--กรุณาเลือกแพทย์--'])
                    ?>
                </div>
                <div class="col-md-3">
                    <?=
                    $form->field($model, 'eraides')->dropDownList(ArrayHelper::map(NurUserRec::find()
                                            ->where('dept=6')
                                            ->orderBy('code ASC')
                                            ->all(), 'code', 'fullName'), ['prompt' => '--กรุณาเลือกผู้ช่วยเหลือคนไข้--'])
                    ?>
                </div>
                <div class="col-md-3">

                </div>
                <div class="col-md-3">
                    <?=
                    $form->field($model, 'erworker')->dropDownList(ArrayHelper::map(NurUserRec::find()
                                            ->where('dept=7')
                                            ->orderBy('code ASC')
                                            ->all(), 'code', 'fullName'), ['prompt' => '--กรุณาเลือกคนงาน--'])
                    ?>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-12" >
        <div class="panel panel-info">

            <div class="panel-body">
                <div class="col-md-3">
                    <h4><label class="label label-success"> <?php echo 'พยาบาล LR'; ?></label></h4>
                </div>
                <div class="col-md-3">
                    <?=
                    $form->field($model, 'lrnur1')->dropDownList(ArrayHelper::map(NurUserRec::find()
                                            ->where('dept=3')
                                            ->orderBy('code ASC')
                                            ->all(), 'code', 'fullName'), ['prompt' => '--กรุณาเลือกพยาบาล--'])
                    ?>
                </div>
                <div class="col-md-3">
                    <?=
                    $form->field($model, 'lrnur2')->dropDownList(ArrayHelper::map(NurUserRec::find()
                                            ->where('dept=3')
                                            ->orderBy('code ASC')
                                            ->all(), 'code', 'fullName'), ['prompt' => '--กรุณาเลือกพยาบาล--'])
                    ?>
                </div>
                <div class="col-md-3">
                    <?=
                    $form->field($model, 'lrnur3')->dropDownList(ArrayHelper::map(NurUserRec::find()
                                            ->where('dept=3')
                                            ->orderBy('code ASC')
                                            ->all(), 'code', 'fullName'), ['prompt' => '--กรุณาเลือกพยาบาล--'])
                    ?>
                </div>
                <div class="col-md-3">

                </div>
                <div class="col-md-3">
                    <?=
                    $form->field($model, 'lrnur4')->dropDownList(ArrayHelper::map(NurUserRec::find()
                                            ->where('dept=3')
                                            ->orderBy('code ASC')
                                            ->all(), 'code', 'fullName'), ['prompt' => '--กรุณาเลือกพยาบาล--'])
                    ?>
                </div>
                <div class="col-md-3">

                    <?=
                    $form->field($model, 'lrdoctor')->dropDownList(ArrayHelper::map(NurUserRec::find()
                                            ->where('dept=5')
                                            ->orderBy('code ASC')
                                            ->all(), 'code', 'fullName'), ['prompt' => '--กรุณาเลือกแพทย์--'])
                    ?>
                </div>
                <div class="col-md-3">

                    <?=
                    $form->field($model, 'lraides')->dropDownList(ArrayHelper::map(NurUserRec::find()
                                            ->where('dept=6')
                                            ->orderBy('code ASC')
                                            ->all(), 'code', 'fullName'), ['prompt' => '--กรุณาเลือกผู้ช่วยเหลือคนไข้--'])
                    ?>
                </div>
                <div class="col-md-3">

                </div>
                <div class="col-md-3">
                    <?=
                    $form->field($model, 'lrworker')->dropDownList(ArrayHelper::map(NurUserRec::find()
                                            ->where('dept=7')
                                            ->orderBy('code ASC')
                                            ->all(), 'code', 'fullName'), ['prompt' => '--กรุณาเลือกคนงาน--'])
                    ?>
                </div>
            </div>
        </div>
    </div>


    <div class="col-md-12" >
        <div class="panel panel-info">

            <div class="panel-body">
                <div class="col-md-3">
                    <h4><label class="label label-success"> <?php echo 'พยาบาล WARD'; ?></label></h4>
                </div>
                <div class="col-md-3">

                    <?=
                    $form->field($model, 'wardnur1')->dropDownList(ArrayHelper::map(NurUserRec::find()
                                            ->where('dept=3')
                                            ->orderBy('code ASC')
                                            ->all(), 'code', 'fullName'), ['prompt' => '--กรุณาเลือกพยาบาล--'])
                    ?>
                </div>
                <div class="col-md-3">

                    <?=
                    $form->field($model, 'wardnur2')->dropDownList(ArrayHelper::map(NurUserRec::find()
                                            ->where('dept=3')
                                            ->orderBy('code ASC')
                                            ->all(), 'code', 'fullName'), ['prompt' => '--กรุณาเลือกพยาบาล--'])
                    ?>
                </div>
                <div class="col-md-3">
                    <?=
                    $form->field($model, 'wardnur3')->dropDownList(ArrayHelper::map(NurUserRec::find()
                                            ->where('dept=3')
                                            ->orderBy('code ASC')
                                            ->all(), 'code', 'fullName'), ['prompt' => '--กรุณาเลือกพยาบาล--'])
                    ?>
                </div>
                <div class="col-md-3">

                </div>
                <div class="col-md-3">
                    <?=
                    $form->field($model, 'wardnur4')->dropDownList(ArrayHelper::map(NurUserRec::find()
                                            ->where('dept=3')
                                            ->orderBy('code ASC')
                                            ->all(), 'code', 'fullName'), ['prompt' => '--กรุณาเลือกพยาบาล--'])
                    ?>
                </div>
                <div class="col-md-3">

                    <?=
                    $form->field($model, 'warddoctor')->dropDownList(ArrayHelper::map(NurUserRec::find()
                                            ->where('dept=5')
                                            ->orderBy('code ASC')
                                            ->all(), 'code', 'fullName'), ['prompt' => '--กรุณาเลือกแพทย์--'])
                    ?>
                </div>
                <div class="col-md-3">

                    <?=
                    $form->field($model, 'wardaides')->dropDownList(ArrayHelper::map(NurUserRec::find()
                                            ->where('dept=6')
                                            ->orderBy('code ASC')
                                            ->all(), 'code', 'fullName'), ['prompt' => '--กรุณาเลือกผู้ช่วยเหลือคนไข้--'])
                    ?>
                </div>
                <div class="col-md-3">

                </div>
                <div class="col-md-3">

                    <?=
                    $form->field($model, 'wardworker')->dropDownList(ArrayHelper::map(NurUserRec::find()
                                            ->where('dept=7')
                                            ->orderBy('code ASC')
                                            ->all(), 'code', 'fullName'), ['prompt' => '--กรุณาเลือกคนงาน--'])
                    ?>
                </div>
            </div>
        </div>
    </div>


    <div class="col-md-12" >
        <div class="panel panel-info">

            <div class="panel-body">
                <div class="col-md-3">
                    <h4><label class="label label-success"> <?php echo 'ทั่วไป'; ?></label></h4>
                </div>
                <div class="col-md-3">

                    <?=
                    $form->field($model, 'cardroom')->dropDownList(ArrayHelper::map(NurUserRec::find()
                                            ->where('dept=8')
                                            ->orderBy('code ASC')
                                            ->all(), 'code', 'fullName'), ['prompt' => '--กรุณาเลือกห้องบัตร--'])
                    ?>
                </div>
                <div class="col-md-3">

                    <?=
                    $form->field($model, 'launder')->dropDownList(ArrayHelper::map(NurUserRec::find()
                                            ->where('dept=9')
                                            ->orderBy('code ASC')
                                            ->all(), 'code', 'fullName'), ['prompt' => '--กรุณาเลือกซักฟอก--'])
                    ?>
                </div>
                <div class="col-md-3">

                    <?=
                    $form->field($model, 'centersupport')->dropDownList(ArrayHelper::map(NurUserRec::find()
                                            ->where('dept=10')
                                            ->orderBy('code ASC')
                                            ->all(), 'code', 'fullName'), ['prompt' => '--กรุณาเลือกจ่ายกลาง--'])
                    ?>
                </div>
                <div class="col-md-3">

                </div>
                <div class="col-md-3">

                    <?=
                    $form->field($model, 'kitchen')->dropDownList(ArrayHelper::map(NurUserRec::find()
                                            ->where('dept=11')
                                            ->orderBy('code ASC')
                                            ->all(), 'code', 'fullName'), ['prompt' => '--กรุณาเลือกโรงครัว--'])
                    ?>
                </div>
                <div class="col-md-3">

                    <?=
                    $form->field($model, 'xrayroom')->dropDownList(ArrayHelper::map(NurUserRec::find()
                                            ->where('dept=12')
                                            ->orderBy('code ASC')
                                            ->all(), 'code', 'fullName'), ['prompt' => '--กรุณาเลือก x-ray--'])
                    ?>
                </div>
                <div class="col-md-3">

                    <?=
                    $form->field($model, 'carman')->dropDownList(ArrayHelper::map(NurUserRec::find()
                                            ->where('dept=13')
                                            ->orderBy('code ASC')
                                            ->all(), 'code', 'fullName'), ['prompt' => '--กรุณาเลือกคนขับรถ--'])
                    ?>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-12">
        <div class="col-md-6">
            <?= $form->field($model, 'staff')->textInput(['maxlength' => true, 'value' => Yii::$app->user->displayName]) ?>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'บันทึก' : 'แก้ไข', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
