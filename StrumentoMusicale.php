<?php 

class StrumentoMusicale {

    public $tipo_di_strumento;
    
    public $marca;    

    public $prezzo;

    public function __construct($tipo_di_strumento, $marca) {
        $this->tipo_di_strumento = $tipo_di_strumento;
        $this->marca = $marca;       
    }   

    public function getInfoData() {
        return [
            'Strumento' => $this->tipo_di_strumento,
            'marca' => $this->marca
            
        ];
    }
  
}

?>