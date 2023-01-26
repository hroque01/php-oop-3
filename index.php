<?php

class Stipendio
{
    private $mensile;
    private $tredicesima;
    private $quattordicesima;

    public function __construct($mensile, $tredicesima, $quattordicesima)
    {
        $this->mensile = $mensile;
        $this->tredicesima = $tredicesima;
        $this->quattordicesima = $quattordicesima;

    }
}