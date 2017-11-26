<?php

/* @var $this \yii\web\View */
/* @var $content string */

//namespace app\models;

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\bootstrap\Modal;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\db\ActiveRecord;
use yii\helpers\Url;
use app\components\MenuWidget;
//use yii\widgets\LinkPager;


AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">

    <div class="container-fluid top-line">
            <div class="container">
                <ul class="top-menu">
                    <li><a href="<?=Url::to(['site/about','id'=>101])?>">О нас</a></li>
                    <li><a href="<?=Url::to(['site/contact','id'=>102])?>">Контакты</a></li>
                    <li><a>Ссылка 1</a></li>
                    <li><a>Ссылка 1</a></li>
                </ul>

                <div class="reg-block">

                    <?php
                    if(!Yii::$app->user->IsGuest) {
                       ?>
<a href="<?=Url::to(['/site/logout'])?>"><?= Yii::$app->user->identity['username']?> (выход)</a>

<?php }else {?>
                        <a href="<?=Url::to(['/admin'])?>" class="transition">Вход (регистрация)</a>
                 <?php   }?>



                </div>
            </div>
    </div>

    <div class="container-fluid yellow-line">
        <div class="container ">
            <div class="logo">
                <p><a href="/">Логотип</a></p>
            </div>

            <div class="phone-block">
                <p>круглосуточно</p>
                <p class="phone">(495) 777-77-77</p>
            </div>

            <div class="cart-block">
                <a href="#" onclick="return getCart()">Корзина</a>
            </div>

        </div>
    </div>

    <div class="container">

        <!----Основная часть сайта----->
        <div class="row">
            <div class="catalog-left-block">
                <p><a href="<?=Url::to(['category/index'])?>">Каталог товаров</a></p>
            </div>

        </div>

            <div class="row center-content">

                    <div class="col-md-3 left-menu-col">

                        <div class="left-menu-block">


<!---->
<!--                            <ul class="left-category-menu">-->
<!--                            --><?php
//
//                            /*Вывод меню категорий*/
//                            class LeftCategory extends ActiveRecord
//                            {
//                                public static  function tableName (){
//                                    return 'category';
//                                }
//                            }
//                            $cats = LeftCategory::find()->all();
//                                foreach ($cats as $leftcategory){
//                                    echo '<li><a href="">'.$leftcategory->name.'</a></li>';
//                                }
//                            /*Вывод меню категорий*/
//                            ?>
<!--                            </ul>-->

                            <div class="menu-widget">

                                <?= MenuWidget::widget(['tpl'=>'menu'])?>
                            </div>


                        </div>

                    </div>

                    <div class="col-md-9 right-content-block">

                        <?= $content ?>

                    </div>



                </div>
        <!--------->
    </div>

</div>

    <footer class="footer">
        <div class="container">

        </div>
    </footer>


<?php
Modal::begin([
'header'=>'<h2>ваша корзина</h2>',
    'id'=>'cart',
    'size'=>'modal-lg',
    'footer'=>'<button type="button" class="btn btn-primary"
    data-dismiss="modal">Продолжить покупки</button>
    <a href="'.\yii\helpers\Url::to(['cart/view']).'"  class="btn btn-success">Оформить заказ</a>
    <button type="button" class="btn btn-danger" onclick="clearCart()">Очистить корзину</button>',
]);


Modal::end();
?>




<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
