<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\NuropdSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nuropd-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'vstdate') ?>

    <?= $form->field($model, 'vopd') ?>

    <?= $form->field($model, 'ver') ?>

    <?= $form->field($model, 'vtreatment') ?>

    <?php // echo $form->field($model, 'vhome') ?>

    <?php // echo $form->field($model, 'vrefer') ?>

    <?php // echo $form->field($model, 'duty') ?>

    <?php // echo $form->field($model, 'staff') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
