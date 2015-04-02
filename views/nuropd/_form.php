<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;
/* @var $this yii\web\View */
/* @var $model app\models\Nuropd */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nuropd-form">
    
    <?php $form = ActiveForm::begin(); ?>
    <?php $date1='2015-04-01'; ?>
    <?= $form->field($model, 'vstdate')->widget(DatePicker::className(),[
      'language' => 'th',
      'dateFormat' => 'yyyy-MM-dd',
      'value'=>$date1,
      'clientOptions'=>[
      'changeMonth'=>true,
      'changeYear'=>true,
      ],
      
      'options'=>['class'=>'form-control']
    ]);
    ?>

    <?= $form->field($model, 'vopd')->textInput() ?>

    <?= $form->field($model, 'ver')->textInput() ?>

    <?= $form->field($model, 'vtreatment')->textInput() ?>

    <?= $form->field($model, 'vhome')->textInput() ?>

    <?= $form->field($model, 'vrefer')->textInput() ?>

    <?= $form->field($model, 'duty')->dropDownList(['1'=>'ดึก','2'=>'เช้า','3'=>'บ่าย'],['prompt'=>'--กรุณาเลือกเวร--']) ?>

    <?= $form->field($model, 'staff')->textInput(['maxlength' => true,'value'=>Yii::$app->user->displayName]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
