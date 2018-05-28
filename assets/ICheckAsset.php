<?php
/**
 * Created by PhpStorm.
 * User: soap
 * Date: 09/05/2018
 * Time: 10:39
 */

namespace app\assets;

use yii\web\AssetBundle;

class ICheckAsset extends AssetBundle
{
    public $sourcePath = '@bower/iCheck';
    public $js = [
        'icheck.js',
    ];
    public $css = [
        'skins/all.css',
    ];

    /**
     * {@inheritdoc}
     */
    public $depends = [
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}