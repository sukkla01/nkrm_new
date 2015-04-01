<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Nuropd */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nuropd-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'vstdate')->textInput() ?>

    <?= $form->field($model, 'vopd')->textInput() ?>

    <?= $form->field($model, 'ver')->textInput() ?>

    <?= $form->field($model, 'vtreatment')->textInput() ?>

    <?= $form->field($model, 'vhome')->textInput() ?>

    <?= $form->field($model, 'vrefer')->textInput() ?>

    <?= $form->field($model, 'duty')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'staff')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
