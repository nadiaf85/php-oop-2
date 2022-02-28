<?php 
class Sala{
    protected $num_posti;
    protected $num_sala;
    protected $nome;

    public function __construct($_num_posti,$_num_sala,$_nome){
        $this->num_posti = $_num_posti;
        $this->num_sala = $_num_sala;
        $this->nome = $_nome;

    }

    public function getInfoSala(){
        return "{$this->num_posti} {$this->num_sala} {$this->nome}";
    }
}
}
?>