<?php
use app\widgets\ContentWidget;
use yii\helpers\Html;
?>
<footer class="footer">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="footer-bottom d-flex flex-wrap flex-lg-nowrap justify-content-between align-items-center">
                <div class="footer-left">
                    <div class="footer-logo"><a href="/"><img class="lazyload" width="221" height="60" data-src="/img/logo-footer.png" /></a></div>
                </div>
                <div></div>
                <div class="footer-right d-flex flex-wrap justify-content-center align-items-center flex-lg-nowrap justify-content-lg-end">
                    <div class="footer-menu">
                        <ul class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-start justify-content-lg-end">
                            <li><a href="#about"><?=ContentWidget::widget(['id' => 'menu_about']);?></a></li>
                            <li><a href="#regions"><?=ContentWidget::widget(['id' => 'menu_regions']);?></a></li>
                            <li><a href="#fabrics"><?=ContentWidget::widget(['id' => 'menu_fabrics']);?></a></li>
                            <li><a href="#news"><?=ContentWidget::widget(['id' => 'menu_news']);?></a></li>
                            <li><a href="#letters"><?=ContentWidget::widget(['id' => 'menu_letters']);?></a></li>
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
