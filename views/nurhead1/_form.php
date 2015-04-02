<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;
/* @var $this yii\web\View */
/* @var $model app\models\Nurhead */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nurhead-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'vstdate')->widget(DatePicker::className(),[
      'language' => 'th',
      'dateFormat' => 'yyyy-MM-dd',
      //'value'=>$date1,
      'clientOptions'=>[
      'changeMonth'=>true,
      'changeYear'=>true,
      ],
      
      'options'=>['class'=>'form-control']
    ]);
    ?>
    <div class="col-md-12" >
        <div class="col-md-3">
            <h4><label class="label label-success"> <?php echo 'พยาบาล OPD'; ?></label></h4>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'nur1')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-3">
           <?= $form->field($model, 'nur2')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'nur3')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-3">
           
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'nur4')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
        
    

    

    

    

    

    <?= $form->field($model, 'doctor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'aides')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'worker')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'duty')->dropDownList(['1'=>'ดึก','2'=>'เช้า','3'=>'บ่าย'],['prompt'=>'--กรุณาเลือกเวร--']) ?>

    <?= $form->field($model, 'staff')->textInput(['maxlength' => true,'value'=>Yii::$app->user->displayName]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
