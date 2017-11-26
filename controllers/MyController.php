<?php
/**
 * Created by PhpStorm.
 * User: a.verizhnikov
 * Date: 15.11.2016
 * Time: 16:31
 */

namespace app\controllers;

use app\models\Category;
use Yii;

class MyController extends AppController
{
//    public $layout = 'basic';


    public function actionIndex()
    {
//        $this->layout = 'basic';

        //$cats = Category::find()->orderBy(['id'=>SORT_ASC])->all();
        //$cats = Category::find()->asArray()->where('parent_id=691')->all();
        //$cats = Category::find()->asArray()->where(['parent_id' => 691])->all();
        //$cats = Category::find()->asArray()->where(['like','name','na'])->all();
        //$cats = Category::find()->asArray()->where('')->all();
        //$cats = Category::find()->asArray()->where('parent_id=691')->limit(1)->one();
        //$cats = Category::find()->asArray()->count();
        //$cats = Category::findOne(['parent_id'=>10]);
        //$cats = Category::findAll(['parent_id'=>10]);

        //$query = "SELECT * FROM category WHERE title LIKE '%PP%'";

        //$query = "SELECT * FROM category WHERE title LIKE :search";
        //$cats = Category::findBySql($query,[':search'=>'%pp%'])->all();

//        $model = new Category();
////        $model->name = 'категория 3';
////        $model->parent_id = '4';
////        $model->save();
//
//
//        if ($model->load(Yii::$app->request->post())) {
//            $model->save();
//            Yii::$app->session->setFlash('contactFormSubmitted');
//
//            return $this->refresh();
//        }



        return $this->render('index');


    }



}