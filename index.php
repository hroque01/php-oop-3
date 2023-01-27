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
    public function getDataDiNascita()
    {
        return $this->dataDiNascita;
    }

    public function setDataDiNascita($dataDiNascita)
    {
        $this->dataDiNascita = $dataDiNascita;
    }

    //Variabile luogo di nascita
    public function getLuogoDiNascita()
    {
        return $this->luogoDiNascita;
    }

    public function setLuogoDiNascita($luogoDiNascita)
    {
        $this->luogoDiNascita = $luogoDiNascita;
    }

    //Variabile codice fiscale
    public function getCodiceFiscale()
    {
        return $this->codiceFiscale;
    }

    public function setCodiceFiscale($codiceFiscale)
    {
        $this->codiceFiscale = $codiceFiscale;
    }

    public function getPersonaHTML()
    {
        return "<b> Nome: </b>" . $this->getNome() . "<br>"
            . "<b>Cognome: </b>" . $this->getCognome() . "<br>"
            . "<b>Data di nascita: </b>" . $this->getDataDiNascita() . "<br>"
            . "<b>Luogo di nascita: </b>" . $this->getLuogoDiNascita() . "<br>"
            . "<b>Codice Fiscale: </b>" . $this->getCodiceFiscale() . "<br>";
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

    public function getStipendioHTML()
    {
        return "<b> Stipendio: </b>" . $this->getMensile() . "<br>"
            . "<b> Tredicesima: </b>" . ($this->getTredicesima() ? "si" : "no") . "<br>" // il "?" va a mettere un IF se ha la tredicesima o meno 
            . "<b> Quattoridicesima: </b>" . ($this->getQuattordicesima() ? "si" : "no");
    }
}

class Capo extends Persona
{
    private $dividendo;
    private $bonus;
    public function __construct($nome, $cognome, $dataDiNascita, $luogoDiNascita, $codiceFiscale, $dividendo, $bonus)
    {
        parent::__construct($nome, $cognome, $dataDiNascita, $luogoDiNascita, $codiceFiscale);
        $this->setDividendo($dividendo);
        $this->setBonus($bonus);
    }

    public function getDividendo()
    {
        return $this->dividendo;
    }
    public function setDividendo($dividendo)
    {
        $this->dividendo = $dividendo;
    }
    public function getBonus()
    {
        return $this->bonus;
    }
    public function setBonus($bonus)
    {
        $this->bonus = $bonus;
    }
    public function getStipendioCapo()
    {
        return $this->getDividendo() * 12 + $this->getBonus();
    }

    public function getCapoHTML()
    {
        return parent::getPersonaHTML() . "<br>"
            . "Stipendio Annuale: " . $this->getStipendioCapo() . "<br>"
            . "Dividendo: " . $this->getDividendo() . "<br>"
            . "Bonus: " . $this->getBonus() . "<br>";
    }

}

class Impiegato extends Persona
{
    private Stipendio $stipendio;
    private $dataDiAssunzione;


}

//Print Persona
$prova = new Persona("Mario", "Rossi", "1990-01-01", "Milano", "RSSMRA90A01F205Z");
echo $prova->getPersonaHTML();

$provastipendio = new Stipendio(1800, true, false);
echo $provastipendio->getStipendioHTML();

$provaCapo = new Capo("Gesualdo", "Ferrari", "1965-05-12", "Verona", "FRRGSS65B02F932V", 32000, 15000);
echo $provaCapo->getCapoHTML();