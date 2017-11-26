<?php
/**
 * Created by PhpStorm.
 * User: a.verizhnikov
 * Date: 10.08.2016
 * Time: 14:50
 */

namespace app\controllers;
use app\models\Category;
use app\models\Product;
use Yii;

class ProductController extends AppController
{
    public function actionView ($id){
        $id = Yii::$app->request->get('id');
        $product = Product::findOne($id);
        if(empty($product))
            throw  new \yii\web\HttpException(404,'Данная страница сейчас не доступна.Попробуйте найти данный товар
            через основное меню.');


//        $product = Product::find()->with('category')->where(['id'=>$id])->limit(1)->one();

//        $this->setMeta('HEIMAT|'.$product->name, $product->keywords, $product->description);

        return $this->render('view',['product'=>$product]);
    }




}