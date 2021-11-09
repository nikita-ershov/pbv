<?php

namespace app\models;

use mongosoft\file\UploadImageBehavior;
use mongosoft\file\UploadBehavior;
use Yii;
use yii\behaviors\TimestampBehavior;
use himiklab\sortablegrid\SortableGridBehavior;

/**
 * This is the model class for table "{{%news}}".
 *
 * @property integer $id
 * @property integer $id_category
 * @property string $image1
 * @property string $image2
 * @property string $image3
 * @property float $price2
 * @property float $price3
 * @property string $title
 * @property string $anons
 * @property string $content
 * @property integer $sortOrder
 * @property integer $created_at
 * @property integer $updated_at
 */
class Products extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%products}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_category'], 'integer', 'min' => 1],
            [['price2', 'price3'], 'double', 'min' => 0],
            [['title', 'id_category'], 'required'],
            [['anons', 'content'], 'string'],
            [['title'], 'string', 'max' => 255],
            [['image1', 'image2', 'image3'], 'file', 'extensions' => 'jpg,jpeg,gif,png,svg', 'checkExtensionByMimeType' => false],
            ['sortOrder', 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_category' => 'Раздел',
            'image1' => 'Изображение в списке',
            'image2' => 'В жидком виде',
            'image3' => 'В твердом виде',
            'title' => 'Название',
            'price2' => 'Цена (в жидком виде)',
            'price3' => 'Цена (в твердом виде)',
            'anons' => 'Анонс',
            'content' => 'Характеристики',
            'created_at' => 'Создано',
            'updated_at' => 'Изменено',
        ];
    }

    public function behaviors()
    {
        return [
            'sort' => [
                'class' => SortableGridBehavior::className(),
                'sortableAttribute' => 'sortOrder'
            ],
            /*
            [
                'class' => UploadBehavior::className(),
                'attribute' => 'image',
                'scenarios' => ['default'],
                //'placeholder' => '@app/modules/user/assets/images/userpic.jpg',
                'path' => '@webroot/files/news',
                'url' => '@web/files/news',
                'generateNewName' => true
            ],*/

            [
                'class' => UploadImageBehavior::className(),
                'attribute' => 'image1',
                'scenarios' => ['default'],
                //'placeholder' => '@app/modules/user/assets/images/userpic.jpg',
                'path' => '@webroot/files/products',
                'url' => '@web/files/products',
                'createThumbsOnSave' => true,
                'thumbs' => [

                    'thumb' => ['height' => 500, 'quality' => 95],
                    'preview' => ['width' => 200, 'height' => 200],
                    'news_thumb' => ['height' => 60],

                ],
            ],
            [
                'class' => UploadImageBehavior::className(),
                'attribute' => 'image2',
                'scenarios' => ['default'],
                //'placeholder' => '@app/modules/user/assets/images/userpic.jpg',
                'path' => '@webroot/files/products',
                'url' => '@web/files/products',
                'createThumbsOnSave' => true,
                'thumbs' => [

                    'thumb' => ['height' => 500, 'quality' => 95],
                    'preview' => ['width' => 200, 'height' => 200],
                    'news_thumb' => ['height' => 60],

                ],
            ],
            [
                'class' => UploadImageBehavior::className(),
                'attribute' => 'image3',
                'scenarios' => ['default'],
                //'placeholder' => '@app/modules/user/assets/images/userpic.jpg',
                'path' => '@webroot/files/products',
                'url' => '@web/files/products',
                'createThumbsOnSave' => true,
                'thumbs' => [

                    'thumb' => ['height' => 500, 'quality' => 95],
                    'preview' => ['width' => 200, 'height' => 200],
                    'news_thumb' => ['height' => 60],

                ],
            ],
            TimestampBehavior::className(),
        ];
    }
}
