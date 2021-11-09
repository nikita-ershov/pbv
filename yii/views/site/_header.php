<?php
use app\widgets\ContentWidget;
use yii\helpers\Html;
use yii\helpers\Url;
?>
<header class="header">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="header-top d-flex justify-content-between align-items-center">
                <div class="header-left d-none d-lg-flex align-items-center">
                    <div class="header-address">
                        <div class="h"><?=ContentWidget::widget(['id' => 'Адрес офиса:']);?></div>
                        <p><?=ContentWidget::widget(['id' => 'г. Екатеринбург, ул.Розы Люксембург, 49, оф. 602']);?></p>
                    </div>
                    <div class="header-address">
                        <div class="h"><?=ContentWidget::widget(['id' => 'Адрес завода:']);?></div>
                        <p><?=ContentWidget::widget(['id' => 'Свердловская обл., посёлок Красный']);?></p>
                    </div>
                </div>

                <div class="header-logo">
                    <a href="/"><img class="lazyload" width="196" height="90" data-src="/img/logo.png" /></a>
                </div>

                <div class="header-right d-flex align-items-center justify-content-end">
                    <div class="header-mail d-none d-sm-block">
                        <?=ContentWidget::widget(['id' => 'info@amnrus.ru', 'htmlEditor' => true]);?>
                    </div>
                    <div class="header-phone">
                        <div class="header-phone-link">
                            <?=ContentWidget::widget(['id' => '+7 (343) 287-60-05', 'htmlEditor' => true]);?>
                        </div>
                        <div class="header-phone-recall">
                            <a href="#popupRecall" data-fancybox class="btn btn-small"><?=ContentWidget::widget(['id' => 'Заказать звонок'])?></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-menu">
                <ul class="d-flex align-items-center justify-content-between">
                    <li><a href="#about"><?=ContentWidget::widget(['id' => 'menu_about']);?></a></li>
                    <li><a href="#links"><?=ContentWidget::widget(['id' => 'menu_fabrics']);?></a></li>
                    <li><a href="#letters"><?=ContentWidget::widget(['id' => 'menu_letters']);?></a></li>
                    <li><a href="#fabrics"><?=ContentWidget::widget(['id' => 'menu_regions']);?></a></li>
                    <li><a href="#news"><?=ContentWidget::widget(['id' => 'menu_news']);?></a></li>
                </ul>
            </div>
        </div>
    </div>
</header>
