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
  
  }
