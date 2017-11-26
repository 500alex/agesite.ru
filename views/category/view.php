<?php

/* @var $this yii\web\View */

use app\components\MenuWidget;
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\helpers\Url;

//$this->title = 'Товары';
?>

<h1><?= $category->name?></h1>

<?php //debug($products)?>

<?php

if(!empty($products)
//    && ($category->id == 1)
) :?>

<table class="catalog-table">
        <thead>
            <tr>

                <th>Название товара</th>
                <th>Размер(вес) товара</th>
                <th>Цена товара</th>
                <th>Добавить в корзину</th>
            </tr>
        </thead>

        <tbody>
        <?php
        foreach ($products as $product):?>
            <tr>
            <td><a href="<?=Url::to(['product/view', 'id'=>$product->id])?>" ><?=$product->name?></a></td>
            <td><?=$product->size?></td>'
            <td><?=$product->price?>руб</td>
            <td><a href="<?= Url::to(['cart/add','id'=>$product->id])?>" data-id="<?=$product->id?>" class="btn btn-primary add-to-cart">Купить</a></td>
            </tr>
        <?php endforeach;?>

        </tbody>

</table>

<?php
endif;
?>












