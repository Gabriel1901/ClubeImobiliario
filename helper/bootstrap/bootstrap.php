<?php


spl_autoload_register(function ($class){
   $file = str_repeat('\\','/',classe);
   if(file_exists($file)){
       require_once $file;
   }
       
});