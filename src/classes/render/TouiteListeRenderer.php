<?php
declare(strict_types=1);

namespace touiteur\render;
use touiteur\message\Touite;

class TouiteListeRenderer implements Renderer{
    public function __construct(public TouiteList $liste){}

    protected function render(int $selector):String{
        $res = "";
        foreach ($this->liste->getListe() as $key => $val){
            $rend = new TouiteRenderer($val);
            $res .= $rend->render($selector);
        }
        return $res;
    }
}