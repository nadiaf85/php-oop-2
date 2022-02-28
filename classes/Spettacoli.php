<?php

class Spettacoli{
    private $data;
    private $orario;
    private $sala;

    public function __construct($_data, $_orario,$_sala){
        $this-> data = $data;
        $this-> _orario = $_orario;
        $this-> sala = $_sala;
    }

?>