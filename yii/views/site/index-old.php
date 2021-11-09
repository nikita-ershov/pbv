<?php
use app\widgets\ContentWidget;
use yii\helpers\Html;


/* @var $this yii\web\View */

$this->title = 'Оборот';
?>
<div class="shadow"></div>
<div class="mobile__menu">
    <div class="mobile__menu__close"><a href="#">&times;</a></div>
    <ul>
        <li><a href="#section-description"><?=ContentWidget::widget(['id' => 'menu_1']);?></a></li><!--
        --><li><a href="#section-advantages"><?=ContentWidget::widget(['id' => 'menu_2']);?></a></li><!--
        --><li><a href="#section-specification"><?=ContentWidget::widget(['id' => 'menu_3']);?></a></li><!--
        --><li><a href="#section-delivery"><?=ContentWidget::widget(['id' => 'menu_4']);?></a></li><!--
        --><li><a href="#section-reviews"><?=ContentWidget::widget(['id' => 'menu_5']);?></a></li><!--
        --><li><a href="#section-gallery"><?=ContentWidget::widget(['id' => 'menu_6']);?></a></li><!--
        --><li><a href="#section-contacts"><?=ContentWidget::widget(['id' => 'menu_7']);?></a></li>
    </ul>
</div>
<div class="header" id="section-description">
    <div class="header__menu">
        <div class="wrap">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-9 col-sm-5 col-md-3 col-lg-4">
                        <div class="header__logo"><a href="#section-description"><img src="img/logo.png" /></a></div>
                    </div>
                    <div class="col-xs-3 col-sm-7 col-md-9 col-lg-8">
                        <img class="icon-menu visible-sm visible-xs" src="img/icon-menu.png" />
                        <ul>
                            <li><a href="#section-description"><?=ContentWidget::widget(['id' => 'menu_1']);?></a></li><!--
                            --><li><a href="#section-advantages"><?=ContentWidget::widget(['id' => 'menu_2']);?></a></li><!--
                            --><li><a href="#section-specification"><?=ContentWidget::widget(['id' => 'menu_3']);?></a></li><!--
                            --><li><a href="#section-delivery"><?=ContentWidget::widget(['id' => 'menu_4']);?></a></li><!--
                            --><li><a href="#section-reviews"><?=ContentWidget::widget(['id' => 'menu_5']);?></a></li><!--
                            --><li><a href="#section-gallery"><?=ContentWidget::widget(['id' => 'menu_6']);?></a></li><!--
                            --><li><a href="#section-contacts"><?=ContentWidget::widget(['id' => 'menu_7']);?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header__margin"></div>

    <div class="header__footer wow fadeInUp">
        <div class="wrap">
            <div class="container-fluid">
                <div class="col-xs-12 col-sm-6 col-md-4 header__info-left">
                    <table>
                        <tr>
                            <td class="header__info-left-1"><?=ContentWidget::widget(['id' => 'header_1']);?> <small><?=ContentWidget::widget(['id' => 'header_2']);?></small></td>
                            <td class="header__info-left-2"><?=ContentWidget::widget(['id' => 'header_3']);?></td>
                        </tr>
                    </table>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-8 header__info-right">
                    <?=ContentWidget::widget(['id' => 'header_4']);?>
                </div>
            </div>
        </div>
    </div>

    <div class="header__hook">
        <div class="wrap">
            <div class="container-fluid">
                <div><img src="img/hook.png" /></div>
            </div>
        </div>
    </div>
    <div class="header__slogan wow fadeInDown">
        <div class="header__slogan-1"><?=ContentWidget::widget(['id' => 'header_5']);?></div>
        <div class="header__slogan-2"><?=ContentWidget::widget(['id' => 'header_6']);?></div>
    </div>
</div>

