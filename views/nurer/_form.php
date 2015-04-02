<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;
/* @var $this yii\web\View */
/* @var $model app\models\Nurer */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nurer-form">

    <?php $form = ActiveForm::begin(); ?>

     <?= $form->field($model, 'vstdate')->widget(DatePicker::className(),[
      'language' => 'th',
      'dateFormat' => 'yyyy-MM-dd',
      //'value'=>$date1,
      'clientOptions'=>[
      'changeMonth'=>true,
      'changeYear'=>true,
      ],
      
      'options'=>['class'=>'form-control']
    ]);
    ?>

    <?= $form->field($model, 'vnonac')->textInput() ?>

    <?= $form->field($model, 'vemergency')->textInput() ?>

    <?= $form->field($model, 'vresus')->textInput() ?>

    <?= $form->field($model, 'vhome')->textInput() ?>

    <?= $form->field($model, 'vvisit')->textInput() ?>

    <?= $form->field($model, 'vac')->textInput() ?>

    <?= $form->field($model, 'vurgent')->textInput() ?>

    <?= $form->field($model, 'vobservations')->textInput() ?>

    <?= $form->field($model, 'vrefer')->textInput() ?>

    <?= $form->field($model, 'vadmit')->textInput() ?>

    <?= $form->field($model, 'duty')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'staff')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
