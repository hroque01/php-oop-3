<?php
class Persona
{
    // creo le variabili del padre
    public $nome;
    public $cognome;
    public $dataDiNascita;
    public $luogoDiNascita;
    public $codiceFiscale;

    //creo la funzione per dichiarare le variabili
    public function __construct($nome, $cognome, $dataDiNascita, $luogoDiNascita, $codiceFiscale)
    {
        $this->setNome($nome);
        $this->setCognome($cognome);
        $this->setDataDiNascita($dataDiNascita);
        $this->setLuogoDiNascita($luogoDiNascita);
        $this->setCodiceFiscale($codiceFiscale);

    }

    // Proprietà get e set

    //Variabile Nome
    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    //Variabile Cognome
    public function getCognome()
    {

        return $this->cognome;
    }
    public function setCognome($cognome)
    {
        $this->cognome = $cognome;
    }

    //Variabile data di nascita
    public function getDataDiNasciata()
    {
        return $this->dataDiNascita;
    }

    public function setDataDiNasciata($dataDiNascita)
    {
        $this->dataDiNascita = $dataDiNascita;
    }

    //Variabile luogo di nascita
    public function getLuogoDiNasciata()
    {
        return $this->luogoDiNascita;
    }

    public function setLuogoDiNasciata($luogoDiNascita)
    {
        $this->luogoDiNascita = $luogoDiNascita;
    }

    //Variabile codice fiscale
    public function getCodiceFiscalle()
    {
        return $this->codiceFiscale;
    }

    public function setCodiceFiscalle($codiceFiscale)
    {
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
        $this->setMensile($mensile);
        $this->setTredicesima($tredicesima);
        $this->setQuattordicesima($quattordicesima);

    }

    //Variabili Mensile
    public function getMensile()
    {

        return $this->mensile;
    }
    public function setMensile($mensile)
    {

        $this->mensile = $mensile;
    }

    //Variabile Tredicesima
    public function getTredicesima()
    {

        return $this->tredicesima;
    }
    public function setTredicesima($tredicesima)
    {

        $this->tredicesima = $tredicesima;
    }

    //Variabile Quattordicesima
    public function getQuattordicesima()
    {

        return $this->quattordicesima;
    }
    public function setQuattordicesima($quattordicesima)
    {

        $this->quattordicesima = $quattordicesima;

    }

    public function getSalarioAnnuale()
    {
        $mensile = $this->getMensile();
        $res = $mensile * 12;
        if ($this->getTredicesima()) {
            $res += $mensile;
        }
        if ($this->getQuattordicesima()) {
            $res += $mensile;
        }

        return $res;
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