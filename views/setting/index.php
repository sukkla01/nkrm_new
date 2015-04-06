<?php
/* @var $this yii\web\View */
use yii\helpers\Html; 
?>
<h1>ตั่งค่าการใช้งานโปรแกรม</h1>

<p>
    <?php
    echo Html::a('1) กำหนดการใช้งานหอผู้ป่วย', ['/nurward']);
    ?>
</p>
<p>
    <?php
    echo Html::a('2) กำหนดผู้ใช้งาน', ['/nuruserrec']);
    ?>
</p>
<p>
    <?php
    echo Html::a('3) กำหนดเตียงผู้ป่วย', ['/nurbed']);
    ?>
</p>
<p>
    <?php
    echo Html::a('4) กำหนดประเภทผู้ป่วย', ['/nurcatogory']);
    ?>
</p>
<p>
    <?php
    echo Html::a('5) กำหนดแผนกปฏิบัตงาน', ['/nurdept']);
    ?>
</p>
<p>
    <?php
    echo Html::a('6) กำหนดสถานะผู้ป่วย', ['/nurstatus']);
    ?>
</p>