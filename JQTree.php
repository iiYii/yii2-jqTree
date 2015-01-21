<?php
namespace forecho\jqtree;

use yii\helpers\Url;
use yii\helpers\Html;
use yii\helpers\Json;
use yii\bootstrap\Widget;

class JQTree extends Widget
{
    public static $theme = 'forecho\jqtree\JQTreeAssets';
    public $url;
    public $data = [];
    public $htmlOptions;

    public $dragAndDrop;
    public $selectable;
    public $saveState;
    public $dataUrl;
    public $autoOpen;
    public $autoEscape;
    public $onCanSelectNode;
    public $onCreateLi;
    public $onIsMoveHandle;
    public $onCanMove;
    public $onCanMoveTo;

    public function run()
    {
        $view = $this->getView();

        /** @var \yii\web\AssetBundle $asset */
        $asset = static::$theme;
        $asset::register($view);

        if (isset($this->htmlOptions['id']))
            $id = $this->htmlOptions['id'];
        else
            $id = $this->htmlOptions['id'] = $this->getId();


        if ($this->url !== null)
            $this->url = Html::normalizeUrl($this->url);

        $options = $this->getClientOptions();
        $options = $options === [] ? '{}' : JSON::encode($options);

        $js = "$('#$id').tree({$options});";
        $view->registerJs($js);

        echo Html::tag('ul', '', $this->htmlOptions)."\n";
    }

    /**
     * @return array the javascript options
     */
    protected function getClientOptions()
    {
        $options = $this->options;
        $availableOptions = ['data', 'id', 'dragAndDrop', 'saveState', 'dataUrl', 'autoOpen', 'selectable', 'autoEscape',
            'onCanSelectNode', 'onCreateLi', 'onIsMoveHandle', 'onCanMove', 'onCanMoveTo'];

        foreach ($availableOptions as $name) {
            if ($this->$name !== null)
                $options[$name] = $this->$name;
        }
        return $options;
    }
}
