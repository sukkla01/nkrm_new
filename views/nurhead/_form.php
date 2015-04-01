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
    <div class="col-md-12" >
        <div class="col-md-3">
            <h4><label class="label label-success"> <?php echo 'พยาบาล OPD'; ?></label></h4>
        </div>

        <div class="col-md-3">
            <?= Html::label('พยาบาล1', 'opdnur1'); ?>
            <?=
            Html::dropDownList('opdnur11', null, ArrayHelper::map(NurUserRec::find()
                                    ->where('dept=1')
                                    ->orderBy('code ASC')
                                    ->all(), 'code', 'fname'), [
                'class' => 'form-control',
                'id' => 'code',
                'prompt' => '-เลือกพยาบาล-',
                    ]
            );
            ?>

        </div>
        <div class="col-md-3">
            <?= Html::label('พยาบาล2', 'opdnur2'); ?>
            <?=
            Html::dropDownList('opdnur2', null, ArrayHelper::map(NurUserRec::find()
                                    ->where('dept=1')
                                    ->orderBy('code ASC')
                                    ->all(), 'code', 'fname'), [
                'class' => 'form-control',
                'id' => 'code',
                'prompt' => '-เลือกพยาบาล-',
                    ]
            );
            ?>
        </div>
        <div class="col-md-3">
            <?= Html::label('พยาบาล3', 'opdnur3'); ?>
            <?=
            Html::dropDownList('opdnur3', null, ArrayHelper::map(NurUserRec::find()
                                    ->where('dept=1')
                                    ->orderBy('code ASC')
                                    ->all(), 'code', 'fname'), [
                'class' => 'form-control',
                'id' => 'code',
                'prompt' => '-เลือกพยาบาล-',
                    ]
            );
            ?>
        </div>
        <div class="col-md-12">&nbsp;</div>
        <div class="col-md-3">

        </div>
        <div class="col-md-3">
            <?= Html::label('พยาบาล4', 'opdnur4'); ?>
            <?=
            Html::dropDownList('opdnur4', null, ArrayHelper::map(NurUserRec::find()
                                    ->where('dept=1')
                                    ->orderBy('code ASC')
                                    ->all(), 'code', 'fname'), [
                'class' => 'form-control',
                'id' => 'code',
                'prompt' => '-เลือกพยาบาล-',
                    ]
            );
            ?>
        </div>
        <div class="col-md-3">
            <?= Html::label('แพทย์', 'opddoctor'); ?>
            <?=
            Html::dropDownList('opddoctor', null, ArrayHelper::map(NurUserRec::find()
                                    ->where('dept=5')
                                    ->orderBy('code ASC')
                                    ->all(), 'code', 'fname'), [
                'class' => 'form-control',
                'id' => 'code',
                'prompt' => '-เลือกแพทย์-',
                    ]
            );
            ?>
        </div>
        <div class="col-md-3">
            <?= Html::label('ผู้ช่วยเหลือคนไข้', 'opdaides'); ?>
            <?=
            Html::dropDownList('opdaides', null, ArrayHelper::map(NurUserRec::find()
                                    ->where('dept=6')
                                    ->orderBy('code ASC')
                                    ->all(), 'code', 'fname'), [
                'class' => 'form-control',
                'id' => 'code',
                'prompt' => '-เลือกผู้ช่วยเหลือคนไข้-',
                    ]
            );
            ?>
        </div>
        <div class="col-md-12">&nbsp;</div>
        <div class="col-md-3">

        </div>
        <div class="col-md-3">
            <?= Html::label('คนงาน', 'opdworker'); ?>
            <?=
            Html::dropDownList('opdworker', null, ArrayHelper::map(NurUserRec::find()
                                    ->where('dept=6')
                                    ->orderBy('code ASC')
                                    ->all(), 'code', 'fname'), [
                'class' => 'form-control',
                'id' => 'code',
                'prompt' => '-เลือกคนงาน-',
                    ]
            );
            ?>
        </div>
    </div>
    <div class="col-md-12">&nbsp;</div>
    <div class="col-md-12" >
        <div class="col-md-3">
            <h4><label class="label label-success"> <?php echo 'พยาบาล ER'; ?></label></h4>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'ernur1')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'ernur2')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'ernur3')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-3">

        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'ernur4')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'erdoctor')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'eraides')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-3">

        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'erworker')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="col-md-12" >
        <div class="col-md-3">
            <h4><label class="label label-success"> <?php echo 'พยาบาล LR'; ?></label></h4>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'lrnur1')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'lrnur2')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'lrnur3')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-3">

        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'lrnur4')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'lrdoctor')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'lraides')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-3">

        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'lrworker')->textInput(['maxlength' => true]) ?>
        </div>
    </div>


    <div class="col-md-12" >
        <div class="col-md-3">
            <h4><label class="label label-success"> <?php echo 'พยาบาล WARD'; ?></label></h4>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'wardnur1')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'wardnur3')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'lrnur3')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-3">

        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'wardnur4')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'warddoctor')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'wardaides')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-3">

        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'wardworker')->textInput(['maxlength' => true]) ?>

        </div>
    </div>


    <div class="col-md-12" >
        <div class="col-md-3">
            <h4><label class="label label-success"> <?php echo 'ทั่วไป'; ?></label></h4>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'cardroom')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'launder')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'centersupport')->textInput() ?>
        </div>
        <div class="col-md-3">

        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'kitchen')->textInput() ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'xrayroom')->textInput() ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'carman')->textInput() ?>
        </div>

    </div>
    <div class="col-md-12">
        <div class="col-md-6">
            <?= $form->field($model, 'duty')->dropDownList(['1' => 'ดึก', '2' => 'เช้า', '3' => 'บ่าย'], ['prompt' => '--กรุณาเลือกเวร--']) ?>
        </div>
    </div>
    <div class="col-md-12">
        <div class="col-md-6">
            <?= $form->field($model, 'staff')->textInput(['maxlength' => true, 'value' => Yii::$app->user->displayName]) ?>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
