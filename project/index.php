<?php
include('classes/session.php');
include('classes/database.php');
if(isset($_POST['submit']))
	{
$database->uname=$_POST['usr'];$database->email=$_POST['email'];	
$database->password=$_POST['password'];	
$database->city=$_POST['city'];$database->contact=$_POST['contact'];
mysqli_query( $database->con,"insert into `users`(`uname`,`contact`,`email`,`password`,`city`) values 
('".$database->uname."','".$database->contact."','".$database->email."','".$database->password."','".$database->city."')"); 		
echo"<script>alert('Registration Successfully');</script>";
	}
else if(isset($_POST['login']))
	{
$database->email=$_POST['email'];$database->password=$_POST['password'];
if($database->login_authentication($database->email,$database->password) == 1)
        {
$_SESSION['uid']= $database->email;           
echo"<script>location.href='home.php'</script>";        
        }
else 
        {
echo"<script>alert('Login Id/Password is invalid');location.href='index.php'</script>";    
        }	   
	}    
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
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Courses</a></li>
        <li><a href="#">Trainers</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
<div class="row">
  <div class="col-sm-8">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="img/1.jpg" alt="Image">
          <div class="carousel-caption">
            <h3>Sell $</h3>
            <p>Money Money.</p>
          </div>      
        </div>

        <div class="item">
          <img src="img/2.jpg" alt="Image">
          <div class="carousel-caption">
            <h3>More Sell $</h3>
            <p>Lorem ipsum...</p>
          </div>      
        </div>
        
        <div class="item">
          <img src="img/3.jpeg" alt="Image">
          <div class="carousel-caption">
            <h3>More Sell $</h3>
            <p>Lorem ipsum...</p>
          </div>      
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="well">
      <form method="post">
      <div class="form-group">
          <label for="usr">Name:</label>
          <input type="text" class="form-control" name="usr" id="usr">
       </div>
       <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control" name="email" id="email">
       </div>
       <div class="form-group">
          <label for="contact">Contact:</label>
          <input type="text" class="form-control" name="contact" id="contact">
       </div>
       <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" class="form-control" name="password" id="password">
       </div>
       <div class="form-group">
          <label for="city">City:</label>
          <select name="city" id="city" class="form-control" >
          <option value="" > Select City</option>
          <option value="Meerut" > Meerut</option>
          <option value="Delhi" > Delhi</option>
          <option value="Agra" > Agra</option>
          </select>
       </div>
       <button type="submtit" name="submit" class="btn btn-danger">Sign Up</button>
      </form>
    </div>
    
  </div>
</div>
<hr>
</div>

<div class="container text-center">    
  <h3>Latest Courses</h3>
  <br>
  <div class="row">
  <?php
  $res=$database->get_all_courses();
  while($fetch=mysqli_fetch_array($res))
  {
    $name=$fetch[0].".jpg";
  ?>
    <div class="col-sm-3">
      <img src="courses/<?php    print $name;   ?>" class="img-responsive" style="width:100%" alt="Image">
      <p><?php  echo"$fetch[0] | $fetch[1] Rs/ Only | $fetch[2] Weeks | $fetch[4] ";    ?></p>
    </div>
  <?php
  }
  ?>      
  </div>
  <hr>
</div>

<div class="container text-center">    
  <h3>Our Trainers</h3>
  <br>
  <div class="row">
    <?php
  $res=$database->get_all_trainers();
  while($fetch=mysqli_fetch_array($res))
      {
      ?>
    <div class="col-sm-2">
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <p><?php  echo"$fetch[1] | $fetch[4]";    ?></p>
    </div>
  <?php
       } 
  ?>  
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