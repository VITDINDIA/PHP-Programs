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
public function update_user_profile($uname,$contact,$password,$city,$email)
        {
$res=mysqli_query( $this->con,"update `users` set `uname`='$uname',`contact`='$contact',`password`='$password',`city`='$city' WHERE `email`='$email'");         
        }
public function delete_profile($email)
        {
$res=mysqli_query( $this->con,"delete from `users` WHERE `email`='$email'");         
        }                    
public function get_all_courses()
        {
$res=mysqli_query( $this->con, "SELECT * FROM `view_courses_trainers` ");    
return $res  ;   
        }         
 public function get_all_trainers()
        {
$res=mysqli_query( $this->con,"SELECT * FROM `trainers` ");    
return $res  ;   
        }         
            
         }

$database= new database();
?>