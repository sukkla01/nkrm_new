<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Nurbed */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nurbed-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'bedno')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ward')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
