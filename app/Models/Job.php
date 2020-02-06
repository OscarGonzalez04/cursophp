<?php
namespace App\Models;

//Requiendo la clase padre
use Illuminate\Database\Eloquent\Model;

class Job extends Model{

    protected $table = 'jobs';

    //Polimorfismo sustituir un metodo por el de la clase padre
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
            return "Job duration: $years years $months months";
        }
        
    }
}