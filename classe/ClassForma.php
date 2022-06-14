<?php

class Forma{
    private $id;
    private $cor; 
    private $tabuleiro_idtabuleiro;
    private static $contador=0;
   public function __construct($id, $cor, $tabuleiro_idtabuleiro){ 
        $this->setid  ($id);
        $this->setLado  ($lado);
        $this->setCor ($cor);
        $this->settabuleiro_idtabuleiro ($tabuleiro_idtabuleiro);
        self::$contador=self::$contador + 1;
    }
    //construct

    public function getid(){ return $this->id; }
    public function setid($id){ $this->id = $id;}
    public function getCor() {return $this->cor;}
    public function setCor($cor){if (strlen($cor) > 0)$this->cor = $cor;}
    public function gettabuleiro_idtabuleiro() {return $this->tabuleiro_idtabuleiro;}
    public function settabuleiro_idtabuleiro($tabuleiro_idtabuleiro){if ($tabuleiro_idtabuleiro >  0)$this->tabuleiro_idtabuleiro = $tabuleiro_idtabuleiro;}
    //get e set

    public function __toString(){
        $str.= "ID" .$this->getid().
        "<br> Cor".$this->getCor().
        "<br> Tabuleiro".$this->gettabuleiro_idtabuleiro();
        return $str;
        
    }

        
    }


        
?>