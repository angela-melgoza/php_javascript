<?php

class Vehiculo{
    //metodos = acciones
    //propiedades = caracteristicas
    public $numero_de_llantas;
    private $kilometraje;
    //Se puede acceder a las variables publicas desde cualquier parte 
    //Se puede acceder a las variables privadas solo desde la clase en la que están
   
    public function __construct(){
        //esta funcion siempre se manda a llamar cuando instanciamos un objeto
        $this->inicializarKilometraje();
    }

    public function getKilometraje(){
        return $this->kilometraje;
    }

    private function inicializarKilometraje(){
        //aqui se hace uso de la variable de mi clase
        $this->kilometraje = 0;
    }

    protected function setKilometraje($km){
        $this->kilometraje = $this->kilometraje + $km;
        return $this->kilometraje;
    }
}

$auto = new Vehiculo(); //instanciar objeto 
$auto -> numero_de_llantas = 4;
echo 'Numero de llantas: '.$auto->numero_de_llantas;
echo '<br/>';
echo 'El kilometraje es: '.$auto->getKilometraje().' y soy feliz';

/**
 * Creo mi clase auto que hereda de vehiculo
*/
class Auto extends Vehiculo{
    public $marca = 'N/A';
    public $anio = 'N/A';
    public $color = 'N/A';

    function setPropiedades($marcaRe='N/A',$colorRe,$anioRe='2022'){
        $this->marca = $marcaRe;
        $this->anio = $anioRe;
        $this->color = $colorRe;
    }
    
    function avanzar($km){
        return $this->setKilometraje($km);
    }
}


echo '<br/>---------------------------<br/>';
$bocho = new Auto();
$bocho->setPropiedades('Vw','rojo',2020);
$bocho->numero_de_llantas = 4;
echo '<br/>';
echo 'Numero de llantas: '.$bocho->numero_de_llantas.'<br/>';
echo 'Marca: '.$bocho->marca.'<br/>';
echo 'Color: '.$bocho->color.'<br/>';
echo 'Año: '.$bocho->anio.'<br/>';
echo 'Km actual: '.$bocho->getKilometraje().'<br/>';
$bocho->avanzar(50);
echo 'Km actual: '.$bocho->getKilometraje().'<br/>';
$bocho->avanzar(20);
echo 'Km actual: '.$bocho->getKilometraje().'<br/>';

?>