jqTree.js widget for Yii2
============================

Renders a [jqTree.js plugin](https://github.com/mbraak/jqTree) widget.

Installation
------------
The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require forecho/yii2-jqTree "*"
```
or add

```json
"forecho/yii2-jqTree" : "*"
```

to the require section of your application's `composer.json` file.

Usage
-----
Using a model:

```php
<?php
use forecho\jqtree\JQTree;

$dataTree = [
    [
        'label' => 'node1',
        'children' => array(
            ['label' => 'child1'],
            ['label' => 'child2'],
        ),
    ],
    ['label' => 'node2'],

];

echo JQTree::widget([
    'id' => 'treeview',
    'data' => $dataTree,
    'dragAndDrop' => true,
    'selectable' => true,
    'saveState' => true,
    'autoOpen' => true,
    'htmlOptions' => ['class' => 'treeview-red']
]) ?>
```

> [Get√Yii](http://www.getyii.com)
<i>Web development has never been so fun!</i>
[www.getyii.com](http://www.getyii.com)