<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Nurhead */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Nurheads', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nurhead-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'vstdate',
            'dept',
            'nur1',
            'nur2',
            'nur3',
            'nur4',
            'doctor',
            'aides',
            'worker',
            'duty',
            'staff',
        ],
    ]) ?>

</div>
