<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Nuruserrec */

$this->title = 'Update Nuruserrec: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Nuruserrecs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="nuruserrec-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
