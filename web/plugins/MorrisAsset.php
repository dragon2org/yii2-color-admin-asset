<?php
/**
 * User: harlen-angkemac
 * Date: 2017/8/10 - 下午6:02
 *
 */

namespace pokerDragon\colorAdmin\web\plugins;

use yii\web\AssetBundle as BaseColorAdminAsset;

class MorrisAsset extends BaseColorAdminAsset
{
    public $sourcePath = '@vendor/pokerdragon/color-admin/assets';

    public $css = [
        'plugins/morris/morris.css'
    ];

    public $js = [
        'plugins/morris/morris.js',
    ];

    public $depends = [
        'pokerDragon\colorAdmin\web\plugins\JqueryAsset',
        'pokerDragon\colorAdmin\web\plugins\RaphaelAsset',
    ];
}