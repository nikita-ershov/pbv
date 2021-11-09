<?php
use app\widgets\ContentWidget;
use yii\helpers\Html;


/* @var $this yii\web\View */

$this->title = 'Группа Компаний "Альфамонолит"';
?>
<?=$this->render('_header');?>

<div class="content-block">
    <div id="links" class="links-list d-flex flex-column flex-lg-row align-items-center">
        <div class="links-list-item">
            <img class="lazyload" data-src="/img/link-bg-1.jpg" width="665" height="700" />
            <div class="links-list-item-info">
                <div class="h-sub"><?=ContentWidget::widget(['id' => 'link_1_sub']);?></div>
                <div class="h"><?=ContentWidget::widget(['id' => 'link_1_h']);?></div>
                <div class="text">
                    <?=ContentWidget::widget(['id' => 'link_1_text', 'htmlEditor' => true]);?>
                </div>
            </div>
        </div>
        <div class="links-list-item">
            <img class="lazyload" data-src="/img/link-bg-2.jpg" width="665" height="700" />
            <div class="links-list-item-info">
                <div class="h-sub"><?=ContentWidget::widget(['id' => 'link_2_sub']);?></div>
                <div class="h"><?=ContentWidget::widget(['id' => 'link_2_h']);?></div>
                <div class="text">
                    <?=ContentWidget::widget(['id' => 'link_2_text', 'htmlEditor' => true]);?>
                </div>
            </div>
        </div>
        <div class="links-list-item">
            <img class="lazyload" data-src="/img/link-bg-3.jpg" width="665" height="700" />
            <div class="links-list-item-info">
                <div class="h-sub"><?=ContentWidget::widget(['id' => 'link_3_sub']);?></div>
                <div class="h"><?=ContentWidget::widget(['id' => 'link_3_h']);?></div>
                <div class="text">
                    <?=ContentWidget::widget(['id' => 'link_3_text', 'htmlEditor' => true]);?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="content-block" id="fabrics">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="h1"><?=ContentWidget::widget(['id' => 'Точки присутствия компании Альфамонолит']);?></div>
            <div class="fabrics-list d-flex flex-wrap flex-lg-nowrap justify-content-center">
                <div class="fabrics-list-item fabrics-list-item-1">
                    <div class="h"><?=ContentWidget::widget(['id' => 'fabrics-list-item-1-h']);?></div>
                    <div class="text"><?=ContentWidget::widget(['id' => 'fabrics-list-item-1-text']);?></div>
                </div>
                <div class="fabrics-list-item fabrics-list-item-2">
                    <div class="h"><?=ContentWidget::widget(['id' => 'fabrics-list-item-2-h']);?></div>
                    <div class="text"><?=ContentWidget::widget(['id' => 'fabrics-list-item-2-text']);?></div>
                </div>
                <div class="fabrics-list-item fabrics-list-item-3">
                    <div class="h"><?=ContentWidget::widget(['id' => 'fabrics-list-item-3-h']);?></div>
                    <div class="text"><?=ContentWidget::widget(['id' => 'fabrics-list-item-3-text']);?></div>
                </div>
            </div>
        </div>
    </div>
    <div class="fabrics-map">
        <img width="2000" height="650" class="lazyload" data-src="/img/map.jpg" usemap="#fabrics-map" />
        <map name="fabrics-map" id="fabrics-map-id">
            <area target="" alt="" data-item=".fabrics-list-item-2" data-title="Завод по производству ПБВ" href="#PBV" coords="801,193,35" shape="circle">
            <area target="" alt="" data-item=".fabrics-list-item-1" data-title="Центральный офис" href="#office" coords="778,246,24" shape="circle">
            <area target="" alt="" data-item=".fabrics-list-item-3" data-title="Асфальтобетонный завод" href="#kurgan" coords="1185,461,54" shape="circle">
        </map>
        <div class="fabrics-map-info"></div>
    </div>
</div>

