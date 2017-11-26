<?php
/**
 * Created by PhpStorm.
 * User: a.verizhnikov
 * Date: 18.11.2016
 * Time: 13:47
 */

namespace app\controllers\admin;


use yii\web\Controller;
use app\models\admin\Category;
use Yii;




class AdminController extends BaseController
{

    public $layout = 'admin';

    public function actionIndex (){




        return $this->render('index');
    }


    public function actionCategory (){

        $model = new Category();
//        $model->name = 'категория 3';
//        $model->parent_id = '4';
//        $model->save();
        if ($model->load(Yii::$app->request->post())) {
            $model->save();
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }

        return $this->render('category',['model'=>$model]);
    }


}