<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\NuruserrecSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Nuruserrecs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nuruserrec-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Nuruserrec', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'code',
            'fname',
            'lname',
            'dept',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
