<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\NurstatusSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'สถานะผู้ป่วย';
$this->params['breadcrumbs'][] = 'สถานะผู้ป่วย';
?>
<div class="nurstatus-index">

    <h1><?php echo 'สถานะผู้ป่วย';?></h1>
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
            'code',
            'name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
