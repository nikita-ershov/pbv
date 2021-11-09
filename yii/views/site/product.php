<?php
use app\widgets\ContentWidget;
use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $product \app\models\Products */

$this->title = 'ПБВ-Урал &mdash; ' . $product->title;
?>

<?=$this->render('_header_pbv');?>

<div class="product">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="stroke"><?=$product->title?></div>
            <div class="h1 text-align-left"><?=$product->title?></div>

            <div class="product-content">
                <div class="product-types row">
                    <div class="col-12 col-lg-6">
                        <div class="product-type product-type-1">
                            <div class="image">
                                <img class="lazyload" data-src="<?=$product->getUploadUrl('image2');?>"" />
                                <div class="h"><?=ContentWidget::widget(['id' => 'pbv-product-type-1-h']);?></div>
                                <div class="h-sub"><?=ContentWidget::widget(['id' => 'pbv-product-type-1-h-sub']);?></div>

                                <div class="product-footer d-flex justify-content-end align-items-center">
                                    <div class="price">
                                        <div class="price-h"><?=ContentWidget::widget(['id' => 'pbv-product-price-1-h']);?></div>
                                        <div class="price-value"><?=number_format($product->price2, 0, '.', ' ');?> ₽</div>
                                    </div>
                                    <div class="order"><a href="#popupOrder" data-fancybox class="btn"><img src="/img/PBV/icon-cart-white.png" />Заказать</a></div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="product-type product-type-2">
                            <div class="image">
                                <img class="lazyload" data-src="<?=$product->getUploadUrl('image3');?>"" />
                                <div class="h"><?=ContentWidget::widget(['id' => 'pbv-product-type-2-h']);?></div>
                                <div class="h-sub"><?=ContentWidget::widget(['id' => 'pbv-product-type-2-h-sub']);?></div>
                                <div class="product-footer d-flex justify-content-end align-items-center">
                                    <div class="price">
                                        <div class="price-h"><?=ContentWidget::widget(['id' => 'pbv-product-price-2-h']);?></div>
                                        <div class="price-value"><?=number_format($product->price3, 0, '.', ' ');?> ₽</div>
                                    </div>
                                    <div class="order"><a href="#popupOrder" data-fancybox class="btn"><img src="/img/PBV/icon-cart-white.png" />Заказать</a></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="params">
                    <div class="h">Характеристики</div>
                    <?
                    $params = json_decode($product->content);
                    ?>
                    <? if (!empty($params)) : ?>
                        <div class="params-list d-flex flex-wrap justify-content-between">
                            <? foreach ($params as $row) : ?>
                                <? if (!empty($row[0])) : ?>
                                    <div class="params-item d-flex justify-content-between align-items-center">
                                        <div class="params-item-left"><?=$row[0];?></div>
                                        <div class="params-item-right"><?=$row[1];?></div>
                                    </div>
                                <? endif; ?>
                            <? endforeach; ?>
                        </div>
                    <? endif; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="pbv-product-time">
        <?=$this->render('_time'); ?>
    </div>
</div>

<?=$this->render('_footer_pbv');?>

