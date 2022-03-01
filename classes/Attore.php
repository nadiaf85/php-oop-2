<?php 
class Attore{
    private $nome;
    private $cognome;
    private $anno;

    public function __construct($_nome,$_cognome,$_anno){
        $this->nome = $_nome;
        $this->cognome = $_cognome;
        $this->anno = $_anno;
    }

    public function getInfoAttore(){
        return "{$this->nome} {$this->cognome} [{$this->anno}]";
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome(){
        $this->nome = $_nome;
    }
}

?>