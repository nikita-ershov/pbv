<?php
use yii\helpers\Url;
use yii\helpers\Html;

?>
<div class="admin-widget-before"></div>
<div class="admin-widget">
    <ul>
        <li><span class="a"><strong>Система управления:</strong></span></li><!--
        --><li><?=Html::a('Редактирование', '', ['id' => 'admin-content-edit', 'class' => (!empty($_COOKIE['admin-content-edit-on']) ? 'admin-content-edit-on' : '')])?></li><!--
         --><li><?=Html::a('Админка', ['admin/index'], ['target' => '_blank'])?></li>

    </ul>
</div>