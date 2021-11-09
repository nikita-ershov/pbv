<?php
use app\widgets\ContentWidget;
use yii\helpers\Html;


/* @var $this yii\web\View */

$this->title = 'Уральская дорожная компания';
?>
<?=$this->render('_header_udk');?>

<div class="wrapper">
    <div class="container-fluid">
        <div class="header-banner">
            <div class="header-banner-text"><p><?=ContentWidget::widget(['id' => 'udk-header-banner-text']);?></p></div>
        </div>
    </div>
</div>

<div id="udk_block_1" class="content-block">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="udk-kind d-block d-lg-flex justify-content-center justify-content-lg-between">
                <div class="udk-kind-item left lazyload" data-bg="/img/UDK/icon-tractor.png">
                    <div class="h-sub"><?=ContentWidget::widget(['id' => 'udk-kind-1-sub']);?></div>
                    <div class="title"><?=ContentWidget::widget(['id' => 'udk-kind-1-title']);?></div>
                    <div class="text"><?=ContentWidget::widget(['id' => 'udk-kind-1-text']);?></div>
                </div>
                <div class="udk-kind-item lazyload" data-bg="/img/UDK/icon-factory.png">
                    <div class="h-sub"><?=ContentWidget::widget(['id' => 'udk-kind-2-sub']);?></div>
                    <div class="title"><?=ContentWidget::widget(['id' => 'udk-kind-2-title']);?></div>
                    <div class="text"><?=ContentWidget::widget(['id' => 'udk-kind-2-text']);?></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="udk_block_2" class="content-block last">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="udk-utp row">
                <div class="udk-utp-header col-12 col-lg-4 col-xl-4">
                    <div class="h1"><?=ContentWidget::widget(['id' => 'udk-utp-h']);?></div>
                    <div class="text"><?=ContentWidget::widget(['id' => 'udk-utp-text']);?></div>
                </div>
                <div class="col-12 col-lg">
                    <div class="udk-utp-list row">
                        <div class="udk-utp-list-item col-12 col-sm-6 col-lg-4">
                            <div class="image"><img src="/img/UDK/utp/1.png" /></div>
                            <div class="title"><?=ContentWidget::widget(['id' => 'udk-utp-1-title']);?></div>
                            <div class="text"><?=ContentWidget::widget(['id' => 'udk-utp-1-text']);?></div>
                        </div>
                        <div class="udk-utp-list-item col-12 col-sm-6 col-lg-4">
                            <div class="image"><img src="/img/UDK/utp/2.png" /></div>
                            <div class="title"><?=ContentWidget::widget(['id' => 'udk-utp-2-title']);?></div>
                            <div class="text"><?=ContentWidget::widget(['id' => 'udk-utp-2-text']);?></div>
                        </div>
                        <div class="udk-utp-list-item col-12 col-sm-6 col-lg-4">
                            <div class="image"><img src="/img/UDK/utp/3.png" /></div>
                            <div class="title"><?=ContentWidget::widget(['id' => 'udk-utp-3-title']);?></div>
                            <div class="text"><?=ContentWidget::widget(['id' => 'udk-utp-3-text']);?></div>
                        </div>
                        <div class="udk-utp-list-item col-12 col-sm-6 col-lg-4">
                            <div class="image"><img src="/img/UDK/utp/4.png" /></div>
                            <div class="title"><?=ContentWidget::widget(['id' => 'udk-utp-4-title']);?></div>
                            <div class="text"><?=ContentWidget::widget(['id' => 'udk-utp-4-text']);?></div>
                        </div>
                        <div class="udk-utp-list-item col-12 col-sm-6 col-lg-4">
                            <div class="image"><img src="/img/UDK/utp/5.png" /></div>
                            <div class="title"><?=ContentWidget::widget(['id' => 'udk-utp-5-title']);?></div>
                            <div class="text"><?=ContentWidget::widget(['id' => 'udk-utp-5-text']);?></div>
                        </div>
                        <div class="udk-utp-list-item col-12 col-sm-6 col-lg-4">
                            <div class="image"><img src="/img/UDK/utp/6.png" /></div>
                            <div class="title"><?=ContentWidget::widget(['id' => 'udk-utp-6-title']);?></div>
                            <div class="text"><?=ContentWidget::widget(['id' => 'udk-utp-6-text']);?></div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="udk_block_3" class="content-block udk-map" data-bg="">
    <div class="udk-map-content">
        <div class="wrapper">
            <div class="container-fluid">
                <div class="h1"><?=ContentWidget::widget(['id' => 'udk-map-h-1']);?></div>
                <div class="h2"><?=ContentWidget::widget(['id' => 'udk-map-h-2']);?></div>

                <div class="udk-map-list">
                    <ul>
                        <li data-image="/img/UDK/map-kurgan.jpg">Курганская область</li>
                        <li data-image="/img/UDK/map-sv.jpg">Свердловская область</li>
                        <li data-image="/img/UDK/map-tyumen.jpg">Тюменская область</li>
                        <li data-image="/img/UDK/map-hmao.jpg?v1">Ханты-Мансийский автономный округ</li>
                        <li data-image="/img/UDK/map-chel.jpg">Челябинская область</li>
                        <li data-image="/img/UDK/map-yamao.jpg">Ямало-Ненецкий автономный округ</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="udk-map-image"><img alt="" class="lazyload" width="1822" height="1280" data-src="/img/UDK/map.jpg?v1" /></div>
