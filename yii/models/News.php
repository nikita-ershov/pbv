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
 * @property integer $date
 * @property string $image
 * @property string $title
 * @property string $anons
 * @property string $content
 * @property integer $sortOrder
 * @property integer $created_at
 * @property integer $updated_at
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%news}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date'], 'filter', 'filter' => 'strtotime'],
            [['id_category'], 'integer', 'min' => 1],
            [['title', 'id_category'], 'required'],
            [['date'], 'date', 'format' => 'php:U'],
            [['anons', 'content'], 'string'],
            [['title'], 'string', 'max' => 255],
            [['image'], 'file', 'extensions' => 'jpg,jpeg,gif,png,svg', 'checkExtensionByMimeType' => false],
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
            'date' => 'Дата',
            'image' => 'Изображение',
            'title' => 'Заголовок',
            'anons' => 'Анонс',
            'content' => 'Текст',
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
                'attribute' => 'image',
                'scenarios' => ['default'],
                //'placeholder' => '@app/modules/user/assets/images/userpic.jpg',
                'path' => '@webroot/files/news',
                'url' => '@web/files/news',
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
