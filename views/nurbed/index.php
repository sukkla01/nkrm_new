<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\NurbedSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Nurbeds';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nurbed-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Nurbed', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'bedno',
            'ward',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
