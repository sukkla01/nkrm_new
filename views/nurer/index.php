<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\NurerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Nurers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nurer-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Nurer', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'vstdate',
            'vnonac',
            'vemergency',
            'vresus',
            // 'vhome',
            // 'vvisit',
            // 'vac',
            // 'vurgent',
            // 'vobservations',
            // 'vrefer',
            // 'vadmit',
            // 'duty',
            // 'staff',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
