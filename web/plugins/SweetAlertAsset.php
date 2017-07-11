<?php
/**
 * User: harlen-angkemac
 * Date: 2017/7/10 - 下午5:28
 *
 */

namespace pd\coloradmin\web\plugins;

use yii\web\AssetBundle as BaseColorAdminAsset;

class SweetAlertAsset extends BaseColorAdminAsset
{
    public $sourcePath = '@vendor/pokerdragon/color-admin/assets';

    public $css = [
        'plugins/sweetalert/sweetalert.css'
    ];
    public $js = [
        'plugins/sweetalert/sweetalert.min.js',
    ];

    public $depends = [
        'pd\coloradmin\web\plugins\JqueryAsset'
    ];
}