<?php

namespace app\models;

use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "{{%feedback_commerce}}".
 *
 * @property integer $id
 * @property integer $check
 * @property string $email
 * @property integer $created_at
 * @property integer $updated_at
 */
class FeedbackCommerce extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%feedback_commerce}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['created_at', 'updated_at'], 'integer'],
            [['check'], 'boolean'],
            [['email'], 'required'],
            [['email'], 'email'],
            ['email', 'string', 'max' => 255],
            ['check', 'compare', 'compareValue' => 1, 'operator' => '==', 'type' => 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'check' => 'Я хочу получить коммерческое предложение на поставку MoonLifter на электронную почту!',
            'email' => 'E-mail',
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
