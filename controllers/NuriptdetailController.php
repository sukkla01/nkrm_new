<?php

namespace app\controllers;

use yii;
use yii\data\ArrayDataProvider;
use yii\web\Controller;

class NuriptdetailController extends \yii\web\Controller {

    public function actionIndex() {
        $connection = Yii::$app->db;
        if(isset($_POST['ward'])){
            $date1=$_POST['date1'];
            $ward=$_POST['ward'];
            $duty=$_POST['duty'];
        }else{
            $date1='';
            $ward='';
            $duty='';
        }
        $data = $connection->CreateCommand("SELECT vstdate,w.name AS wname,i.bed,c.name AS cname,s.name AS sname,i.duty,i.staff
                    FROM nur_ipt i
                    LEFT JOIN nur_ward w ON w.ward=i.ward
                    LEFT JOIN nur_catogory c ON c.code=i.category
                    LEFT JOIN nur_status s ON s.code=i.status
                    WHERE i.vstdate ='$date1' AND i.ward='$ward' AND i.duty='$duty'
                    ")->queryAll();
        $dataProvider=new ArrayDataProvider([
            'allModels'=>$data,
            'sort'=>[
                'attributes'=>['bed','cname','sname','duty']
            ]
        ]);
        return $this->render('index',['dataProvider'=>$dataProvider]);
    }

}
