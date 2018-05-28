<?php
/**
 * Created by PhpStorm.
 * User: soap
 * Date: 09/05/2018
 * Time: 10:05
 */

namespace app\assets;

use yii\web\AssetBundle;

class FlotAsset extends AssetBundle
{
    public $sourcePath = '@bower/Flot';
    public $js = [
        'jquery.flot.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}