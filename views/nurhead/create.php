<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Nurhead */

$this->title = 'บันทึกเวรตรวจการพยาบาล';
$this->params['breadcrumbs'][] = ['label' => 'เวรตรวจการพยาบาล', 'url' => ['index']];
$this->params['breadcrumbs'][] =    'บันทึกเวรตรวจการพยาบาล';
?>
<div class="nurhead-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
