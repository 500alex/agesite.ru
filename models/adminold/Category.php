<?php

namespace app\models\admin;
use yii\db\ActiveRecord;


/**
 * Created by PhpStorm.
 * User: a.verizhnikov
 * Date: 18.11.2016
 * Time: 14:36
 */
class Category extends ActiveRecord
{

    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['name', 'parent_id'], 'required','message'=>'Поле обязательно'],
            [['name', 'parent_id'], 'trim'],


        ];
    }


}