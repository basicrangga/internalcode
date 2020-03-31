<?php 
namespace InternalCode;

class Math
{
    public static function sum(Array $array=[]){
        return array_reduce($array,function($before,$current){
            return $before+$current;
        },0);
    }
}
