<?php
class Persona{
    //atributos
    protected $dni;
    public $nombre;
    public $apellidos;
    public $sexo;
    public $emai;
    // métodos
    public function Mostrar_nombre($nombre){
        $this->nombre=$nombre;
        echo "el nombre es".this->nombre;
    }
    //Getter ->  obtener valores
    public function getDni(){
        return $this->dni;
    }
    public function setDni($dni){
        $this->dni=$dni;
    }

}

class Cliente extends Persona {
   public $tipo;
    
    function  setTipo($tipo) {
        $this->tipo = $tipo;
    }

    function  getTipo() {
        return $this->tipo;
    }
                
}

?>