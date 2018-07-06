<?php
class session
         {
public $login=0;			 
public function __construct()
    {
session_start();
    }  
    
         }

$session= new session();
?>