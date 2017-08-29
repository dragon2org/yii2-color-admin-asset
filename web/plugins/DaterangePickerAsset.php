<?php
/**
 * User: harlen-angkemac
 * Date: 2017/7/18 - 下午4:33
 *
 */

namespace pokerDragon\colorAdmin\web\plugins;

use yii\web\AssetBundle as BaseColorAdminAsset;

class DaterangePickerAsset extends BaseColorAdminAsset
{
    public $sourcePath = '@vendor/pokerdragon/color-admin/assets';

    public $css = [
        'plugins/bootstrap-daterangepicker/daterangepicker.css',
    ];
    public $js = [
        'plugins/bootstrap-daterangepicker/daterangepicker.js',
    ];

    public $depends = [
        'pokerDragon\colorAdmin\web\plugins\JqueryAsset',
        'pokerDragon\colorAdmin\web\plugins\BootStrapAsset',
        'pokerDragon\colorAdmin\web\plugins\MomentAsset',
    ];
}