<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\NurWard */

$this->title = 'Create Nur Ward';
$this->params['breadcrumbs'][] = ['label' => 'Nur Wards', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nur-ward-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
