<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\NurheadSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Nurheads';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nurhead-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Nurhead', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'vstdate',
            'dept',
            'nur1',
            'nur2',
            // 'nur3',
            // 'nur4',
            // 'doctor',
            // 'aides',
            // 'worker',
            // 'duty',
            // 'staff',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
