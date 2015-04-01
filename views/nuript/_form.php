<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Nuript */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nuript-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'vstdate')->textInput() ?>
    <?= $form->field($model, 'duty')->dropDownList(['1' => 'ดึก', '2' => 'เช้า', '3' => 'บ่าย'], ['prompt' => '--กรุณาเลือกเวร--']) ?>

    <?= $form->field($model, 'ward')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bed')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'category')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'staff')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
