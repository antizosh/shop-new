<?php 
use talgat\shop\models\Shops;class Cms5821d2753f6a9540914039_732511400Class extends \Cms\Classes\PageCode
{

public function onStart(){
    
    $items = Shops::get();
    $this['items'] = $items;
    
    }
}