<div class="block block__description">
    <div class="wrap">
        <div class="container-fluid">
            <div class="row wow fadeInUp">
                <div class="col-sm-4 col-md-4">
                    <div class="h">
                        <span>
                            <?=ContentWidget::widget(['id' => 'description_1']);?>
                        </span>
                    </div>
                </div>
                <div class="col-sm-8 col-md-4">
                    <div class="text">
                        <?=ContentWidget::widget(['id' => 'description_2', 'htmlEditor' => true]);?>
                    </div>
                </div>
                <div class="col-sm-8 col-md-4">
                    <div class="text">
                        <?=ContentWidget::widget(['id' => 'description_3', 'htmlEditor' => true]);?>

                    </div>
                </div>
            </div>

            <div class="block__description-video wow fadeInUp">
                <div class="video-wrapper">
                    <?=ContentWidget::widget(['id' => 'description_4', 'showMarker' => true]);?>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="block block__advantages" id="section-advantages">
    <div class="wrap">
        <div class="container-fluid">
            <div class="h wow fadeInLeft">
                <span>
                    <?=ContentWidget::widget(['id' => 'advantage_1']);?>
                </span>
            </div>
            <div class="row">
                <div class="col-sm-8 col-sm-offset-4 col-md-8 col-md-offset-4">
                    <div class="block__advantages-text wow fadeInRight">
                        <?=ContentWidget::widget(['id' => 'advantage_2', 'htmlEditor' => true]);?>
                    </div>
                </div>
            </div>

            <div class="row block__advantages-list wow fadeInUpBig">
                <div class="col-xs-12 col-sm-6 col-md-3 block__advantages-list__item first">
                    <div class="list-image">
                        <img src="img/icon-safety.png" />
                    </div>
                    <div class="list-h"><?=ContentWidget::widget(['id' => 'advantage_3']);?></div>
                    <div class="list-text-full">
                        <div class="list-text-full-content">
                            <?=ContentWidget::widget(['id' => 'advantage_4', 'htmlEditor' => true]);?>
                        </div>
                    </div>
                    <div class="list-text">
                        <?=ContentWidget::widget(['id' => 'advantage_5', 'htmlEditor' => true]);?>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 block__advantages-list__item">
                    <div class="list-image">
                        <img src="img/icon-precision.png" />
                    </div>
                    <div class="list-h"><?=ContentWidget::widget(['id' => 'advantage_6']);?></div>
                    <div class="list-text-full">
                        <div class="list-text-full-content">
                            <?=ContentWidget::widget(['id' => 'advantage_7', 'htmlEditor' => true]);?>
                        </div>
                    </div>
                    <div class="list-text">
                        <?=ContentWidget::widget(['id' => 'advantage_8', 'htmlEditor' => true]);?>
                    </div>

                </div>

                <div class="visible-sm clearfix"></div>

                <div class="col-xs-12 col-sm-6 col-md-3 block__advantages-list__item">
                    <div class="list-image">
                        <img src="img/icon-smooth.png" />
                    </div>
                    <div class="list-h"><?=ContentWidget::widget(['id' => 'advantage_9']);?></div>
                    <div class="list-text-full">
                        <div class="list-text-full-content">
                            <?=ContentWidget::widget(['id' => 'advantage_10', 'htmlEditor' => true]);?>
                        </div>
                    </div>
                    <div class="list-text">
                        <?=ContentWidget::widget(['id' => 'advantage_11', 'htmlEditor' => true]);?>
                    </div>

                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 block__advantages-list__item">
                    <div class="list-image">
                        <img src="img/icon-easy.png" />
                    </div>
                    <div class="list-h"><?=ContentWidget::widget(['id' => 'advantage_12']);?></div>
                    <div class="list-text-full">
                        <div class="list-text-full-content">
                            <?=ContentWidget::widget(['id' => 'advantage_13', 'htmlEditor' => true]);?>
                        </div>
                    </div>
                    <div class="list-text">
                        <?=ContentWidget::widget(['id' => 'advantage_14', 'htmlEditor' => true]);?>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="block block__specification">
    <div class="wrap">
        <div class="container-fluid">
            <div class="h wow fadeInLeft">
                <?=ContentWidget::widget(['id' => 'specification_1']);?>
            </div>
            <div class="col-xs-12 col-sm-5 col-md-4 wow fadeInLeft">
                <div class="h3">
                    <?=ContentWidget::widget(['id' => 'specification_2']);?>
                </div>
                <div class="block__specification-list">
                    <?=ContentWidget::widget(['id' => 'specification_3', 'htmlEditor' => true]);?>
                </div>

                <div class="block__specification-download">
                    <?=ContentWidget::widget(['id' => 'specification_4', 'htmlEditor' => true]);?>
                </div>

                <div class="block__specification-bottom"></div>

            </div>
            <div class="col-xs-12 col-sm-7 col-md-8 wow fadeInRight">
                <div class="h3 visible-sm"></div>
                <img src="img/specification.jpg" />
                <div class="h3 visible-xs"></div>
            </div>
        </div>
    </div>
