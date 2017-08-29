<?php
namespace pokerDragon\colorAdmin\web\plugins;

use yii\web\AssetBundle as BaseColorAdminAsset;

class JqueryMigrateAsset extends BaseColorAdminAsset
{
    public $sourcePath = '@vendor/pokerdragon/color-admin/assets';


    public $js = [
        'plugins/jquery/jquery-migrate-1.1.0.min.js',
    ];

    public $depends = [
        'pokerDragon\colorAdmin\web\plugins\JqueryAsset'
    ];
}