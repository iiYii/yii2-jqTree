<?php
namespace forecho\jqtree;

use yii\web\AssetBundle;

class JQTreeAssets extends AssetBundle
{
    public $sourcePath = '@vendor/forecho/yii2-jqTree/assets';

    public $css = [
        'css/jqtree.css',
    ];

    public $js = [
        'js/tree.jquery.js',
    ];

    public $depends = [
		'yii\web\JqueryAsset',
	];
}