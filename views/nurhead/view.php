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
            'opdnur1',
            'opdnur2',
            'opdnur3',
            'opdnur4',
            'opddoctor',
            'opdaides',
            'opdworker',
            'ernur1',
            'ernur2',
            'ernur3',
            'ernur4',
            'erdoctor',
            'eraides',
            'erworker',
            'lrnur1',
            'lrnur2',
            'lrnur3',
            'lrnur4',
            'lrdoctor',
            'lraides',
            'lrworker',
            'wardnur1',
            'wardnur2',
            'wardnur3',
            'wardnur4',
            'warddoctor',
            'wardaides',
            'wardworker',
            'cardroom',
            'launder',
            'centersupport',
            'kitchen',
            'xrayroom',
            'carman',
            'duty',
            'staff',
        ],
    ]) ?>

</div>
