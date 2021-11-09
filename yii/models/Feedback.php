<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "{{%feedback}}".
 *
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $message
 * @property integer $created_at
 * @property integer $updated_at
 */
class Feedback extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%feedback}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [[/*'name', 'email',*/ 'phone'/*, 'message'*/], 'required'],
            ['phone', function ($attribute, $params) {
                $phone = preg_replace('~[^0-9]+~', '', $this->$attribute);
                if (strlen($phone) != 11) {
                    $this->addError($attribute, 'Некорректный номер телефона');
                }

            }],
            [['message'], 'string'],
            [['created_at', 'updated_at'], 'integer'],
            [['name', 'email', 'phone'], 'string', 'max' => 255],
            ['email', 'email'],

        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Ваше имя',
            'email' => 'E-mail',
            'phone' => 'Телефон',
            'message' => 'Сообщение',
            'created_at' => 'Создано',
            'updated_at' => 'Изменено',
        ];
    }

    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }
}
