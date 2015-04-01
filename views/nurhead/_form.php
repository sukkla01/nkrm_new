<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Nurhead */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nurhead-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'vstdate')->textInput() ?>

    <?= $form->field($model, 'dept')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nur1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nur2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nur3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nur4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'doctor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'aides')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'worker')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'duty')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'staff')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
