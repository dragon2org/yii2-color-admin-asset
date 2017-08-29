<?php
/**
 * User: harlen-angkemac
 * Date: 2017/7/31 - 下午3:27
 *
 */

namespace pokerDragon\colorAdmin\web\plugins;

use yii\web\AssetBundle as BaseColorAdminAsset;

class SweetAlertAsset extends BaseColorAdminAsset
{
    public $sourcePath = '@vendor/pokerdragon/color-admin/assets';

    public $css = [
        'plugins/sweetalert/dist/sweetalert.css'
    ];

    public $js = [
        'plugins/sweetalert/dist/sweetalert.min.js',
    ];

    public $depends = [
        'pokerDragon\colorAdmin\web\plugins\JqueryAsset'
    ];
}