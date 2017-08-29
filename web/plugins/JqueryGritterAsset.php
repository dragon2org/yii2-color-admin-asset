<?php
/**
 * User: harlen-angkemac
 * Date: 2017/7/6 - 下午1:46
 *
 */

namespace pokerDragon\colorAdmin\web\plugins;

use yii\web\AssetBundle as BaseColorAdminAsset;
use Yii\web\View;

class JqueryGritterAsset extends BaseColorAdminAsset
{
    public $sourcePath = '@vendor/pokerdragon/color-admin/assets';

    public $css = [
        'plugins/gritter/css/jquery.gritter.css'
    ];
    public $js = [
        'plugins/gritter/js/jquery.gritter.js',
    ];

    public $depends = [
        'pokerDragon\colorAdmin\web\plugins\JqueryAsset'
    ];
}