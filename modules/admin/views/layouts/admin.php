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
    <title>Админка сайта</title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap-admin">

    <div class="container">

        <div class="row">
            <?php if(!Yii::$app->user->IsGuest):?>
                <li><a href="<?=Url::to(['/site/logout'])?>"><?= Yii::$app->user->identity['username']?> (Выход)</a></li>
            <?php endif;?>

            <ul class="nav navbar-nav collapse navbar-collapse">
                <li><a href="<?= \yii\helpers\Url::to(['/admin'])?>" class="active">Home</a></li>
                <li class="dropdown"><a href="#">Категория<i class="fa fa-angle-down"></i></a>
                        <ul role="menu" class="sub-menu">
                            <li><a href="<?=\yii\helpers\Url::to(['category/index'])?>">Список категорий</a></li>
                            <li><a href="<?=\yii\helpers\Url::to(['category/create'])?>">Добавить категорию</a></li>
                        </ul>
                </li>
                <li class="dropdown">
                    <a href="#">Товары<i class="fa fa-angle-down"></i></a>
                    <ul role="menu" class="sub-menu">
                        <li><a href="<?= \yii\helpers\Url::to(['product/index'])?>">список товаров</a></li>
                        <li><a href="<?= \yii\helpers\Url::to(['product/create'])?>">добавить товар</a></li>
                    </ul>

                </li>


            </ul>

        </div>

        <div class="row">
            <div class="col-md-12">
                <?php if (Yii::$app->session->hasFlash('success')):?>
                    <div class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span> </button>
                        <?php echo Yii::$app->session->getFlash('success');?>
                    </div>
                <?php endif;?>
                <?= $content ?>
            </div>

        </div>

    </div>

</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
