<?php
include 'connect.php';
session_start();
if(!isset($_SESSION["uid"])){
    header('Location:index.php');
}


$name =$email= $mobile=$address=$courierW=$courierA=$courierT="";
if($_SERVER['REQUEST_METHOD']=='POST'){
    
    if(isset($_POST["cname"])){
       
        
            $name = $_POST["cname"];
     $email = $_POST["cemail"];
    $mobile = $_POST["cMob"];
     $address = $_POST["cAdd"];
     $courierW = $_POST["cWeight"];
     $courierA = $_POST["cAmount"];
      $courierT = $_POST["cType"];
      $userId = $_SESSION['uid'];
    $sql = "INSERT INTO courier (name,email,mobile,address,weight,amount,type,uid)
VALUES ('$name', '$email', '$mobile','$address', '$courierW', '$courierA', '$courierT','$userId')";
    echo '/n'.$sql;
if ($conn->query($sql) === TRUE) {
    header("Location:viewCouriers.php");
}
    }}


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
    </head>
    <body style=" background-image: url(images/bg2.jpg); background-repeat: no-repeat; background-size: cover;">
        <?php
        // put your code here
        include 'navBar.php';
        include 'signinModals.php';
        
        
        
        ?>
       
        <div class="container" style="padding-top: 3%;">
            <div class="row justify-content-center" style="background-color: rgba(225,225,225,0.6); padding: 25px;">
            <h2>Send Courier to</h2>
            <div class="media-container-column col-lg-8" data-form-type="formoid">
                    <div data-form-alert="" hidden="">
                        Thanks for filling out the form!
                    </div>
            
                <form class="mbr-form" action="addCourier.php" method="post" data-form-title="Mobirise Form">
                        <div class="row row-sm-offset">
                            <div class="col-md-4 multi-horizontal" data-for="name">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="name-form1-4t">Name</label>
                                    <input type="text" class="form-control" name="cname" data-form-field="Name" required="" id="name-form1-4t">
                                </div>
                            </div>
                            <div class="col-md-4 multi-horizontal" data-for="email">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="email-form1-4t">Email</label>
                                    <input type="email" class="form-control" name="cemail"  required="" >
                                </div>
                            </div>
                            <div class="col-md-4 multi-horizontal" data-for="phone">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="phone-form1-4t">Phone</label>
                                    <input type="number"  maxlength="10"class="form-control" name="cMob" data-form-field="Phone" id="phone-form1-4t">
                                </div>
                            </div>
                        </div>
                    <div class="row row-sm-offset">
                            <div class="col-md-4 multi-horizontal" data-for="Courier Weight">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="name-form1-4t">Courier Weight</label>
                                    <input type="text" class="form-control" name="cWeight" data-form-field="Name" required="" id="name-form1-4t">
                                </div>
                            </div>
                            <div class="col-md-4 multi-horizontal" data-for="Courier type">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="email-form1-4t">Courier Type</label>
                                    <input class="form-control" name="cType" data-form-field="Email" required="" id="email-form1-4t">
                                </div>
                            </div>
                            <div class="col-md-4 multi-horizontal" data-for="amount">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="phone-form1-4t">Amount</label>
                                    <input class="form-control" name="cAmount" >
                                </div>
                            </div>
                        </div>
                        <div class="form-group" data-for="address">
                            <label class="form-control-label mbr-fonts-style display-7" for="message-form1-4t">Address</label>
                            <textarea type="text" class="form-control" name="cAdd" rows="7"  ></textarea>
                        </div>
            
                        <span class="input-group-btn">
                            <button href="" type="submit" class="btn btn-primary btn-form display-4">Send Courier</button>
                        </span>
                    </form>
            </div>
        </div>
    </div>


        
        
    </body>
</html>
