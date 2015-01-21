<?php
namespace forecho\jqtree;

use yii\web\AssetBundle;

class JQTreeAssets extends AssetBundle
{
    public $sourcePath = '@vendor/forecho/yii2-jqtree/assets';

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