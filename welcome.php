<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: index.php");
}
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->

    <!meta charset="utf-8">
    <!meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Workshop Homepage</title>
    <link rel="shortcut icon" type="image/jpg" href="icon.ico"/>
<style>


  body {
 
  width:100%;
  height:100%;
  

}


#userlogo{

    width:18%;
    height:18%;
}  
#logo{
  width:90px;
  height:50px;
}  
#logout1{

    margin-top:5px;
}



#Admin_Page{

  margin-top:5px;
}

nav{

  opacity: 0.8;
  z-index: 2;
}

.card{
  float:left;
  margin: 0 auto; 
  margin-bottom: 10px;
  margin-right: 30px;

  position: relative;
  top:-200px;
  left:70px;
  transition: 0.5s ease;
    cursor:pointer;
}

.card:hover{
    transform:scale(1.1);
    box-shadow:5px 5px 15px rgba(0,0,0,0.6);
}
.containe{

  position:relative;
  top:-240px;
  background-color: #f5f5f7;
  
  
}


</style>
  </head>
  <body>
  



  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <img id="logo" src="Jindal_logo.png">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="welcome.php">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register.php">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://en.wikipedia.org/wiki/Jindal_Tamnar_Thermal_Power_Plant">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact_us.php">Contact Us</a>
      </li>
     
    </ul>

  <div class="navbar-collapse collapse">
  <ul class="navbar-nav ml-auto">
  <li class="nav-item">
    <?php
    

    if($_SESSION['username'] == 110469){
    echo  '<a href="adminpage.php">
    <button id="logout1" class="btn btn-outline-success">Admin Page</button>
            </a>';
    }
            ?>
       
      </li>
  
  <li class="nav-item active">
        <a class="nav-link" href="#"> <img id ="userlogo" src="https://img.icons8.com/color/48/000000/user.png"/> <?php echo "Welcome ". $_SESSION['username']?></a>
      </li>
      <li class="nav-item">
      <a href="logout.php">
   <button id="logout1" class="btn btn-outline-danger"> > Logout</button>
            </a>
       
      </li>   
  </ul>
  </div>


  </div>
</nav>

<div style="clear:both"></div>

<div class="containe">
      <img src="chim2.jpg" width="100%" height="500">

</div>



<div id ="mainbar">

    <div class="card text-white bg-dark col-sm-3" style="width: 20rem; height: 21rem; ">
      <img src="userprofile.jpg" class="card-img-top" alt="..." style="height:165px;">
      <div class="card-body">
        <h5 class="card-title">User Profile</h5>
        <p class="card-text">See Your Profile</p>
        <a href="updateprofile.php" id="proceed_btn" class="btn btn-primary">Proceed</a>
      </div>
   
    </div>

    <div class="card text-white bg-dark col-sm-3" style="width: 20rem; height: 21rem; ">
      <img src="workshopimg.jpg" class="card-img-top" alt="..." style="height:165px;">
      <div class="card-body">
        <h5 class="card-title">Request a Query</h5>
        <p class="card-text">Raise a request to Mechanical Workshop.</p>
        <a href="mainpage.php" id="proceed_btn" class="btn btn-primary">Proceed</a>
      </div>
   
    </div>


    <div class="card text-white bg-dark col-sm-3" style="width: 20rem; height: 21rem; ">
      <img src="cost.jpg" class="card-img-top" alt="..." style="height:165px;">
      <div class="card-body">
        <h5 class="card-title">Item value</h5>
        <p class="card-text">Item value for IN and OUT campus</p>
        <a href="cost_center.php" id="proceed_btn" class="btn btn-primary">Proceed</a>
      </div>
   
    </div>



    <div class="card text-white bg-dark col-sm-3" style="width: 20rem; height: 21rem;  ">
      <img src="contact_us.jpg" class="card-img-top" alt="..." style="height:165px;">
      <div class="card-body">
        <h5 class="card-title">Contact US</h5>
        <p class="card-text">If you have any other problem or suggestion.</p>
        <a href="contact_us.php" id="proceed_btn" class="btn btn-primary">Proceed</a>
      </div>
   
</div>
</div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 
 
 
  </body>
</html>
