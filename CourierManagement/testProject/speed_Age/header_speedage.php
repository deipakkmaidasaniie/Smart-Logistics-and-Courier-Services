<?php

include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Speed Age</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

</head>

<body>

  <!--==========================
  Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="#hero"><h1>Speed Age</h1></a>
        <!-- Uncomment below if you prefer to use a text logo -->
        <!--<h1><a href="#hero">Regna</a></h1>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="home_speedage.php">Home</a></li>
          <li><a href="feedback.php">Feedback</a></li>
          <li><a href="#services">Dealers</a></li>
          <li><a href="index.php">User Login</a></li>
          <li><a href="Admin.php">Admin</a></li>
          <li><a href="#team">Corporate</a>
            <ul>
              <li><a href="admin/">Login</a></li>
              <li><a href="#" data-toggle="modal" data-target="#myModal">Registration</a></li>
            </ul>
          </li>
          <li class="menu-has-children"><a href="">Tracking</a></li>
          <li class="menu-has-children"><a href="">Location Finder</a></li>
           <!--  <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="menu-has-children"><a href="#">Drop Down 2</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li>
            </ul> -->
          </li>
          <!--  <li><a href="#contact">Contact Us</a></li> -->
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Hero Section
    ============================-->


    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title" style="margin-right: 66%;"> Corporate Registration</h4>
          </div>
          <div class="modal-body">
           <form action="" method="post">
            <div class="form-group">
            <label for="email">User Id:</label>
              <input type="text" class="form-control" name="userid" id="email" required="">
            </div>
            <div class="form-group">
              <label for="pwd">Password:</label>
              <input type="password" class="form-control" id="pwd" name="password">
            </div>
             <div class="form-group">
              <label for="pwd">Company Name:</label>
              <input type="text" class="form-control" id="pwd" name="Companyname">
            </div>
             <div class="form-group">
              <label for="pwd">Address:</label>
              <input type="text" class="form-control" id="pwd" name="address">
            </div>
             <div class="form-group">
              <label for="pwd">Company Code *:</label>
              <input type="text" class="form-control" id="pwd" name="companycode">
            </div>
            <button type="submit" class="btn btn-default" name="Corporate_register">Submit</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>

  <?php

if(isset($_REQUEST['Corporate_register']))
{

  $user_id=$_REQUEST['userid'];
  $password=$_REQUEST['password'];
  $Companyname=$_REQUEST['Companyname'];
  $address=$_REQUEST['address'];
  $companycode=$_REQUEST['companycode'];

    $sql=mysqli_query($conn,"INSERT INTO `corporate` (`id`, `user_id`, `password`, `cname`, `address`, `c_code`) VALUES (NULL, '$user_id', '$password', '$Companyname`', '$address', '$companycode')");

    if($sql)
    {
      echo "<script>alert('your Company has been register successfully...');</script>";
    }
    else
    {
      echo "<script>alert('error');</script>";
    }
}

  ?>
