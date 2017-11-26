<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property integer $id
 * @property string $name
 * @property string $size
 * @property integer $category_id
 * @property integer $price
 * @property string $img
 */
class Product extends \yii\db\ActiveRecord
{

   public $image;
    public $gallery;


    public function behaviors()
    {
        return [
            'image' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ]
        ];
    }
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product';
    }

    public function getCategory(){
        return $this->hasOne(Category::className(),['id'=>'category_id']);
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'size', 'category_id', 'price'], 'required'],
            [['category_id'], 'integer'],
            [['price'],'number'],
            [['content'],'string'],
            [['name', 'size', 'img','keywords','description'], 'string', 'max' => 255],
            [['image'],'file','extensions'=>'png, jpg'],
            [['gallery'],'file','extensions'=>'png, jpg','maxFiles'=>4],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID товара',
            'name' => 'Наименование',
            'size' => 'Size',
            'category_id' => 'Категория',
            'price' => 'Цена',
            'image' => 'Фото',
            'gallery' => 'Галерея',
            'content'=>'Описание',
            'keywords'=>'Ключевые слова',
            'description'=>'Мета-описание',
            'hit'=>'Хит',
            'new'=>'Новинка',
            'sale'=>'Распродажа'
        ];
    }

    public function upload(){
        if($this->validate()){
            $path = 'upload/store/'. $this->image->baseName . '.' . $this->image->extension;
            $this->image->saveAs($path);
            $this->attachImage($path, true);
            @unlink($path);
            return true;
        }else {
            return false;
        }
    }

    public function uploadGallery(){
        if($this->validate()){

            foreach ($this->gallery as $file){
                $path = 'upload/store/'. $file->baseName . '.' . $file->extension;
                $file->saveAs($path);
                $this->attachImage($path);
                @unlink($path);
            }
            return true;
        }else {
            return false;
        }
    }


}
