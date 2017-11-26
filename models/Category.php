<?php
/**
 * Created by PhpStorm.
 * User: a.verizhnikov
 * Date: 17.11.2016
 * Time: 11:38
 */

namespace app\models;
use yii\db\ActiveRecord;


class Category extends ActiveRecord
{

    public function behaviors()
    {
        return [
            'image' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ]
        ];
    }


    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['name', 'parent_id'], 'required'],

        ];
    }

    public static function tableName()
    {
        return 'category';
    }

    public function getProducts (){
        return $this->hasMany(Product::className(),['category_id'=>'id']);
    }




}