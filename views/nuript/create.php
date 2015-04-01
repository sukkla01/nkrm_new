<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Nuript */

$this->title = 'Create Nuript';
$this->params['breadcrumbs'][] = ['label' => 'Nuripts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nuript-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
