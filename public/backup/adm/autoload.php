<?php

function carregaClasses($nomeClasse)
{

    $namespace = explode('\\', $nomeClasse);
    
 
    if($namespace[0] == 'adm')
    {
        
        array_shift($namespace);
    }
  
    $novo = implode('/', $namespace);
   $novo .= ".php";
   require_once __DIR__."/".$novo;
   
    
}

spl_autoload_register("carregaClasses");