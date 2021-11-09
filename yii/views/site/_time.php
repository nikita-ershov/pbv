<?php
use app\widgets\ContentWidget;
?>
<div class="pbv-time lazyload" data-bg="/img/PBV/time-bg.jpg">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="pbv-time-content">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-5">
                        <div class="h"><?=ContentWidget::widget(['id' => 'pbv-time-h']);?></div>
                    </div>
                    <div class="col-12 col-lg-7">
                        <?=$this->render('_form_time', ['feedbackModel' => new \app\models\Feedback()]); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
