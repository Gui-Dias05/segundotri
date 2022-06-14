<?php
class Retangulo extends Forma{
    private $altura;
    private $base;
    public function __construct($id, $cor, $tabuleiro_idtabuleiro,$altura, $base){ 
        parent::__construct($id);
        $this->setAltura($altura);
        $this->setBase($base);
    }

    
}



    
        
?>