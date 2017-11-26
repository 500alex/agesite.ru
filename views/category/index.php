<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;


$this->title = 'All catalog';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
       Cтраница полного каталога товаров
    </p>


<!--    --><?php //debug(Yii:$app->user->identity)?>



    <div class="all-catalog-block">
        <div class="one-brand-block">
                <p><a href="<?= Url::to(['category/view'])?>">Древесина</a></p>
        </div>

    </div>


</div>