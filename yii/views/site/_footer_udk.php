<?php
use app\widgets\ContentWidget;
use yii\helpers\Html;
?>
<footer class="footer">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="footer-bottom d-flex flex-wrap flex-lg-nowrap justify-content-between align-items-center">
                <div class="footer-left">
                    <div class="footer-logo"><a href="/"><img class="lazyload" width="221" height="60" data-src="/img/UDK/logo-footer.png" /></a></div>
                </div>
                <div></div>
                <div class="footer-right d-flex flex-wrap justify-content-center align-items-center flex-lg-nowrap justify-content-lg-end">
                    <div class="footer-menu">
                        <ul class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-start justify-content-lg-end">
                            <li><a href="#udk_block_1"><?=ContentWidget::widget(['id' => 'udk_menu_1']);?></a></li>
                            <li><a href="#udk_block_2"><?=ContentWidget::widget(['id' => 'udk_menu_2']);?></a></li>
                            <li><a href="#udk_block_3"><?=ContentWidget::widget(['id' => 'udk_menu_3']);?></a></li>
                            <li><a href="#udk_block_4"><?=ContentWidget::widget(['id' => 'udk_menu_4']);?></a></li>
                            <li><a href="#udk_block_5"><?=ContentWidget::widget(['id' => 'udk_menu_5']);?></a></li>
                            <li><a href="#udk_block_6"><?=ContentWidget::widget(['id' => 'udk_menu_6']);?></a></li>
                            <li><a href="#udk_block_7"><?=ContentWidget::widget(['id' => 'udk_menu_7']);?></a></li>
                        </ul>
                    </div>
                    <div class="footer-addresses">
                        <div class="footer-address">
                            <div class="h"><?=ContentWidget::widget(['id' => 'Адрес офиса:']);?></div>
                            <p><?=ContentWidget::widget(['id' => 'г. Екатеринбург, ул.Розы Люксембург, 49, оф. 602']);?></p>
                        </div>
                        <div class="footer-address">
                            <div class="h"><?=ContentWidget::widget(['id' => 'Адрес завода:']);?></div>
                            <p><?=ContentWidget::widget(['id' => 'Свердловская обл., посёлок Красный']);?></p>
                        </div>
                    </div>
                    <div class="footer-contacts">
                        <div class="footer-phone">
                            <div class="footer-phone-link">
                                <?=ContentWidget::widget(['id' => '+7 (343) 287-60-05', 'htmlEditor' => true]);?>
                            </div>
                            <div class="footer-phone-recall">
                                <a href="#popupRecall" data-fancybox class="btn btn-small btn-inverse"><?=ContentWidget::widget(['id' => 'Заказать звонок'])?></a>
                            </div>
                        </div>
                        <div class="footer-mail">
                            <?=ContentWidget::widget(['id' => 'info@amnrus.ru', 'htmlEditor' => true]);?>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<div id="popupRecall" class="popup popup-recall" style="display: none;">
    <div class="popup-header">Заказать звонок</div>
    <div class="popup-body">
        <?=$this->render('_form_recall', ['feedbackModel' => new \app\models\Feedback()]); ?>
    </div>
</div>
