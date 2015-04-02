<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Nurhead */

$this->title = 'Create Nurhead';
$this->params['breadcrumbs'][] = ['label' => 'Nurheads', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nurhead-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
