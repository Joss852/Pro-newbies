<?php

use Nette\Utils\Arrays;

function getModulesArray(){
    $a =[
        '0' => 'Productos',
        '1' => 'Blog'
    ];
    return $a;

}

function getRolesUserArray($id='0',$mode = null){
    $roles =[
        '0'=> 'Usuario estandar',
        '1'=> 'Administrador'
    ];
    if(is_null($mode)):
        return $roles[$id];
    endif;
    if($mode):
        return $roles;
    endif;
}

function getUserStatusArray($id='0',$mode = null){
    $status =[
        '0'=> 'Registrado',
        '1'=> 'Verificado',
        '100'=> 'Baneado'
    ];
    if(is_null($mode)):
        return $status[$id];
    endif;
    if($mode):
        return $status;
    endif;
}

//Key Value From Json
function kvfj($json,$key){
    if($json== null){
        return null;
    }else{
        $json = $json;
        $json =json_decode($json,true);
        if(array_key_exists($key,$json)){
            return $json[$key];
        }else{
            return null;
        }
    }
}