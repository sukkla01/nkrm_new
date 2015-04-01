<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\NuriptSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Nuripts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nuript-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Nuript', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'vstdate',
            'duty',
            'ward',
            'bed',
            'category',
            // 'status',
            // 'staff',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
