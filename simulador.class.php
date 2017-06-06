<?php
public class simulador{
  private $id_sml;
  private $nome_sml;
  private $descricao_sml;
  
  public function __set($atrib, $value){
    $this->$atrib=$value;
  }
  public function __get($atrib){
    return$this->$atrib;
  }
  public function __construct(){
    $this->nome="";
    $this->descricao="";
  }
  public function __construct($nome,$descricao){
    $this->nome=$nome;
    $this_>descricao=$descricao;
  }
  }
?>
