<link href="https://fonts.googleapis.com/css?family=Kodchasan" rel="stylesheet">

<nav class="navbar navbar-default navbar-fixed-top navbar-inverse" style="box-shadow: 0px 3px 4px rgba(225, 225, 225, .6); font-family: 'Kodchasan', sans-serif;">
  <div class="container-fluid"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
      <a class="navbar-brand" href="#" style="">Courier Management System</a> </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="defaultNavbar1">
     
    
    <ul class="nav navbar-nav navbar-right ">
        <li><a href="index.php">HOME</a></li>
        	<?php 
                
               if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
                if(isset($_SESSION['login_user']))   // Checking whether the session is already there or not if 
                              // true then header redirect it to the home page directly 
 {
                    $myusername = $_SESSION['login_user'];
   echo ' <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">'.$myusername.'<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="UserPage.php">Home</a></li>
             <li><a href="AddCourier.php">New Courier</a></li>
             <li><a href="viewCouriers.php">View My Courier</a></li>
             <li><a href="logout.php">Logout</a></li>
       
          </ul>
        </li>';
 }
 if(isset($_SESSION["login_branch"]))   // Checking whether the employer session is already there or not if 
                              // true then header redirect it to the home page directly 
 {
                    $myusername = $_SESSION["login_branch"];
   echo ' <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">'.$myusername.'<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="BranchPage.php">Branch Home</a></li>
             <li><a href="viewAllCouriers.php">Couriers</a></li>
              <li><a href="makeDelivery.php">Deliver</a></li>
              <li><a href="AddStaff.php">Staff</a></li>
            <li><a href="logout.php">Logout</a></li>
       
          </ul>
        </li>';
 }
  ?>
       
         <li><a href="#contactus">Contact Us</a></li>
      </ul>
          
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>