<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use app\models\NurWard;
use yii\helpers\ArrayHelper;
use yii\grid\GridView;
?>
<h1>หอผู้ป่วยทั่วไป</h1>

<div class="col-md-12">
    <div class="panel panel-success">
        <div class="panel-heading">

        </div>
        <div class="panel-body">
           <?=Html::beginForm();?>
                <?php
                    if(isset($_POST['ward'])){
                        $ward=$_POST['ward'];
                        $duty=$_POST['duty'];
                        $date1=$_POST['date1'];
                    }else{
                        $ward=NULL;
                        $duty=NULL;
                        $date1=  date('Y-m-d');
                    }
                ?>
                <div class="col-md-3" >    
                    วันที่ :
                    <?php
                    echo yii\jui\DatePicker::widget([
                        'name' => 'date1',
                        'value' => $date1,
                        'language' => 'th',
                        'dateFormat' => 'yyyy-MM-dd',
                        'clientOptions' => [
                            'changeMonth' => true,
                            'changeYear' => true,
                        ],
                    ]);
                    ?>
                </div>
                <div class="col-md-3" >       
                    <?=
                    Html::dropDownList('ward', $ward, ['01' => 'หอผู้ป่วยทั่วไป', '02' => 'หอผู้ป่วยห้องคลอด'], ['class' => 'form-control',
                        'prompt' => '-เลือกหอผู้ป่วย-', 'required' => true]);
                    ?>
                </div>
                <div class="col-md-3" >       
                    <?=
                    Html::dropDownList('duty', $duty, ['ดึก' => 'ดึก', 'เช้า' => 'เช้า', 'บ่าย' => 'บ่าย'], ['class' => 'form-control',
                        'prompt' => '-เลือกเวร-', 'required' => true]);
                    ?>
                </div>
                <div class="col-md-3" >
                    <?= Html::submitButton('ประมวลผล',['class'=>'btn btn-danger']);?>
                </div>
             <?=Html::endForm();?>
        </div>
    </div>
</div>
<?php if(isset($dataProvider)){ ?>
<div class="col-md-12">
    <div class="panel panel-success">
        <div class="panel-heading">
            วันที่ <?=$date1;?> 
        </div>
        <div class="panel-body">
            <p>
                <button type="button" class="btn btn-primary btn-lg">ยอดยกมา 5</button>
                <button type="button" class="btn btn-info btn-xs">รับใหม่ 1</button>
                <button type="button" class="btn btn-info btn-xs">จำหน่าย 2</button>
                <button type="button" class="btn btn-danger btn-xs">เสียชีวิต 1</button>
                <button type="button" class="btn btn-warning btn-xs">ส่งต่อ 2</button>
                <button type="button" class="btn btn-info btn-xs">รับย้ายจากห้องคลอด 5</button>
                <button type="button" class="btn btn-primary btn-lg">คงพยาบาล 5</button>
            </p>
        </div>
    </div>
</div>
<div class="col-md-12">
    <div class="panel panel-success">
        <div class="panel-heading">

        </div>
        <div class="panel-body">
            <?php
                echo GridView::widget([
                    'dataProvider'=>$dataProvider,
                    'columns'=>[
                        [
                            'label'=>'เตียง',
                            'attribute'=>'bed'
                        ],
                        [
                            'label'=>'ประเภท',
                            'attribute'=>'cname'
                        ],
                        [
                            'label'=>'สถานะ',
                            'attribute'=>'sname'
                        ]
                    ]
                ]);
            ?>
        </div>
    </div>
</div>


<?php } ?>


<p>
    You may change the content of this page by modifying
    the file <code><?= __FILE__; ?></code>.
</p>
