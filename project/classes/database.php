<?php
class database
         {
public $con;	
public $uname; public $email;	public $password;public $city;
public $contact;
		 
public function connect_database()
    {
$this->con =mysqli_connect("localhost","root","","e_learning"); 
    }  
    
    
         }

$database= new database();
?>