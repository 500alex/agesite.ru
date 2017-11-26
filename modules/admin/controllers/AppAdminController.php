<?php
/**
 * Created by PhpStorm.
 * User: a.verizhnikov
 * Date: 09.12.2016
 * Time: 12:49
 */

namespace app\modules\admin\controllers;

use yii\web\Controller;
use yii\filters\AccessControl;
class AppAdminController extends Controller
{

    public function behaviors()
    {
        return [
            'access' =>[
                'class'=> AccessControl::className(),
                'rules'=>[
                    [
                        'allow'=>true,
                        'roles' =>['@']
                    ]

                ]
            ]
        ];


    }

}