</div>

<div class="block block__quality">
    <div class="wrap">
        <div class="container-fluid wow fadeInDown">
            <div class="h"><div class="h-content"><?=ContentWidget::widget(['id' => 'quality_1']);?></div></div>
        </div>
        <div class="block__quality-list wow fadeInLeft">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <div class="text">
                            <?=ContentWidget::widget(['id' => 'quality_2', 'htmlEditor' => true]);?>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="text">
                            <?=ContentWidget::widget(['id' => 'quality_3', 'htmlEditor' => true]);?>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="text">
                            <?=ContentWidget::widget(['id' => 'quality_4', 'htmlEditor' => true]);?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="gallery__header wow fadeInDown" id="section-gallery"><?=ContentWidget::widget(['id' => 'gallery_1']);?></div>
        <div class="gallery  wow fadeInUp">
            <? foreach(\app\models\Gallery::findOne(1)->getBehavior('galleryBehavior')->getImages() as $image) : ?>
                <?
                $caption = '';
                if (!empty($image->name)) {
                    $caption .= '<div><strong>' . htmlspecialchars($image->name) . '</strong></div>';
                }
                if (!empty($image->description)) {
                    $caption .= '<div>' . htmlspecialchars($image->description) . '</div>';
                }
                ?>
                <div class="gallery__item"><a href="<?=$image->getUrl('large')?>" target="_blank" data-fancybox="gallery" data-caption="<?=$caption;?>"><img src="<?=$image->getUrl('list');?>" /></a></div>
            <? endforeach; ?>
        </div>

    </div>
</div>

<div class="block block__technical" id="section-specification">
    <div class="wrap">
        <div class="container-fluid">
            <div class="h wow fadeInLeft"><div class="h-content"><?=ContentWidget::widget(['id' => 'technical_1']);?></div></div>
            <div class="row">
                <div class="col-xs-12 col-sm-7 col-md-5 wow fadeInLeft">
                    <div class="block__technical-table">
                        <?=ContentWidget::widget(['id' => 'technical_2', 'htmlEditor' => true]);?>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-5 col-md-7 wow fadeInRight">
                    <div class="h3"><?=ContentWidget::widget(['id' => 'technical_3']);?></div>

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12 col-md-4">
                                <div class="h6"><?=ContentWidget::widget(['id' => 'technical_4']);?></div>

                                <div class="block__technical-function">
                                    <div class="function-h1"><?=ContentWidget::widget(['id' => 'technical_5']);?></div>
                                    <div class="function-h2"><?=ContentWidget::widget(['id' => 'technical_6']);?></div>
                                    <p><?=ContentWidget::widget(['id' => 'technical_7']);?></p>
                                </div>
                                <div class="block__technical-function">
                                    <div class="function-h1"><?=ContentWidget::widget(['id' => 'technical_8']);?></div>
                                    <div class="function-h2"><?=ContentWidget::widget(['id' => 'technical_9']);?></div>
                                    <p><?=ContentWidget::widget(['id' => 'technical_10']);?></p>
                                </div>
                                <div class="h5"></div>
                            </div>
                            <div class="col-sm-12 col-md-7 col-md-offset-1">
                                <?=ContentWidget::widget(['id' => 'technical_11', 'htmlEditor' => true]);?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="block__technical-download text">
                                    <p><a class="block__technical-download__link" data-fancybox data-src="#download" href="javascript:;"><strong><?=ContentWidget::widget(['id' => 'technical_12']);?></strong></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="download" style="display: none;">
    <div class="text">
        <h3><?=ContentWidget::widget(['id' => 'technical_13']);?></h3>
        <?=ContentWidget::widget(['id' => 'technical_14', 'htmlEditor' => true]);?>
        <ul>
            <? foreach (\app\models\Files::find()->orderBy(['sortOrder' => SORT_ASC])->all() as $item) : ?>
                <li>
                    <div>
                        <?=Html::a($item->title, $item->getUploadUrl('file'), ['target' => '_blank']);?>

                        <? if ($item->getFileSize()) : ?>
                            <small>(<?=$item->getFileSize();?>)</small>
                        <? endif; ?>
                    </div>
                    <? if (!empty($item->description)) : ?>
                        <div><small><?=$item->description;?></small></div>
                    <? endif; ?>
                </li>
            <? endforeach; ?>
        </ul>
    </div>
