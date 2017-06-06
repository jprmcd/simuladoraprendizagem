<?php
public class ciclo_simulador{
  private $id_sml;
  private $descricao_csm;
  private $imagem_csm;
  
  public function __set($atrib, $value){
    $this->$atrib=$value;
  }
  public function __get($atrib){
    return$this->$atrib;
  }
  public function __construct(){
    $this->descricao_csm="";
    $this->imagem_csm="";
  }
  public function __construct($nome,$descricao){
    $this->descricao_csm=$descricao_csm;
    $this->imagem_csm=$imagem_csm;
  }
  }
?>
