<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;
use yii\web\View;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,900;1,300;1,400;1,500;1,600;1,700;1,900&display=swap',
        'css/bootstrap-reboot.min.css',
        'css/bootstrap-grid.min.css',
        'css/styles.css',
        'css/media.css',
        'css/help.css',

        'css/admin.css',

        'css/animate.min.css',

        'js/slick/slick/slick.css',
        'css/slick-theme.css',

        'js/fancybox/dist/jquery.fancybox.min.css',
    ];
    public $js = [
        ['https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js', 'condition' => 'lt IE 9', 'position' => View::POS_HEAD],
        ['https://oss.maxcdn.com/respond/1.4.2/respond.min.js', 'condition' => 'lt IE 9', 'position' => View::POS_HEAD],
        'js/lazysizes.min.js',
        'js/slick/slick/slick.min.js',
        'js/jquery.sticky.js',
        'js/imask.js',
        'js/wow.min.js',

        'js/fancybox/dist/jquery.fancybox.min.js',

        'js/scripts.js',

        'js/admin.js',
        'js/js.cookie.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
