<?php
/**
 * Created by PhpStorm.
 * User: svfolder
 * Date: 11.11.14
 * Time: 3:45
 */

namespace svfolder\wgadminlte;

use yii\base\BaseObject;

/**
 * You can extend this object with any other property, getters and setters
 **/
class TimelineItem extends BaseObject
{
    public $time = '';

    public $showClockIcon = true;
    
    public $header = '';
    
    public $body = '';
    
    public $footer = '';
    
    public $iconClass = '';
    
    public $iconBg = '';

    public $bodyOptions = [];
    
}