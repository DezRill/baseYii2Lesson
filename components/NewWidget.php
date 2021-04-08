<?php

namespace app\components;
use yii\base\Widget;

class NewWidget extends Widget
{
    public $name;

    public function init()
    {
        parent::init();
        //if ($this->name===null) $this->name='Guest';
        ob_start();
    }

    public function run()
    {
        $content=ob_get_clean();
        $content=mb_strtoupper($content, 'utf-8');
        return $this->render('new', compact('content'));
        //return "<h1>$this->name, New Widget by DezRill</h1>";
        //return $this->render('new', ['name' => $this->name]);
    }
}