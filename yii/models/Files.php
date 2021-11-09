<?php

namespace app\models;

use himiklab\sortablegrid\SortableGridBehavior;
use mongosoft\file\UploadBehavior;
use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "{{%files}}".
 *
 * @property integer $id
 * @property string $file
 * @property string $title
 * @property string $description
 * @property string $sortOrder
 * @property integer $created_at
 * @property integer $updated_at
 */
class Files extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%files}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['description'], 'string'],
            [['created_at', 'updated_at'], 'integer'],
            [['title'], 'string', 'max' => 255],
            /*['file', 'file', 'extensions' => 'svg, doc, docx, pdf, xls, xlsx, png, jpg, gif, jpeg'],*/
            ['file', 'safe'],
            ['sortOrder', 'safe']
        ];
    }

    public function getFileSize() {
        if (file_exists($this->getUploadPath('file'))) {
            $bytes = filesize($this->getUploadPath('file'));
            $decimals = 1;

            $sz = 'BKMGTP';
            $factor = floor((strlen($bytes) - 1) / 3);

            return sprintf("%.{$decimals}f", $bytes / pow(1024, $factor)) . '&nbsp;' . @$sz[$factor];

            return $this->getHumanFileSize(filesize($this->getFilePath()));
        } else {
            return false;
        }
    }



    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'file' => 'Файл',
            'title' => 'Название',
            'description' => 'Описание',
            'created_at' => 'Создан',
            'updated_at' => 'Изменен',
        ];
    }

    public function behaviors()
    {
        return [
            'sort' => [
                'class' => SortableGridBehavior::className(),
                'sortableAttribute' => 'sortOrder'
            ],
            [
                'class' => UploadBehavior::className(),
                'attribute' => 'file',
                'scenarios' => ['default'],
                //'placeholder' => '@app/modules/user/assets/images/userpic.jpg',
                'path' => '@webroot/files/files',
                'url' => '@web/files/files',
                'generateNewName' => false
            ],
            TimestampBehavior::className(),
        ];
    }
}