<div class="content-block" id="about">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="about d-flex flex-wrap flex-lg-nowrap">
                <div class="about-item about-item-left">
                    <div class="h1"><?=ContentWidget::widget(['id' => 'about-h1']);?></div>
                    <div class="text-block">
                        <?=ContentWidget::widget(['id' => 'about-text-1', 'htmlEditor' => true]);?>
                    </div>
                </div>
                <div class="about-item about-item-center">
                    <div class="about-item-slider">
                        <? foreach (\app\models\News::find()->where(['id_category' => 1])->orderBy(['sortOrder' => SORT_ASC])->all() as $k => $item) : ?>
                            <? if ($item->getUploadUrl('image')) : ?>
                                <div class="image lazyload" data-bg="<?=$item->getUploadUrl('image');?>" ></div>
                            <? endif; ?>
                        <? endforeach; ?>
                    </div>
                </div>
                <div class="about-item about-item-right">
                    <div class="text-block">
                        <?=ContentWidget::widget(['id' => 'about-text-2', 'htmlEditor' => true]);?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="content-block letters lazyload" id="letters" data-bg="/img/letters-bg.jpg">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="h1"><?=ContentWidget::widget(['id' => 'letters-h']);?></div>
        </div>
    </div>
    <div class="letters-slider">
        <? foreach (\app\models\News::find()->where(['id_category' => 2])->orderBy(['sortOrder' => SORT_ASC])->all() as $k => $item) : ?>
            <? if ($item->getUploadUrl('image')) : ?>
                <a href="<?=$item->getUploadUrl('image');?>" data-fancybox="letters-list"><img alt="" class="lazyload" data-src="<?=$item->getUploadUrl('image');?>" /></a>
            <? endif; ?>
        <? endforeach; ?>
    </div>
</div>

<div id="news" class="content-block news">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="d-flex flex-wrap flex-lg-nowrap">
                <div class="news-left">
                    <div class="h1"><?=ContentWidget::widget(['id' => 'news-h']);?></div>
                    <div class="text-block"><?=ContentWidget::widget(['id' => 'news-text']);?></div>
                </div>
                <div class="news-right">
                    <div class="news-slider-container">
                        <div class="news-slider">
                            <div class="news-slider-item lazyload" data-bg="/img/news1.jpg">
                                <a href="#news1" data-fancybox="">
                                    <div class="date">10 ноября, 2020</div>
                                    <div class="title">Уральская ТПП приняла новых членов</div>
                                </a>
                            </div>
                            <div class="news-slider-item lazyload" data-bg="/img/news2.jpg">
                                <a href="#news2" data-fancybox="">
                                    <div class="date">7 ноября, 2020</div>
                                    <div class="title">Запуск производства ПБВ и зимняя "затарка" битума</div>
                                </a>
                            </div>
                            <div class="news-slider-item lazyload" data-bg="/img/news3.jpg">
                                <a href="#news3" data-fancybox="">
                                    <div class="date">1 ноября, 2020</div>
                                    <div class="title">«Роснефть» готова передать часть скважин малому и среднему...</div>
                                </a>
                            </div>
                            <div class="news-slider-item lazyload" data-bg="/img/news1.jpg">
                                <a href="#news2" data-fancybox="">
                                    <div class="date">23 октября, 2020</div>
                                    <div class="title">Установка мини АЗС для компании в Ханты-Мансийском...</div>
                                </a>
                            </div>
                            <div class="news-slider-item lazyload" data-bg="/img/news3.jpg">
                                <a href="#news3" data-fancybox="">
                                    <div class="date">14 октября, 2020</div>
                                    <div class="title">Уральская ТПП приняла новых членов</div>
                                </a>
                            </div>
                            <div class="news-slider-item lazyload" data-bg="/img/news2.jpg">
                                <a href="#news1" data-fancybox="">
                                    <div class="date">3 октября, 2020</div>
                                    <div class="title">Запуск производства ПБВ и зимняя "затарка" битума</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="news1" class="news-full" style="display: none;">
    <div class="text-block">
        <div class="date">10 ноября, 2020</div>
        <div class="h1">Уральская ТПП приняла новых членов</div>
        <div class="text">
            <p>Противоположная точка зрения подразумевает, что независимые государства являются только методом политического участия и описаны максимально подробно. Но постоянное информационно-пропагандистское обеспечение нашей деятельности предопределяет высокую востребованность инновационных методов управления процессами. Принимая во внимание показатели успешности, базовый вектор развития представляет собой интересный эксперимент проверки системы массового участия. Задача организации, в особенности же сплочённость команды профессионалов требует определения и уточнения форм воздействия! Как принято считать, акционеры крупнейших компаний, которые представляют собой яркий пример континентально-европейского типа политической культуры, будут функционально разнесены на независимые элементы. Равным образом, выбранный нами инновационный путь не даёт нам иного выбора, кроме определения соответствующих условий активизации.</p>
            <p>Принимая во внимание показатели успешности, высококачественный прототип будущего проекта предполагает независимые способы реализации существующих финансовых и административных условий. Лишь предприниматели в сети интернет представлены в исключительно положительном свете.</p>
            <p>Значимость этих проблем настолько очевидна, что реализация намеченных плановых заданий обеспечивает актуальность соответствующих условий активизации! Имеется спорная точка зрения, гласящая примерно следующее: сторонники тоталитаризма в науке, инициированные исключительно синтетически, смешаны с не уникальными данными до степени совершенной неузнаваемости, из-за чего возрастает их статус бесполезности.</p>
        </div>
    </div>
