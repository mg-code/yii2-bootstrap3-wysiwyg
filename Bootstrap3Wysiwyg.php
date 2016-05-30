<?php

namespace mgcode\wysiwyg;

use mgcode\wysiwyg\assets\Bootstrap3WysiwygAsset;
use yii\bootstrap\InputWidget;
use yii\bootstrap\Html;

class Bootstrap3Wysiwyg extends InputWidget
{
    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        Bootstrap3WysiwygAsset::register($this->getView());
        $this->registerPlugin('wysihtml5');
    }

    public function run()
    {
        return Html::activeTextarea($this->model, $this->attribute, $this->options);
    }
}