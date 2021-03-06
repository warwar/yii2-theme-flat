<?php
/*
 * 2014-12-14
 * @author WarWar <warwar.dp@gmail.com>
 * http://shapebootstrap.net/item/flat-theme-free-responsive-multipurpose-site-template/
 */
namespace warwar\theme\flat;

use yii\web\AssetBundle;
class FlatAsset extends AssetBundle
{
    public $sourcePath='@vendor/warwar/yii2-theme-flat/assets';
    public $baseUrl = '@web';
    
    public $css=[
        'css/animate.css',
        'css/font-awesome.min.css',
        'css/main.css',
        'css/prettyPhoto.css',
    ];
    
    public $js=[
        'js/main.js',
        'js/html5shiv.js',
        'js/jquery.isotope.min.js',
        'js/jquery.prettyPhoto.js',
        'js/main.js',
        'js/respond.min.js',
    ];
    
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
    
    public function init() {
        parent::init();
    }
}
