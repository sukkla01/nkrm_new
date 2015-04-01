<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Nuropd */

$this->title = 'Create Nuropd';
$this->params['breadcrumbs'][] = ['label' => 'Nuropds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nuropd-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
