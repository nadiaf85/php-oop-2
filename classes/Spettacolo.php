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
}
?>