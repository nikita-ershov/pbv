<?php
use app\widgets\ContentWidget;
use yii\helpers\Html;


/* @var $this yii\web\View */

$this->title = 'ПБВ-Урал';
?>
<div class="header-main">
    <?=$this->render('_header_pbv');?>
</div>


<div class="header-banner">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="header-banner-content">
                <div class="stroke">ПБВ</div>
                <div class="header-banner-h"><?=ContentWidget::widget(['id' => 'pbv-header-banner-h']);?></div>
                <div class="header-banner-text"><p><?=ContentWidget::widget(['id' => 'pbv-header-banner-text']);?></p></div>
                <div class="header-banner-link"><a class="btn btn-transparent anchor" href="#pbv_block_1"><?=ContentWidget::widget(['id' => 'pbv-header-banner-link']);?></a></div>
            </div>
        </div>
    </div>
</div>
<div class="header-banner-after"></div>

<div id="pbv_block_1" class="content-block catalog">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="stroke text-align-center">Продукция</div>
            <div class="h1"><?=ContentWidget::widget(['id' => 'pbv-catalog-h']);?></div>
            <div class="catalog-text">
                <?=ContentWidget::widget(['id' => 'pbv-catalog-text', 'htmlEditor' => true]);?>
            </div>

            <div class="catalog-list d-flex justify-content-between flex-wrap">
                <? foreach (\app\models\Products::find()->where(['id_category' => 1])->orderBy(['sortOrder' => SORT_ASC])->all() as $k => $item) : ?>
                    <div class="catalog-list-item">
                        <div class="title"><?=$item->title;?></div>
                        <? if ($item->getUploadUrl('image1')) : ?>
                            <div class="image">
                                <img class="lazyload" data-src="<?=$item->getUploadUrl('image1');?>" />
                            </div>
                        <? endif; ?>
                        <div class="catalog-item-info">
                            <div class="h3">Характеристики</div>
                            <?
                            $params = json_decode($item->content);
                            ?>
                            <? if (!empty($params)) : ?>
                                <div class="params">
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
                            <div class="catalog-list-item-btn">
                                <a href="/product/<?=$item->id;?>" class="btn"><img src="/img/PBV/icon-cart-white.png" />Заказать</a>
                            </div>
                        </div>
                    </div>
                <? endforeach; ?>
            </div>
        </div>
    </div>
</div>

<div class="content-block pbv-map" id="pbv_block_2">
    <div class="pbv-map-image">
        <img class="lazyload" data-src="/img/PBV/map-map.jpg" width="1999" height="1025" />
    </div>
    <div class="pbv-map-content">
        <div class="wrapper">
            <div class="container-fluid">
                <div class="stroke text-align-center">КАРТА</div>
                <div class="h1"><?=ContentWidget::widget(['id' => 'pbv-map-h']);?></div>

                <div class="pbv-map-list d-flex flex-wrap flex-lg-nowrap justify-content-between">
                    <div data-image="/img/PBV/map-rf.jpg" class="pbv-map-list-item pbv-map-list-item-1">
                        <div class="h"><img class="lazyload" width="68" height="51" data-src="/img/PBV/map-icon-1.png" /><?=ContentWidget::widget(['id' => 'pbv-map-list-item-1-h']);?></div>
                    </div>
                    <div data-image="/img/PBV/map-ural.jpg" class="pbv-map-list-item pbv-map-list-item-2">
                        <div class="h"><img class="lazyload" width="50" height="61" data-src="/img/PBV/map-icon-2.png" /><?=ContentWidget::widget(['id' => 'pbv-map-list-item-2-h']);?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="content-block pbv-lab" id="pbv_block_3">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="stroke">Лаборатория</div>
                    <div class="h1 text-align-left"><?=ContentWidget::widget(['id' => 'pbv-lab-h']);?></div>
                    <div class="pbv-lab-text text-block"><?=ContentWidget::widget(['id' => 'pbv-lab-text', 'htmlEditor' => true]);?></div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="pbv-lab-gallery">
                        <? foreach(\app\models\Gallery::findOne(4)->getBehavior('galleryBehavior')->getImages() as $k => $image) : ?>
                            <div class="pbv-lab-item">
                                <a href="<?=$image->getUrl('large')?>" target="_blank" data-fancybox="pbv-lab-items" data-caption="<?=$image->name;?>"><img src="<?=$image->getUrl('letter');?>" /></a>

                            </div>
                        <? endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="pbv-letters" id="pbv_block_4">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="stroke text-align-center"><?=ContentWidget::widget(['id' => 'pbv-letters-h']);?></div>
            <div class="h1"><?=ContentWidget::widget(['id' => 'pbv-letters-h']);?></div>
        </div>
    </div>
    <div class="pbv-letters-slider">
        <? foreach(\app\models\Gallery::findOne(3)->getBehavior('galleryBehavior')->getImages() as $k => $image) : ?>
            <div class="pbv-letters-item">
                <img src="<?=$image->getUrl('letter');?>" />
                <a href="<?=$image->getUrl('large')?>" target="_blank" data-fancybox="pbv-letters-items" data-caption="<?=$image->name;?>">

                    <div class="title"><?=$image->name;?></div>
                    <div class="anons"><?=$image->description;?></div>
                </a>
            </div>
        <? endforeach; ?>
    </div>
</div>

