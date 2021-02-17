<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
session_start();
if(!isset($_SESSION["uid"])){
    header('Location:index.php');
}
?>
<html>
    <head>
        <meta charset="UTF-8">
 
        
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1"><link rel="icon" href="images/homepage/favicon.ico" type="image/x-icon">
<title> CourierManagement</title>
	<meta name="author"	content="Audenberg Technologies (www.audenberg.com)" />
<link href="css/simpleGridTemplate.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/Animate.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<link rel="stylesheet" href="css/bootstrap.min.css">
 <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
<link href="css/Animate.css" rel="stylesheet" type="text/css">
<link href="css/animate.min.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Kodchasan" rel="stylesheet">
<style>h5 {
  display: inline-block;
  padding: 10px;
  background: #B9121B;
  border-top-left-radius: 10px;
  border-top-right-radius: 10px;
}

.full-screen {
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}</style>
    </head>
    <body>
        <?php
        // put your code here
        include 'navBar.php';
         ?>
        <div class="container-fluid" style=" background-image: url(images/bg1.jpg); background-repeat: no-repeat; background-size: cover; height: 100vh;">
            
            <div class="row" style="width: 100%; margin-top: 10%">
                <div class="col-md-6">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel" style=" box-shadow: 0px 0px 25px #B9121B;">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="images/slide1.jpg" alt="slide1">
    </div>

    <div class="item">
      <img src="images/slide2.jpg" alt="slide2">
    </div>

    <div class="item">
      <img src="images/slide3.jpg" alt="slide3">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
                </div>
                <div class="col-md-6"><a href="addCourier.php" >
                    <div class="container" style="width: 300px; height: 200px;color: #fff;
    background-color:  #83c11f; text-align: center;
    border-color: #83c11f; box-shadow: 0px 0px 10px #000;
    
    ">
                        <span class="fa fa-rocket" style="  font-size: 50px; padding: 25px;"></span>
                         <h2>Add new Couriers</h2>
                    </div></a>
                    <a href="viewCouriers.php" >
                    <div class="container" style="width: 300px; height: 200px;color: #fff;
    background-color:  #83c11f; text-align: center;
    border-color: #83c11f; box-shadow: 0px 0px 10px #000;
    
    ">
                        <span class="fa fa-book" style="  font-size: 50px; padding: 25px;"></span>
                         <h2>View My Couriers</h2>
                    </div></a>
                </div>
                
            </div>
            
        </div>
        
        
    </body>
   
</html>