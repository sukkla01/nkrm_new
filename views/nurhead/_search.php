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

    <?= $form->field($model, 'opdnur1') ?>

    <?= $form->field($model, 'opdnur2') ?>

    <?= $form->field($model, 'opdnur3') ?>

    <?php // echo $form->field($model, 'opdnur4') ?>

    <?php // echo $form->field($model, 'opddoctor') ?>

    <?php // echo $form->field($model, 'opdaides') ?>

    <?php // echo $form->field($model, 'opdworker') ?>

    <?php // echo $form->field($model, 'ernur1') ?>

    <?php // echo $form->field($model, 'ernur2') ?>

    <?php // echo $form->field($model, 'ernur3') ?>

    <?php // echo $form->field($model, 'ernur4') ?>

    <?php // echo $form->field($model, 'erdoctor') ?>

    <?php // echo $form->field($model, 'eraides') ?>

    <?php // echo $form->field($model, 'erworker') ?>

    <?php // echo $form->field($model, 'lrnur1') ?>

    <?php // echo $form->field($model, 'lrnur2') ?>

    <?php // echo $form->field($model, 'lrnur3') ?>

    <?php // echo $form->field($model, 'lrnur4') ?>

    <?php // echo $form->field($model, 'lrdoctor') ?>

    <?php // echo $form->field($model, 'lraides') ?>

    <?php // echo $form->field($model, 'lrworker') ?>

    <?php // echo $form->field($model, 'wardnur1') ?>

    <?php // echo $form->field($model, 'wardnur2') ?>

    <?php // echo $form->field($model, 'wardnur3') ?>

    <?php // echo $form->field($model, 'wardnur4') ?>

    <?php // echo $form->field($model, 'warddoctor') ?>

    <?php // echo $form->field($model, 'wardaides') ?>

    <?php // echo $form->field($model, 'wardworker') ?>

    <?php // echo $form->field($model, 'cardroom') ?>

    <?php // echo $form->field($model, 'launder') ?>

    <?php // echo $form->field($model, 'centersupport') ?>

    <?php // echo $form->field($model, 'kitchen') ?>

    <?php // echo $form->field($model, 'xrayroom') ?>

    <?php // echo $form->field($model, 'carman') ?>

    <?php // echo $form->field($model, 'duty') ?>

    <?php // echo $form->field($model, 'staff') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
