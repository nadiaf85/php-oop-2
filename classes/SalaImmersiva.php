<?php 

require_once __DIR__.'/Sala.php';

class SalaImmersiva extends Sala{
    private $effetti_speciali = [];

    public function __construct($_num_posti,$_num_sala,$_nome,$_effetti_speciali){
        parent::__construct($_num_posti,$_num_sala,$_nome);
        $this->effetti_speciali = $_effetti_speciali;
    }
    
}
?>