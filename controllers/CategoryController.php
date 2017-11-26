<?php
/**
 * Created by PhpStorm.
 * User: a.verizhnikov
 * Date: 22.11.2016
 * Time: 15:00
 */

namespace app\controllers;
use app\models\Category;
use app\models\Product;
use Yii;
use yii\data\Pagination;





class CategoryController extends AppController
{

    public function actionIndex()
    {
        return $this->render('index');
    }


    public function actionView ($id){
//$id = Yii::$app->request->get('id');
        $category = Category::findOne($id);
        if(empty($category))
            throw  new \yii\web\HttpException(404,'Данная страница сейчас не доступна.');

        $products = Product::find()->where(['category_id'=>$id])->all();
//        $query = Product::find()->where(['category_id'=>$id]);
//        $pages = new Pagination(['totalCount'=>$query->count(),'pageSize'=>3,'forcePageParam'=>false, 'pageSizeParam'=>false] );
//        $products = $query->offset($pages->offset)->limit($pages->limit)->all();


        return $this->render('view',['category'=>$category,'products'=>$products]);
    }


}