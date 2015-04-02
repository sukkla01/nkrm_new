<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\NurerSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nurer-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'vstdate') ?>

    <?= $form->field($model, 'vnonac') ?>

    <?= $form->field($model, 'vemergency') ?>

    <?= $form->field($model, 'vresus') ?>

    <?php // echo $form->field($model, 'vhome') ?>

    <?php // echo $form->field($model, 'vvisit') ?>

    <?php // echo $form->field($model, 'vac') ?>

    <?php // echo $form->field($model, 'vurgent') ?>

    <?php // echo $form->field($model, 'vobservations') ?>

    <?php // echo $form->field($model, 'vrefer') ?>

    <?php // echo $form->field($model, 'vadmit') ?>

    <?php // echo $form->field($model, 'duty') ?>

    <?php // echo $form->field($model, 'staff') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
