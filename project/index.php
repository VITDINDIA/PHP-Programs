<?php
$con=mysqli_connect("localhost","root","","parking");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>PARKING MANAGEMENT </title>
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
      <a class="navbar-brand" href="#" style="color:gold">CAR PARKING MANAGEMENT SYSTEM</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#" style="color:white">Home</a></li>
        <li class="active"><a href="#" style="color:white">About Us</a></li>
        <li class="active"><a href="#" style="color:white">Services</a></li>
        <li class="active"><a href="#" style="color:white">Contact Us</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
	    <li><a href="#" data-toggle="modal" data-target="#myModal"><span style="color:blue" class="glyphicon glyphicon-user" ></span> Registration</a></li>
        <li><a href="#" data-toggle="modal" data-target="#myModal1" ><span style="color:blue" class="glyphicon glyphicon-log-in" ></span> Login</a></li>
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
		<li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox" >
        <div class="item active">
          <img src="image/8.jpg" alt="Image">
          <div class="carousel-caption">
            <h3> PARKING MANAGEMENT SYSTEM</h3>
            <p>FOR CARS</p>
          </div>      
        </div>

        <div class="item">
          <img src="image/5.jpg" alt="Image">
          <div class="carousel-caption">
            <h3>BOOK CAR PARKING SPOT</h3>
            <p>ONLINE BOOKING...</p>
          </div>      
        </div>
		
		<div class="item">
          <img src="image/4.jpg" alt="Image">
          <div class="carousel-caption">
            <h3> SAFE PARKING </h3>
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
  <?php
  if(isset($_POST['submit']))
  {
 $name=$_POST['name'];$email=$_POST['email'];$contact=$_POST['contact'];$query=$_POST['query'];  
 mysqli_query($con,"insert into `query` VALUES('$name','$email','$contact','$query')");
 echo"<script>  alert('Submit Successfully');location.href='index.php';    </script>";   
  }
  
  ?>
  <div class="col-sm-4">
    <div class="well">
     <h3 style="text-align: center; ">Any Query ?</h3>
     <hr />
     <form method="POST">
      <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" class="form-control" id="name" name="name" required="" />
    </div> 
    <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" class="form-control" id="email" name="email" />
    </div>
    <div class="form-group">
    <label for="contact">Contact:</label>
    <input type="text" class="form-control" id="contact" name="contact" required="" />
    </div>
     <div class="form-group">
    <label for="query">Query:</label>
    <textarea class="form-control" name="query" id="query" required=""></textarea>
    </div>       
    <button type="submit" name="submit" class="btn btn-success">Submit</button>  
     </form>  
    </div>
  
  </div>
</div>
<hr>
</div>

<div class="container text-center">    
  <h3>Information about car parking</h3>
  <br>
  <div class="row">
    <div class="col-sm-3">
      <img src="image/6.jpg" class="img-responsive" style="width:100%" alt="Image">
      <p>PRECAUTIONS </p>
    </div>
    <div class="col-sm-3"> 
      <img src="image/12.jpg" class="img-responsive" style="width:100%" alt="Image">
      <p>TIMING </p>    
    </div>
    <div class="col-sm-3">
      <div class="well">
       <p>Some text..</p>
      </div>
      <div class="well">
       <p>Some text..</p>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="well">
       <p>Some text..</p>
      </div>
      <div class="well">
       <p>Some text..</p>
      </div>
    </div>  
  </div>
  <hr>
</div>

<div class="container text-center">    
  <h3>FEATURES</h3>
  <br>
  <div class="row">
    <div class="col-sm-2">
      <img src="image/28.jpg" class="img-responsive" style="width:100%" alt="Image">
      <p>SECURITY</p>
    </div>
    <div class="col-sm-2"> 
      <img src="image/27.jpg" class="img-responsive" style="width:100%" alt="Image">
      <p>SERVICE</p>    
    </div>
    <div class="col-sm-2"> 
      <img src="image/18.jpg" class="img-responsive" style="width:100%" alt="Image">
      <p>PROTECTION</p>
    </div>
    <div class="col-sm-2"> 
      <img src="image/21.jpg" class="img-responsive" style="width:100%" alt="Image">
      <p>RATES</p>
    </div> 
    <div class="col-sm-2"> 
      <img src="image/22.jpg" class="img-responsive" style="width:100%" alt="Image">
      <p>ABOUT PARKING AREA</p>
    </div>     
    <div class="col-sm-2"> 
      <img src="image/2.png" class="img-responsive" style="width:100%" alt="Image">
      <p>MAP OF PARKING AREA</p>
    </div> 
  </div>
</div><br>

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>


<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
<?php
if(isset($_POST['regsubmit']))
{
$fname=$_POST['fname'];$lname=$_POST['lname'];  $phonenumber=$_POST['phonenumber']; $email=$_POST['email'];  
 $pwd=$_POST['pwd']; $carnumber=$_POST['carnumber'];$carcolor=$_POST['carcolor'];   
 mysqli_query($con,"insert into `registration` VALUES('$fname','$lname','$phonenumber','$email','$pwd','$carnumber','$carcolor')");
 echo"<script>  alert('Submit Successfully');location.href='index.php';    </script>";   
    
    
}
?>
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Registration</h4>
      </div>
      <div class="modal-body">
        <p>
		<form method="POST">
	<div class="form-group">
		<label for="name">First name:</label>
		<input type="text" class="form-control" name="fname" id="name">
	</div>
	<div class="form-group">
		<label for="lname">Last name:</label>
		<input type="text" class="form-control" name="lname" id="lname">
	</div>
	<div class="form-group">
		<label for="phonenumber">Phone number:</label>
		<input type="text" class="form-control" id="phonenumber" name="phonenumber">
	</div>
	<div class="form-group">
		<label for="email">Email address:</label>
		<input type="email" class="form-control" id="email" name="email">
	</div>
	<div class="form-group">
		<label for="pwd">Password:</label>
		<input type="password" class="form-control" id="pwd" name="pwd">
	</div>
    <div class="form-group">
		<label for="carnumber">Car Number:</label>
		<input type="text" class="form-control" id="carnumber" name="carnumber">
	</div>
    <div class="form-group">
		<label for="carcolor">Car Color:</label>
		<input type="text" class="form-control" id="carcolor" name="carcolor">
	</div>
	<button type="submit" class="btn btn-default" name="regsubmit">Submit</button>
	</form>
		</p>
      </div>
      <div class="modal-footer">
        <button type="button"  class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>




<div id="myModal1" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Login</h4>
      </div>
      <div class="modal-body">
        <p>
		<form method="POST">
	<div class="form-group">
		<label for="email">Email address:</label>
		<input type="email" class="form-control" id="email">
	</div>
	<div class="form-group">
		<label for="pwd">Password:</label>
		<input type="password" class="form-control" id="pwd">
	</div>
	<button type="submit" class="btn btn-default">Submit</button>
	</form>
		</p>
      </div>
      <div class="modal-footer">
        <button type="button" name="regsubmit" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>