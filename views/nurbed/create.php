<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Nurbed */

$this->title = 'Create Nurbed';
$this->params['breadcrumbs'][] = ['label' => 'Nurbeds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nurbed-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
