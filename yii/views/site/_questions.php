<?php
use app\widgets\ContentWidget;

$this->registerCssFile("@web/css/pbv-questions.css", [
    'depends' => 'app\assets\AppAsset'
], 'udk-media');
?>
<div class="pbv-about">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="pbv-about-content">
                <div class="row">
                    <div class="col-12 col-lg-8 left d-flex">
                        <div class="image lazyload" data-bg="/img/PBV/about-image.jpg"></div>
                        <div class="left-content">
                            <div class="h-sub"><?=ContentWidget::widget(['id' => 'pbv-about-h-sub']);?></div>
                            <div class="h"><?=ContentWidget::widget(['id' => 'pbv-about-h']);?></div>
                            <div class="text-block"><?=ContentWidget::widget(['id' => 'pbv-about-text', 'htmlEditor' => true]);?></div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 right">
                        <div class="h-sub d-flex align-items-end"><img class="lazyload margin-right-10" data-src="/img/PBV/icon-flag.png" width="46" height="50" /><?=ContentWidget::widget(['id' => 'pbv-about-right-h-sub']);?></div>
                        <div class="text-block"><?=ContentWidget::widget(['id' => 'pbv-about-right-text', 'htmlEditor' => true]);?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="questions lazyload" data-bg="/img/PBV/questions-bg.jpg">
    <div class="questions-wrapper">
        <div class="wrapper">
            <div class="container-fluid">
                <div class="questions-content d-flex flex-wrap flex-lg-nowrap align-items-center justify-content-between">
                    <div class="questions-left">
                        <div class="stroke">Заявка</div>
                        <div class="h1 margin-bottom-10"><?=ContentWidget::widget(['id' => 'pbv-questions-h']);?></div>
                        <div class="h-sub"><?=ContentWidget::widget(['id' => 'pbv-questions-h-sub']);?></div>
                        <div class="questions-buttons d-flex flex-wrap align-items-center justify-content-between">
                            <div class="questions-phone">
                                <div class="questions-phone-link">
                                    <?=ContentWidget::widget(['id' => '+7 (343) 287-60-05', 'htmlEditor' => true]);?>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center flex-wrap">
                                <a href="#popupRecall" data-fancybox class="btn btn-transparent"><img class="margin-right-10" src="/img/PBV/icon-phone-btn.png"><?=ContentWidget::widget(['id' => 'pbv-questions-recall']);?></a>
                                <a href="#popupEmail" data-fancybox class="btn btn-transparent"><img class="margin-right-10" src="/img/PBV/icon-mail-btn.png"><?=ContentWidget::widget(['id' => 'pbv-questions-email']);?></a>
                            </div>
                        </div>

                    </div>
                    <div class="questions-form">
                        <div class="h"><?=ContentWidget::widget(['id' => 'pbv-questions-form-h']);?></div>
                        <div class="h-sub"><?=ContentWidget::widget(['id' => 'pbv-questions-form-h-sub']);?></div>
                        <?=$this->render('_form_order', ['feedbackModel' => new \app\models\Feedback()]); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>