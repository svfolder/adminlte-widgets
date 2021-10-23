<?php
/**
 * Created by PhpStorm.
 * User: svfolder
 * Date: 11.11.14
 * Time: 0:50
 */

namespace svfolder\wgadminlte;

use \yii\web\AssetBundle;

class JsCookieAsset extends AssetBundle
{
    public $sourcePath = '@vendor/svfolder/yii2-adminlte-widgets/js';
    
    public $js
        = [
            'js.cookie-2.1.0.min.js',
        ];
    
    public $depends
        = [
            'yii\web\YiiAsset',
        ];
}

