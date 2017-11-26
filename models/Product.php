<?php
/**
 * Created by PhpStorm.
 * User: a.verizhnikov
 * Date: 01.08.2016
 * Time: 14:13
 */

namespace app\models;


use yii\db\ActiveRecord;

class Product extends ActiveRecord{

    public function behaviors()
    {
        return [
            'image' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ]
        ];
    }

    public static function tableName()
    {
        return 'product';
    }

    public function getCategory (){
        return $this->hasMany(Category::className(),['id'=>'category_id']);
    }



}