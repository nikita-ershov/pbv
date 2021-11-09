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
                    <a href="/"><img class="lazyload" width="109" height="86" data-src="/img/PBV/logo<?=($this->context->action->id == 'index') ? '-main' : '';?>.png" /></a>
                    <div class="header-slogan">
                        <?=ContentWidget::widget(['id' => 'pbv-slogan']);?>
                    </div>
                </div>

                <div class="header-right d-flex align-items-center justify-content-end">
                    <div>
                        <div class="header-phone-link">
                            <?=ContentWidget::widget(['id' => '+7 (343) 287-60-05', 'htmlEditor' => true]);?>
                        </div>
                        <div class="header-mail d-none d-sm-block">
                            <?=ContentWidget::widget(['id' => 'info@amnrus.ru', 'htmlEditor' => true]);?>
                        </div>
                    </div>
                    <div class="header-phone">
                        <div class="header-phone-recall">
                            <a href="#popupRecall" data-fancybox class="btn btn-small"><?=ContentWidget::widget(['id' => 'Заказать звонок'])?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-menu">
        <div class="wrapper">
            <div class="container-fluid">
                <ul class="d-flex align-items-center justify-content-center">
                    <li><a href="#pbv_block_1"><?=ContentWidget::widget(['id' => 'pbv_menu_1']);?></a></li>
                    <li><a href="#pbv_block_2"><?=ContentWidget::widget(['id' => 'pbv_menu_2']);?></a></li>
                    <li><a href="#pbv_block_3"><?=ContentWidget::widget(['id' => 'pbv_menu_3']);?></a></li>
                    <li><a href="#pbv_block_4"><?=ContentWidget::widget(['id' => 'pbv_menu_4']);?></a></li>
                    <li><a href="#pbv_block_5"><?=ContentWidget::widget(['id' => 'pbv_menu_5']);?></a></li>
                    <li><a href="#pbv_block_6"><?=ContentWidget::widget(['id' => 'pbv_menu_6']);?></a></li>
                    <li><a href="#pbv_block_7"><?=ContentWidget::widget(['id' => 'pbv_menu_7']);?></a></li>
                </ul>
            </div>
        </div>

    </div>
</header>
