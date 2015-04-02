<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\NurheadSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nurhead-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'vstdate') ?>

    <?= $form->field($model, 'dept') ?>

    <?= $form->field($model, 'nur1') ?>

    <?= $form->field($model, 'nur2') ?>

    <?php // echo $form->field($model, 'nur3') ?>

    <?php // echo $form->field($model, 'nur4') ?>

    <?php // echo $form->field($model, 'doctor') ?>

    <?php // echo $form->field($model, 'aides') ?>

    <?php // echo $form->field($model, 'worker') ?>

    <?php // echo $form->field($model, 'duty') ?>

    <?php // echo $form->field($model, 'staff') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
