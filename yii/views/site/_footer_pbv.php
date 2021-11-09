<?php
use app\widgets\ContentWidget;
use yii\helpers\Html;
?><?=$this->render('_questions', ['feedbackModel' => new \app\models\Feedback()]); ?>
<footer class="footer">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="footer-bottom d-flex flex-wrap flex-lg-nowrap justify-content-between">
                <div class="footer-left">
                    <div class="footer-logo"><a href="/"><img class="lazyload" width="247" height="61" data-src="/img/PBV/logo-footer.png" /></a></div>
                </div>
                <div class="footer-center d-flex flex-wrap justify-content-center">
                    <div class="footer-menu">
                        <div class="footer-h">Меню</div>
                        <ul class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-start justify-content-lg-end">
                            <li><a href="#pbv_block_1"><?=ContentWidget::widget(['id' => 'pbv_menu_1']);?></a></li>
                            <li><a href="#pbv_block_2"><?=ContentWidget::widget(['id' => 'pbv_menu_2']);?></a></li>
                            <li><a href="#pbv_block_3"><?=ContentWidget::widget(['id' => 'pbv_menu_3']);?></a></li>
                            <li><a href="#pbv_block_4"><?=ContentWidget::widget(['id' => 'pbv_menu_4']);?></a></li>
                            <li><a href="#pbv_block_5"><?=ContentWidget::widget(['id' => 'pbv_menu_5']);?></a></li>
                            <li><a href="#pbv_block_6"><?=ContentWidget::widget(['id' => 'pbv_menu_6']);?></a></li>
                            <li><a href="#pbv_block_7"><?=ContentWidget::widget(['id' => 'pbv_menu_7']);?></a></li>
                        </ul>
                    </div>
                    <div class="footer-menu">
                        <div class="footer-h">Каталог</div>
                        <ul class="d-block">
                            <? foreach (\app\models\Products::find()->where(['id_category' => 1])->orderBy(['sortOrder' => SORT_ASC])->all() as $k => $item) : ?>
                                <li><a href="/product/<?=$item->id;?>"><?=$item->title;?></a></li>
                            <? endforeach; ?>

                        </ul>
                    </div>
                </div>
                <div class="footer-right d-flex flex-wrap justify-content-center align-items-center flex-lg-nowrap justify-content-lg-end">
                    <div class="footer-addresses">
                        <div class="footer-h">Контакты</div>
                        <div class="footer-address">
                            <div class="h"><?=ContentWidget::widget(['id' => 'Адрес офиса:']);?></div>
                            <p><?=ContentWidget::widget(['id' => 'г. Екатеринбург, ул.Розы Люксембург, 49, оф. 602']);?></p>
                        </div>
                        <div class="footer-address">
                            <div class="h"><?=ContentWidget::widget(['id' => 'Адрес завода:']);?></div>
                            <p><?=ContentWidget::widget(['id' => 'Свердловская обл., посёлок Красный']);?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<div id="popupOrder" class="popup popup-recall" style="display: none;">
    <div class="popup-header">Заказать</div>
    <div class="popup-body">
        <?=$this->render('_form_recall', ['feedbackModel' => new \app\models\Feedback()]); ?>
    </div>
</div>

<div id="popupRecall" class="popup popup-recall" style="display: none;">
    <div class="popup-header">Заказать звонок</div>
    <div class="popup-body">
        <?=$this->render('_form_recall', ['feedbackModel' => new \app\models\Feedback()]); ?>
    </div>
</div>
<div id="popupPersonal" class="popup popup-text" style="display: none;">
    <div class="h2"><?=ContentWidget::widget(['id' => 'pbv-privacy-h']);?></div>
    <div class="text-block"><?=ContentWidget::widget(['id' => 'pbv-privacy-txt', 'htmlEditor' => true]);?></div>
</div>
