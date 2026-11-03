<?php
declare(strict_types=1);

namespace touiteur\render;

interface Renderer{
    const COMPACT = 1;
    const LONG = 2;

    public function render(int $selector):String;
}