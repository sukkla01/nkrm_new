<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\NuriptSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nuript-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'vstdate') ?>
    <?= $form->field($model, 'duty') ?>

    <?= $form->field($model, 'ward') ?>

    <?= $form->field($model, 'bed') ?>

    <?= $form->field($model, 'category') ?>
    
    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'staff') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