</div>

<div class="block block__delivery">
    <div class="wrap wow fadeIn" id="section-delivery">
        <div class="container-fluid">
            <div class="h"><?=ContentWidget::widget(['id' => 'delivery_1']);?></div>
            <div class="text">
                <?=ContentWidget::widget(['id' => 'delivery_2', 'htmlEditor' => true]);?>
            </div>

        </div>
    </div>

    <div class="subscribe wow fadeInLeft">
        <div class="wrap">
            <div class="container-fluid">
                <?=$this->render('_form_commerce', [
                    'commerceModel' => $commerceModel
                ]);?>
            </div>
        </div>
    </div>
</div>

<div class="block block__reviews" id="section-reviews">
    <div class="wrap">
        <div class="moon"></div>
        <div class="container-fluid">
            <div class="h"><div class="h-content"><?=ContentWidget::widget(['id' => 'reviews_1']);?></div></div>
            <div class="block__reviews-slider">

                <? foreach (\app\models\News::find()->orderBy(['date' => SORT_DESC])->all() as $item) : ?>
                    <div class="block__reviews-slider__item" data-fancybox data-type="ajax" data-src="<?=\yii\helpers\Url::to(['site/news', 'id' => $item->id])?>">
                        <div class="logo">
                            <? if ($item->getThumbUploadUrl('image', 'news_thumb')) : ?>
                                <?= Html::img($item->getThumbUploadUrl('image', 'news_thumb')) ?>
                            <? endif; ?>
                        </div>
                        <div class="review">
                            <p><em><?=date('d.m.Y', $item->date);?></em></p>
                            <p><strong><?=$item->title;?></strong></p>
                            <?=$item->anons;?>
                        </div>
                    </div>
                <? endforeach; ?>
            </div>
        </div>
    </div>
</div>

<div class="block block__contacts" id="section-contacts">
    <div class="wrap">
        <div class="container-fluid">
            <div class="h"><div class="h-content"><?=ContentWidget::widget(['id' => 'contacts_1']);?></div></div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-4">
                    <?=ContentWidget::widget(['id' => 'contacts_2', 'htmlEditor' => true]);?>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-8">
                    <div class="h3">
                        <?=ContentWidget::widget(['id' => 'contacts_3', 'htmlEditor' => true]);?>
                    </div>
                    <?=ContentWidget::widget(['id' => 'contacts_4', 'htmlEditor' => true]);?>
                </div>
            </div>
            <div class="row line">
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <?=ContentWidget::widget(['id' => 'contacts_5', 'htmlEditor' => true]);?>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <?=ContentWidget::widget(['id' => 'contacts_6', 'htmlEditor' => true]);?>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <?=ContentWidget::widget(['id' => 'contacts_7', 'htmlEditor' => true]);?>
                </div>
            </div>
        </div>
    </div>
    <div class="map">
        <?=ContentWidget::widget(['id' => 'map_1']);?>
    </div>

    <div class="block__contacts-form">
        <div class="wrap">
            <div class="container-fluid">
                <?=$this->render('_form_feedback', [
                    'feedbackModel' => $feedbackModel
                ]);?>
            </div>
        </div>
    </div>
</div>

<div class="footer">
    <div class="wrap">
        <div class="container-fluid">
            <?=ContentWidget::widget(['id' => 'footer_1']);?>
        </div>
    </div>
</div>