<div class="pbv-gallery" id="pbv_block_5">
    <!-- div class="wrapper">
        <div class="container-fluid">
            <div class="stroke text-align-center"><?=ContentWidget::widget(['id' => 'pbv-gallery-h']);?></div>
            <div class="h1"><?=ContentWidget::widget(['id' => 'pbv-gallery-h']);?></div>
        </div>
    </div -->
    <div class="pbv-gallery-slider">
        <? foreach(\app\models\Gallery::findOne(5)->getBehavior('galleryBehavior')->getImages() as $k => $image) : ?>
            <div class="pbv-gallery-item">
                <img src="<?=$image->getUrl('letter');?>" />
                <a href="<?=$image->getUrl('large')?>" target="_blank" data-fancybox="pbv-gallery-items" data-caption="<?=$image->name;?>">

                    <div class="title"><?=$image->name;?></div>
                    <div class="anons"><?=$image->description;?></div>
                </a>
            </div>
        <? endforeach; ?>
    </div>
</div>
<?=$this->render('_time'); ?>

<div class="pbv-utp content-block">
    <div class="container-fluid">
        <div class="stroke text-align-center">Преимущества</div>
        <div class="h1"><?=ContentWidget::widget(['id' => 'pbv-utp-h']);?></div>
    </div>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="text-block"><?=ContentWidget::widget(['id' => 'pbv-utp-text', 'htmlEditor' => true]);?></div>

            <div class="pbv-utp-list row">
                <? foreach (\app\models\News::find()->where(['id_category' => 6])->orderBy(['sortOrder' => SORT_ASC])->all() as $k => $item) : ?>
                    <div class="pbv-utp-list-item col-12 col-sm-6 col-lg-4">
                        <div class="image">
                            <? if ($item->getUploadUrl('image')) : ?>
                                <img alt="" class="lazyload" data-src="<?=$item->getUploadUrl('image');?>" />
                            <? endif; ?>
                        </div>
                        <div class="title"><?=$item->title;?></div>
                        <div class="anons"><?=$item->content;?></div>
                    </div>
                <? endforeach; ?>
            </div>
        </div>
    </div>
</div>

<div class="pbv-steps content-block lazyload" data-bg="/img/PBV/steps/bg.jpg">
    <div class="container-fluid">
        <div class="pbv-steps-header">
            <div class="stroke text-align-center">Этапы</div>
            <div class="h1"><?=ContentWidget::widget(['id' => 'pbv-steps-h']);?></div>
        </div>
    </div>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="text-block"><?=ContentWidget::widget(['id' => 'pbv-steps-text', 'htmlEditor' => true]);?></div>

            <div class="pbv-steps-list row flex-column align-items-center flex-lg-row">
                <div class="pbv-step-item col-12 col-lg-4">
                    <div class="image" style="padding-top: 29px;"><img src="/img/PBV/steps/1.png" /></div>
                    <div class="info">
                        <div class="info-h"><?=ContentWidget::widget(['id' => 'pbv-steps-1-h']);?></div>
                        <div class="info-text"><?=ContentWidget::widget(['id' => 'pbv-steps-1-text', 'htmlEditor' => true]);?></div>
                    </div>
                </div>
                <div class="pbv-step-item col-12 col-lg-4">
                    <div class="image" style="padding-top: 48px;"><img src="/img/PBV/steps/2.png" /></div>
                    <div class="info">
                        <div class="info-h"><?=ContentWidget::widget(['id' => 'pbv-steps-2-h']);?></div>
                        <div class="info-text"><?=ContentWidget::widget(['id' => 'pbv-steps-2-text', 'htmlEditor' => true]);?></div>
                    </div>
                </div>
                <div class="pbv-step-item col-12 col-lg-4">
                    <div class="image"><img src="/img/PBV/steps/3.png" /></div>
                    <div class="info">
                        <div class="info-h"><?=ContentWidget::widget(['id' => 'pbv-steps-3-h']);?></div>
                        <div class="info-text"><?=ContentWidget::widget(['id' => 'pbv-steps-3-text', 'htmlEditor' => true]);?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="pbv_block_6" class="content-block pbv-news">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="stroke"><?=ContentWidget::widget(['id' => 'pbv-news-h']);?></div>
            <div class="h1 text-align-left"><?=ContentWidget::widget(['id' => 'pbv-news-h']);?></div>
            <div class="pbv-news-list d-flex">
                <? foreach (\app\models\News::find()->where(['id_category' => 5])->orderBy(['date' => SORT_DESC])->all() as $k => $item) : ?>
                    <div class="pbv-news-item">
                        <div class="pbv-news-content">
                            <div class="image">
                                <? if ($item->getUploadUrl('image')) : ?>
                                    <a href="#pbv-news-<?=$item->id;?>" data-fancybox="pbv-news-list"><img alt="" class="lazyload" data-src="<?=$item->getThumbUploadUrl('image', 'thumb');?>" /></a>
                                <? endif; ?>
                            </div>
                            <div class="date"><?=date('d.m.Y', $item->date);?></div>
                            <div class="title"><a href="#pbv-news-<?=$item->id;?>" data-fancybox="pbv-news-list-2"><?=$item->title;?></a></div>
                            <div class="anons"><?=$item->anons;?></div>

                        </div>
                    </div>
                <? endforeach; ?>
                <div class="pbv-news-item empty"></div>
            </div>
        </div>
    </div>
</div>
<? foreach (\app\models\News::find()->where(['id_category' => 5])->orderBy(['date' => SORT_DESC])->all() as $k => $item) : ?>
    <div id="pbv-news-<?=$item->id;?>" class="news-full" style="display: none;">
        <div class="text-block">
            <div class="date"><?=date('d.m.Y', $item->date);?></div>
            <div class="h1"><?=$item->title;?></div>
            <div class="text">
                <?=$item->content;?>
            </div>
        </div>
    </div>
<? endforeach; ?>


<?=$this->render('_footer_pbv');?>

