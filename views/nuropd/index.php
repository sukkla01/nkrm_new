<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\NuropdSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Nuropds';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nuropd-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Nuropd', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'vstdate',
            'vopd',
            'ver',
            'vtreatment',
            // 'vhome',
            // 'vrefer',
            // 'duty',
            // 'staff',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
