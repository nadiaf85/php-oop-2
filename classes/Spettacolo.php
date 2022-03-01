<?php

class Spettacolo{
    private $data;
    private $orario;
    private $sala;
    private $film;

    public function __construct($_data,$_orario,$_sala,$_film){
        $this->data = $_data;
        $this->orario = $_orario;
        $this->sala = $_sala;
        $this->film = $_film;
    }

    public function getData(){
       return $this->data;
    }

    public function getFilm(){
       return $this->film;
    }

    public function getOrario(){
       return $this->orario;
    }
}
?>