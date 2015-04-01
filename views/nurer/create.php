<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Nurer */

$this->title = 'บันทึกผู้ป่วยฉุกเฉิน';
$this->params['breadcrumbs'][] = ['label' => 'ผู้ป่วยฉุกเฉิน', 'url' => ['index']];
$this->params['breadcrumbs'][] ='บันทึกผู้ป่วยฉุกเฉิน';
?>
<div class="nurer-create">

    <h1><?php echo 'บันทึกผู้ป่วยฉุกเฉิน'; ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
