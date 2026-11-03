<?php
declare(strict_types=1);

namespace touiteur\render;
use touiteur\message\Touite;

class TouiteRenderer implements Renderer{
    public function __construct(public Touite $touite){}

    protected function render(int $selector):String{
        if ($selector === RENDERER::COMPACT){
            $t = $this->touite;
            $res = "<p>$t->utilisateur</br>$t->texte</p>";
            return $res;
        
        } else {
            // TODO: changer le render, il est identique pour l'instant
            $t = $this->touite;
            $res = "<p>$t->utilisateur</br>$t->texte</p>";
            return $res;
        }
    }
}