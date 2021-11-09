<?php

namespace app\models;

use Imagine\Gd\Image;
use Imagine\Image\Box;
use Imagine\Image\ImagineInterface;
use Imagine\Image\ManipulatorInterface;
use Yii;
use zxbodya\yii2\galleryManager\GalleryBehavior;
/**
 * This is the model class for table "{{%gallery}}".
 *
 * @property integer $id
 */
class Gallery extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%gallery}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
        ];
    }

    public function behaviors()
    {
        return [
            'galleryBehavior' => [
                'class' => GalleryBehavior::className(),
                'type' => 'gallery',
                'extension' => 'jpg',
                'directory' => Yii::getAlias('@webroot') . '/files/gallery',
                'url' => Yii::getAlias('@web') . '/files/gallery',
                'versions' => [
                    'letter' => function ($img) {
                        /** @var \Imagine\Image\ImageInterface $img */

                        $dstSize = $img->getSize();
                        $maxHeight = 550;
                        if ($dstSize->getHeight() > $maxHeight) {
                            $dstSize = $dstSize->heighten($maxHeight);
                        }

                        return $img
                            ->copy()
                            ->thumbnail(new Box($dstSize->getWidth(), $dstSize->getHeight()), ManipulatorInterface::THUMBNAIL_OUTBOUND);
                    },
                    'photo' => function ($img) {
                        /** @var \Imagine\Image\ImageInterface $img */

                        $dstSize = $img->getSize();
                        $maxHeight = 350;
                        if ($dstSize->getHeight() > $maxHeight) {
                            $dstSize = $dstSize->heighten($maxHeight);
                        }

                        return $img
                            ->copy()
                            ->thumbnail(new Box($dstSize->getWidth(), $dstSize->getHeight()), ManipulatorInterface::THUMBNAIL_OUTBOUND);
                    },
                    'large' => function ($img) {
                        /** @var \Imagine\Image\ImageInterface $img */
                        $dstSize = $img->getSize();
                        $maxWidth = 1280;
                        if ($dstSize->getWidth() > $maxWidth) {
                            $dstSize = $dstSize->widen($maxWidth);
                        }
                        return $img
                            ->copy()
                            ->resize($dstSize);
                    },
                ]
            ]
        ];
    }
}
