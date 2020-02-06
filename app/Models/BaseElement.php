<?php
namespace App\Models;
require_once 'Printable.php';

//Creando clase padre
class BaseElement implements Printable{
    //Agregando propiedades a la clase
    public $title;
    public $visible;
    public $months;
    public $description;

    //Metodo que se llama siempre que creamos una clase
    public function __construct($title, $description, $visible, $months){
        $this->setTitle($title);
        $this->description = $description;
        $this->visible = $visible;
        $this->months = $months;
    }

    public function getTitle(){
        return $this->title;
    }
    public function setTitle($title){
        if($title == ''){
            $this->title = 'N/A';
        }
        else{
            $this->title = $title;
        }
    }
    public function getDescription(){
        return $this->description;
    }
    //Metodo para obtener el total del los meses
    function getDuration(){

        //Para regresar al entero anterior en una division y que no se mire el punto decimal realizamos lo siguiente
        $years = floor($this->months / 12);
        $months = $this->months % 12;

        if($years == 0){
            return "$months months";
        }
        else if($months == 0){
            return "$years years";
        }
        else if($months && $years){
            return "$years years $months months";
        }
        
    }
}