</div>

<div id="udk_block_4" class="udk-gallery content-block">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="h1"><?=ContentWidget::widget(['id' => 'udk-gallery-h1']);?></div>
        </div>
    </div>
    <div class="udk-gallery-list">
        <? foreach(\app\models\Gallery::findOne(1)->getBehavior('galleryBehavior')->getImages() as $k => $image) : ?>
            <div class="udk-gallery-item">
                <img src="<?=$image->getUrl('photo');?>" />
                <a href="<?=$image->getUrl('large')?>" target="_blank" data-fancybox="udk-gallery-items" data-caption="<?=$image->name;?>">
                    <div class="icon1"><img src="/img/UDK/icon-gallery.png" width="41" height="41" /></div>
                    <div class="icon2"><img src="/img/UDK/icon-line-gray.png" /></div>
                    <div class="title"><?=$image->name;?></div>
                </a>
            </div>
        <? endforeach; ?>
    </div>
</div>

<div class="udk-about lazyload" data-bg="/img/UDK/about-bg.jpg">
    <div id="udk_block_6" class="content-block udk-about-block">
        <div class="wrapper">
            <div class="container-fluid">
                <div class="row no-gutters">
                    <div class="order-1 order-md-0 col-12 col-md-4 col-lg-6">
                        <img width="575" height="600" class="lazyload" data-src="/img/UDK/about-image.jpg" />
                    </div>
                    <div class="order-0 order-md-1 col-12 col-md-8 col-lg-6">
                        <div class="udk-about-text">
                            <div class="h-sub"><?=ContentWidget::widget(['id' => 'udk-about-h-sub']);?></div>
                            <div class="h"><?=ContentWidget::widget(['id' => 'udk-about-h']);?></div>
                            <div class="text-block"><?=ContentWidget::widget(['id' => 'udk-about-text', 'htmlEditor' => true]);?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content-block udk-letters" id="udk_block_5" data-bg="/img/letters-bg.jpg">
        <div class="wrapper">
            <div class="container-fluid">
                <!--div class="h1"><?=ContentWidget::widget(['id' => 'udk-letters-h']);?></div-->
            </div>
        </div>
        <div class="udk-letters-slider">
            <? foreach(\app\models\Gallery::findOne(2)->getBehavior('galleryBehavior')->getImages() as $k => $image) : ?>
                <div class="udk-letters-item">
                    <img src="<?=$image->getUrl('letter');?>" />
                    <a href="<?=$image->getUrl('large')?>" target="_blank" data-fancybox="udk-letters-items" data-caption="<?=$image->name;?>">
                        <div class="icon1"><img src="/img/UDK/icon-line-dark-blue.png" /></div>
                        <div class="title"><?=$image->name;?></div>
                    </a>
                </div>
            <? endforeach; ?>
        </div>
    </div>

</div>

<div id="udk_block_7" class="content-block udk-news">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="h1"><?=ContentWidget::widget(['id' => 'udk-news-h']);?></div>
            <div class="udk-news-list d-flex justify-content-between flex-wrap">
                <? foreach (\app\models\News::find()->where(['id_category' => 4])->orderBy(['date' => SORT_DESC])->all() as $k => $item) : ?>
                <div class="udk-news-item">
                    <div class="image">
                        <? if ($item->getUploadUrl('image')) : ?>
                            <a href="#udk-news-<?=$item->id;?>" data-fancybox="udk-news-list"><img alt="" class="lazyload" data-src="<?=$item->getThumbUploadUrl('image', 'thumb');?>" /></a>
                        <? endif; ?>
                    </div>
                    <div class="date"><?=date('d.m.Y', $item->date);?></div>
                    <div class="title"><?=$item->title;?></div>
                    <div class="link"><a href="#udk-news-<?=$item->id;?>" data-fancybox="udk-news-list-2">Читать полностью</a> &rarr;</div>
                </div>
                <? endforeach; ?>
                <div class="udk-news-item empty"></div>
            </div>
        </div>
    </div>
</div>

<? foreach (\app\models\News::find()->where(['id_category' => 4])->orderBy(['date' => SORT_DESC])->all() as $k => $item) : ?>
    <div id="udk-news-<?=$item->id;?>" class="news-full" style="display: none;">
        <div class="text-block">
            <div class="date"><?=date('d.m.Y', $item->date);?></div>
            <div class="h1"><?=$item->title;?></div>
            <div class="text">
                <?=$item->content;?>
            </div>
        </div>
    </div>
<? endforeach; ?>

<?=$this->render('_footer_udk');?>

