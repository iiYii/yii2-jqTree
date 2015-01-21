<?php
namespace forecho\jqtree;

use yii\web\AssetBundle;

class JQTreeAssets extends AssetBundle
{
    public $sourcePath = '@bower';

    public $css = [
        'jqtree/jqtree.css',
    ];

    public $js = [
        'jqtree/tree.jquery.js',
    ];

    public $depends = [
		'yii\web\JqueryAsset',
	];
}