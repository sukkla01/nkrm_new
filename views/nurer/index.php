<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\NurerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'ผู้ป่วยฉุกเฉิน';
$this->params['breadcrumbs'][] = 'ผู้ป่วยฉุกเฉิน';
?>
<div class="nurer-index">

    <h1><?php echo 'บันทึกผู้ป่วยฉุกเฉิน'; ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('บันทึก', ['create'], ['class' => 'btn btn-success']) ?>
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
