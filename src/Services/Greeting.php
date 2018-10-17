<?php
/**
 * Created by PhpStorm.
 * User: mariano
 * Date: 17/10/18
 * Time: 13:46
 */
// src/Services/Greeting
namespace App\Services;


class Greeting {
    public function greet($name){
        if($name === 'María'){
            $result = '¿Qué tal María?';
        } else {
            $result = '¡Hola '.$name.'!';
        }
        return $result;
    }
}