<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Nurstatus */

$this->title = 'บันทึกสถานะผู้ป่วย';
$this->params['breadcrumbs'][] = ['label' => 'สถานะผู้ป่วย', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'บันทึกสถานะผู้ป่วย';
?>
<div class="nurstatus-create">

    <h1><?php echo 'บันทึกสถานะผู้ป่วย'; ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
