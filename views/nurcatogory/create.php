<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Nurcatogory */

$this->title = 'Create Nurcatogory';
$this->params['breadcrumbs'][] = ['label' => 'Nurcatogories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nurcatogory-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
