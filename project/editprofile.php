<?php
include('classes/session.php');
$session->check_login();
include('classes/database.php');
$data=$database->get_name($_SESSION['uid']);
$alldata=$database->get_all_data($_SESSION['uid']); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }

    .carousel-inner img {
      width: 100%; /* Set width to 100% */
      min-height: 200px;
    }

    /* Hide the carousel text when the screen is less than 600 pixels wide */
    @media (max-width: 600px) {
      .carousel-caption {
        display: none; 
      }
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Smart Learning</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li ><a href="home.php">Home</a></li>
        <li class="active"><a href="profile.php">Profile</a></li>
        <li ><a href="inbox.php">Inbox</a></li>
      </ul>
     <ul class="nav navbar-nav navbar-right">
     <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> LogOut</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Hi 
        <?php print  $data[0];       ?></a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
<div class="row">
  <div class="col-sm-12">
    <div class="well">
    <h1>Edit Profile </h1>
      <table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Contact</th>
        <th>Passowrd</th>
        <th>City</th>
        <th>Email</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
      </tr>
    </thead>
    <tbody> 
     <?php
     if(isset($_POST['update']))
     {
      $uname=$_POST['uname'];$contact=$_POST['contact'];$password=$_POST['password'];
      $city=$_POST['city'];$email=$_POST['email'];
     $database->update_user_profile($uname,$contact,$password,$city,$email);
     echo"<script>location.href='profile.php';</script>";  
     } else if(isset($_POST['delete']))
     {
      $email=$_POST['email'];  
      $database->delete_profile($email); 
      echo"<script>location.href='index.php';</script>"; 
     }
     
     ?>  
      <tr class="success">
      <form method="POST">
        <td><input type="text" name="uname" class="form-control" 
        value="<?php print $alldata[1]; ?>" /> </td>
        <td><input type="text" name="contact" class="form-control" 
        value="<?php print $alldata[2]; ?>" /></td>
        <td><input type="text" name="password" class="form-control" 
        value="<?php print $alldata[4]; ?> " /></td>
        <td><input type="text" name="city" class="form-control" 
        value="<?php print $alldata[5]; ?> " /></td>
        <td><input type="text" name="email" readonly="" class="form-control" 
        value="<?php print $alldata[3]; ?>" /></td>
        <td><button type="submit" name="update" class="btn btn-danger">Update Profile</button></td>
        <td><button type="submit" name="delete" onclick="window.confirm('Are Your Sure?')" class="btn btn-danger">Delete Account</button></td>
        </form>
      </tr>
      
    </tbody>
  </table>
      
    </div>
    
  </div>
</div>
<hr>
</div>


</div><br>

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>


<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Login</h4>
      </div>
      <div class="modal-body">
        <form method="post">
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control" name="email" id="email">
       </div>
       <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" class="form-control" name="password" id="password">
       </div>
       <button type="submit" name="login" class="form-control">Login</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>