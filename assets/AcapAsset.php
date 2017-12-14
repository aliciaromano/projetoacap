<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AcapAsset extends AssetBundle
{
    public $basePath = '@webroot/template';
    public $baseUrl = '@web/template';
    public $css = [
        'ACAP.css',
        'https://fonts.googleapis.com/css?family=Dosis:500,700|Sansita',
        'jquery.bxslider.css',
    ];
    public $js = [
        'https://code.jquery.com/jquery-3.1.1.min.js',
        'ACAP.js',
        'http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js',
        'jquery.bxslider.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
