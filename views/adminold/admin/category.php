<h3>Изменение категорий товаров</h3>

<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>

<?php $form = ActiveForm::begin(['id' => 'CategoryNew']); ?>

<?= $form->field($model, 'name')->textInput(['autofocus' => true])->label('Имя категории') ?>

<?= $form->field($model, 'parent_id')->label('Родительская категория') ?>


<div class="form-group">
    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'category-button']) ?>
</div>

<?php ActiveForm::end(); ?>