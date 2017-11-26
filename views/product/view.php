<?php

/* @var $this yii\web\View */

use app\components\MenuWidget;
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\helpers\Url;

//$this->title = 'Товары';
?>

<?= Html::img("@web/images/products/{$product->img}",['alt'=>$product->name,'height'=>50])?>
<?php
echo '<br>'.$product->name.'<br>';
echo $product->price.'руб<br>';
?>
<label>количество</label>
<input type="text" value="1" id="qty"/>
<p>Описание</p>
<?= $product->content; ?>

<?php
$mainImg = $product->getImage();
$gallery = $product->getImages();
?>


<?= Html::img($mainImg->getUrl(),['alt'=>$product->name])?>

<div class="carusel">

    <?php $count = count($gallery); $i = 0; foreach ($gallery as $img):?>
    <div class="item active">
        <a href=""><?= Html::img($img->getUrl('84x85'),['alt'=>''])?></a>
    </div>
    <?php $i++;
    endforeach;?>

</div>



<p><a href="<?= Url::to(['cart/add','id'=>$product->id])?>"   class="btn btn-default add-to-cart" data-id="<?=$product->id?>" >купить</a></p>


