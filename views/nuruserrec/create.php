<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Nuruserrec */

$this->title = 'Create Nuruserrec';
$this->params['breadcrumbs'][] = ['label' => 'Nuruserrecs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nuruserrec-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
