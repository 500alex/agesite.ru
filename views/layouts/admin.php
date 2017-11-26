<?php

/* @var $this \yii\web\View */
/* @var $content string */

//namespace app\models;

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\db\ActiveRecord;


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

    <div class="container">
        <div class="top-menu">
            <?php
            NavBar::begin([
                'brandLabel' => 'Admin Panel',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                ],
            ]);
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => [
                    ['label' => 'Товары', 'url' => ['/site/index']],
                    ['label' => 'Категории', 'url' => ['admin/admin/category']],
                    ['label' => 'Страницы', 'url' => ['/site/contact']],
                    ['label' => 'Основной сайт', 'url' => ['/my/index']],
                    ['label' => 'Admin', 'url' => ['/admin/admin/index']],
                    Yii::$app->user->isGuest ? (
                    ['label' => 'Login', 'url' => ['/site/login']]
                    ) : (
                        '<li>'
                        . Html::beginForm(['/site/logout'], 'post', ['class' => 'navbar-form'])
                        . Html::submitButton(
                            'Logout (' . Yii::$app->user->identity->username . ')',
                            ['class' => 'btn btn-link']
                        )
                        . Html::endForm()
                        . '</li>'
                    )
                ],
            ]);
            NavBar::end();
            ?>
        </div>

    </div>

<div style="clear:both"></div>

    <!----Хедер сайта----->
    <div class="container">
        <div class="row head-site">

        </div>
    </div>
    <!--------->

    <!----Основная часть сайта----->



    <div class="container">


        <div class="row center-content">

            <div class="col-md-3 left-menu-col">

                <div class="left-menu-block">

                    <h2>Каталог товаров</h2>

                    <ul class="left-category-menu">
                        <?php

                        /*Вывод меню категорий*/
                        class LeftCategory extends ActiveRecord
                        {
                            public static  function tableName (){
                                return 'category';
                            }
                        }
                        $cats = LeftCategory::find()->all();
                        foreach ($cats as $leftcategory){
                            echo '<li><a href="">'.$leftcategory->name.'</a></li>';
                        }
                        /*Вывод меню категорий*/
                        ?>
                    </ul>

                </div>

            </div>

            <div class="col-md-9 right-content-block">

                <?= $content ?>

            </div>



        </div>





    </div>
    <!--------->


</div>

<footer class="footer">
    <div class="container">

    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
