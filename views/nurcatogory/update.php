<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Nurcatogory */

$this->title = 'Update Nurcatogory: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Nurcatogories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->code]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="nurcatogory-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