</div>
<div id="news2" class="news-full" style="display: none;">
    <div class="text-block">
        <div class="date">7 ноября, 2020</div>
        <div class="h1">Запуск производства ПБВ и зимняя "затарка" битума</div>
        <div class="text">
            <p>Принимая во внимание показатели успешности, высококачественный прототип будущего проекта предполагает независимые способы реализации существующих финансовых и административных условий. Лишь предприниматели в сети интернет представлены в исключительно положительном свете.</p>
            <p>Значимость этих проблем настолько очевидна, что реализация намеченных плановых заданий обеспечивает актуальность соответствующих условий активизации! Имеется спорная точка зрения, гласящая примерно следующее: сторонники тоталитаризма в науке, инициированные исключительно синтетически, смешаны с не уникальными данными до степени совершенной неузнаваемости, из-за чего возрастает их статус бесполезности.</p>
            <p>Противоположная точка зрения подразумевает, что независимые государства являются только методом политического участия и описаны максимально подробно. Но постоянное информационно-пропагандистское обеспечение нашей деятельности предопределяет высокую востребованность инновационных методов управления процессами. Принимая во внимание показатели успешности, базовый вектор развития представляет собой интересный эксперимент проверки системы массового участия. Задача организации, в особенности же сплочённость команды профессионалов требует определения и уточнения форм воздействия! Как принято считать, акционеры крупнейших компаний, которые представляют собой яркий пример континентально-европейского типа политической культуры, будут функционально разнесены на независимые элементы. Равным образом, выбранный нами инновационный путь не даёт нам иного выбора, кроме определения соответствующих условий активизации.</p>
        </div>
    </div>
</div>
<div id="news3" class="news-full" style="display: none;">
    <div class="text-block">
        <div class="date">3 ноября, 2020</div>
        <div class="h1">«Роснефть» готова передать часть скважин малому и среднему бизнесу</div>
        <div class="text">
            <p>Значимость этих проблем настолько очевидна, что реализация намеченных плановых заданий обеспечивает актуальность соответствующих условий активизации! Имеется спорная точка зрения, гласящая примерно следующее: сторонники тоталитаризма в науке, инициированные исключительно синтетически, смешаны с не уникальными данными до степени совершенной неузнаваемости, из-за чего возрастает их статус бесполезности.</p>
            <p>Принимая во внимание показатели успешности, высококачественный прототип будущего проекта предполагает независимые способы реализации существующих финансовых и административных условий. Лишь предприниматели в сети интернет представлены в исключительно положительном свете.</p>
        </div>
    </div>
</div>

<?=$this->render('_footer');?>

