<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Nurbed */

$this->title = 'Update Nurbed: ' . ' ' . $model->bedno;
$this->params['breadcrumbs'][] = ['label' => 'Nurbeds', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->bedno, 'url' => ['view', 'id' => $model->bedno]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="nurbed-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
