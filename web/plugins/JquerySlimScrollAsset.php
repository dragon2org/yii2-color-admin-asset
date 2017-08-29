<?php
/**
 * User: harlen-angkemac
 * Date: 2017/7/6 - 上午11:13
 *
 */

namespace pokerDragon\colorAdmin\web\plugins;

use yii\web\AssetBundle as BaseColorAdminAsset;

class JquerySlimScrollAsset extends BaseColorAdminAsset
{
    public $sourcePath = '@vendor/pokerdragon/color-admin/assets';


    public $js = [
        'plugins/slimscroll/jquery.slimscroll.min.js',
    ];

    public $depends = [
        'pokerDragon\colorAdmin\web\plugins\JqueryAsset'
    ];
}