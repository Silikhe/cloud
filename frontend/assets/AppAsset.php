<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'theme/udema/css/blog.css',
        'theme/udema/css/bootstrap.min.css',
        'theme/udema/css/custom.css',
        'theme/udema/css/fullcalendar.css',
        'theme/udema/css/fullcalendar.print.css',
        'theme/udema/css/owl.video.play.png',
        'theme/udema/css/style.css',
        'theme/udema/css/fullcalendar.print.css',
        'theme/udema/css/tables.css',
        'theme/udema/css/style.css',
        'theme/udema/css/vendors.css',
        'theme/udema/css/wizard.css',
    ];


    public $js = [
        'theme/udema/js/jquery-3.6.0.min.js',
        'theme/udema/js/common_scripts.js',
        'theme/udema/js/main.js',
        // 'theme/udema/assets/validate.js',
        'theme/udema/js/greensock.js',
        'theme/udema/js/layerslider.transitions.js',
        'theme/udema/js/layerslider.kreaturamedia.jquery.js',
        'theme/udema/js/admission_func.js',
        'theme/udema/js/common_scripts.js',
        'theme/udema/js/fullcalendar_func.js',
        'theme/udema/js/fullcalendar.min.js',
        'theme/udema/js/jquery-3.5.1.min.js',
        'theme/udema/js/jquery-3.6.0.min.js',
        'theme/udema/js/jquery-ui-1.8.22.min.js',
        'theme/udema/js/jquery-ui.custom.min.js',
        'theme/udema/js/jquery-cookiesbar.js',
        'theme/udema/js/jquery.flexslider.js',
        'theme/udema/js/jquery.wizard.js',
        'theme/udema/js/main_admission.js',
        'theme/udema/js/main-demo.js',
        'theme/udema/js/main.js',
        'theme/udema/js/mapmaker_func.jquery.js',
        'theme/udema/js/mapmaker.jquery.js',
        'theme/udema/js/modernizr_slider.js',
        'theme/udema/js/modernizr.js',
        'theme/udema/js/moment.min.js',
        'theme/udema/js/pw_strenght.js',
        'theme/udema/js/tables_func.js',
        'theme/udema/js/video_header.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}
