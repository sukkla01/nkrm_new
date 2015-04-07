<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\jui\DatePicker;
use app\models\NurWard;
use app\models\NurCatogory;
use app\models\NurStatus;
use app\models\NurBed;
/* @var $this yii\web\View */
/* @var $model app\models\Nuript */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nuript-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'vstdate')->widget(DatePicker::className(), [
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
    <?= $form->field($model, 'duty')->dropDownList(['1' => 'ดึก', '2' => 'เช้า', '3' => 'บ่าย'], ['prompt' => '--กรุณาเลือกเวร--']) ?>

    <?= $form->field($model, 'ward')->dropDownList(ArrayHelper::map(NurWard::find()
    
                            ->orderBy('ward ASC')
                            ->all(), 'ward', 'name'), ['prompt' => '--กรุณาเลือกward--'])
    ?>

    <?= $form->field($model, 'bed')->dropDownList(ArrayHelper::map(NurBed::find()
    
                            ->orderBy('bedno ASC')
                            ->all(), 'bedno', 'bedno'), ['prompt' => '--กรุณาเลือกเตียง--'])
    ?>

    <?= $form->field($model, 'category')->dropDownList(ArrayHelper::map(NurCatogory::find()
    
                            ->orderBy('code ASC')
                            ->all(), 'code', 'name'), ['prompt' => '--กรุณาเลือกประเภท--'])
    ?>

     <?= $form->field($model, 'status')->dropDownList(ArrayHelper::map(NurStatus::find()
    
                            ->orderBy('code ASC')
                            ->all(), 'code', 'name'), ['prompt' => '--กรุณาเลือกประเภท--'])
    ?>

    <?= $form->field($model, 'staff')->textInput(['maxlength' => true, 'value' => Yii::$app->user->displayName]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
