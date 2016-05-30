<?php
namespace mgcode\wysiwyg\assets;

use yii\web\AssetBundle;

/**
 * @link https://github.com/mg-code/yii2-js-cookie
 * @author Maris Graudins <maris@mg-interactive.lv>
 */
class Bootstrap3WysiwygAsset extends AssetBundle
{
    public $sourcePath = '@mgcode/wysiwyg/assets/files';
    public $css = [
        'bootstrap3-wysihtml5.min.css'
    ];
    public $js = [
        'bootstrap3-wysihtml5.all.min.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}