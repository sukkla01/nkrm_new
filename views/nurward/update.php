<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\NurWard */

$this->title = 'Update Nur Ward: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Nur Wards', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->ward]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="nur-ward-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
