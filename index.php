<?php
class Persona
{
    public $nome;
    public $cognome;
    public $dataDiNascita;
    public $luogoDiNascita;
    public $codiceFiscale;

    public function __construct($nome, $cognome, $dataDiNascita, $luogoDiNascita, $codiceFiscale)
    {
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->dataDiNascita = $dataDiNascita;
        $this->luogoDiNascita = $luogoDiNascita;
        $this->codiceFiscale = $codiceFiscale;
    }
}

class Stipendio
{
    public $mensile;
    public $tredicesima;
    public $quattordicesima;

    public function __construct($mensile, $tredicesima, $quattordicesima)
    {
        $this->mensile = $mensile;
        $this->tredicesima = $tredicesima;
        $this->quattordicesima = $quattordicesima;

    }
}

class Capo extends Persona
{
    private $dividendo;
    private $bonus;
}

class Impiegato extends Persona
{
    private $dataDiAssunzione;

}