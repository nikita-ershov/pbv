<?php
namespace app\widgets;

use app\models\User;
use yii\base\ExitException;
use yii\base\Widget;
use yii\helpers\Html;
use app\models\Content;
use Yii;
use yii\helpers\Url;

class ContentWidget extends Widget
{
    public $htmlEditor = false;
    public $showMarker = false;

    private $content;

    public function init()
    {
        parent::init();

        if (!$this->getId(false)) {
            $this->content = 'Не задан id виджета';
        } else {
            $model = Content::findOne($this->id);
            if (empty($model)) {
                $model = new Content();
                $model->id = $this->id;
                $model->htmlEditor = $this->htmlEditor;
                $model->save();
            }

            $this->content = $model->htmlEditor ? $model->content : nl2br($model->content);

            $classes = [];
            $classes[] = 'admin-content-edit';

            if (trim($this->content) == '') {
                $classes[] = 'admin-content-edit__empty';
            }

            if ($this->showMarker) {
                $classes[] = 'admin-content-edit__marker';
            }

            if (!Yii::$app->user->isGuest) {
                $this->content = Html::tag('span', $this->content, [
                    'class' => implode(' ', $classes),
                    'data-id' => $model->id,
                    'data-url' => Url::toRoute(['admin/content-edit', 'id' => $model->id])
                ]);
            }
        }
    }

    public function run()
    {
        return $this->content;
    }
}