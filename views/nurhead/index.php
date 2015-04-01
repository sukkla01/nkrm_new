<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\NurheadSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'บันทึกเวรตรวจการพยาบาล';
$this->params['breadcrumbs'][] = 'บันทึกเวรตรวจการพยาบาล';
?>
<div class="nurhead-index">

    <h1><?php echo 'บันทึกเวรตรวจการพยาบาล'; ?></h1>
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
            'opdnur1',
            'opdnur2',
            'opdnur3',
            // 'opdnur4',
            // 'opddoctor',
            // 'opdaides',
            // 'opdworker',
            // 'ernur1',
            // 'ernur2',
            // 'ernur3',
            // 'ernur4',
            // 'erdoctor',
            // 'eraides',
            // 'erworker',
            // 'lrnur1',
            // 'lrnur2',
            // 'lrnur3',
            // 'lrnur4',
            // 'lrdoctor',
            // 'lraides',
            // 'lrworker',
            // 'wardnur1',
            // 'wardnur2',
            // 'wardnur3',
            // 'wardnur4',
            // 'warddoctor',
            // 'wardaides',
            // 'wardworker',
            // 'cardroom',
            // 'launder',
            // 'centersupport',
            // 'kitchen',
            // 'xrayroom',
            // 'carman',
            // 'duty',
            // 'staff',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
