<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Nuropd */

$this->title = 'บันทึกผู้ป่วยนอก';
$this->params['breadcrumbs'][] = ['label' => 'ผู้ป่วยนอก', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'บันทึกผู้ป่วยนอก';
?>
<div class="nuropd-create">

    <h1>บันทึกผู้ป่วยนอก</h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
