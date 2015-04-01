<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Nurdept */

$this->title = 'Create Nurdept';
$this->params['breadcrumbs'][] = ['label' => 'Nurdepts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nurdept-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
