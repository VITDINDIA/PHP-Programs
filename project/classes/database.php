<?php
class database
         {
public $con;	
public $uname; public $email;	public $password;public $city;
public $contact;
		 
public function __construct()
    {
$this->con =mysqli_connect("localhost","root","","e_learning"); 
    }  
public function login_authentication($email,$password)
    {       
return mysqli_num_rows(mysqli_query($this->con,"SELECT * FROM `users` WHERE `email`='$email' and `password` ='$password'"));      
    }
public function get_name($email)
        {
$res=mysqli_query( $this->con,"SELECT `uname` FROM `users` WHERE `email`='$email'");    
return mysqli_fetch_array($res);       
        }        
public function get_all_data($email)
        {
$res=mysqli_query( $this->con,"SELECT * FROM `users` WHERE `email`='$email'");    
return mysqli_fetch_array($res);       
        }     
         }

$database= new database();
?>