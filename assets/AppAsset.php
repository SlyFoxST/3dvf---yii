<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

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
        //'js/bootstrap/bootstrap-grid-3.3.1.min.css',
         'js/font-awesome-4.2.0/css/font-awesome.min.css',
         'js/superfish/dist/css/superfish.css',
         'js/magnific/magnific-popup.css',
         'js/owl-carousel/owl.carousel.css',
         'js/countdown/jquery.countdown.css',
        'css/animate.css',
         'css/fonts.css',
         'css/main.css',
         'css/media.css',
    ];
    public $js = [
    'js/jquery/jquery-1.11.1.min.js',
   'js/superfish/dist/js/superfish.min.js',
   'js/jquery-mousewheel/jquery.mousewheel.min.js',
   'js/magnific/jquery.magnific-popup.js',
    'js/animate-css.js',
    'js/wow.min.js',
    'js/numcount.js',
   'js/waypoints/waypoints-1.6.2.min.js',
    'js/scrollto/jquery.scrollTo.min.js',
    'js/owl-carousel/owl.carousel.min.js',
    'js/countdown/jquery.plugin.js',
    'js/countdown/jquery.countdown.min.js',
    'js/countdown/jquery.countdown-ru.js',
    'js/landing-nav/navigation.js',
    'js/jquery/jquery.form.min.js',
    'js/jquery/jquery.validate.js',
     'js/common.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',

    ];
}
