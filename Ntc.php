<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require_once dirname(__FILE__) . '/idiomas/GetIdioma.php';

class Ntc extends GetIdioma{

     public function __construct($params){
        $this->idioma=$params['idioma'];
        $this->valor=$params['valor'];
     }
    
     function get(){
        //esta funcion nos enviara a la funcion correcta para nuestro idioma(ISO 639-1)
        return $this->ES($this->valor, $this->idioma);

    }
    
}



