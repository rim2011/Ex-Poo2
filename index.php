<?php
/**
 * Created by PhpStorm.
 * User: RIM
 * Date: 23/11/2018
 * Time: 11:56
 */
function addition($nombre1,$nombre2) {
    try{
        if(!is_int($nombre1) && !is_int($nombre1)) {
            throw new Exception("The value has to be an integer!");
        }
        else {
            $add=$nombre1+$nombre2;
            return $add;
        }
    }
    catch (Exception $e) {
        echo $e->getMessage();

    }


}

echo  addition(3,2);