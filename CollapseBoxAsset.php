<?php
/**
 * Created by PhpStorm.
 * User: svfolder
 * Date: 11.11.14
 * Time: 0:50
 */

namespace svfolder\wgadminlte;

use yii\web\AssetBundle;

/**
 * Class CollapseBoxAsset
 *
 * @package svfolder\wgadminlte
 */
class CollapseBoxAsset extends AssetBundle
{
    /**
     * @var string
     */
    public $sourcePath = '@vendor/svfolder/yii2-adminlte-widgets/js';
    
    /**
     * @var array
     */
    public $js
        = [
            'collapsebox24.2.js',
        ];
    
    /**
     * @var array
     */
    public $depends
        = [
            'yii\web\YiiAsset',
            'svfolder\wgadminlte\JsCookieAsset',
        ];
}

