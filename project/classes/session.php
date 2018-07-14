<?php
class session
         {
public $login=0;			 
public function __construct()
    {
session_start();
    }  
public function session_destroy()
{
unset($_SESSION['uid']);
echo"<script>location.href='index.php';</script>";    
}
public function check_login()
                {
if(!isset($_SESSION['uid'] ))
                    {
echo"<script>location.href='index.php';</script>";     
                    }    
                } 
         }

$session= new session();
?>