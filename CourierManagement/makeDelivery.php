<?php
session_start();
if(!isset($_SESSION["bid"])){
    header('Location:index.php');
}
?>

<?php
include 'connect.php';


$Dto =$Dby= $date=$branchId=$cId="";
if($_SERVER['REQUEST_METHOD']=='POST'){
    
    if(isset($_POST["cId"])){
         
        
            $Dto = $_POST["dTo"];
     $Dby = $_POST["dBy"];
    $date = $_POST["dOn"];
     $branchId = $_SESSION['bid'];
     $cId = $_POST["cId"];
    $sql = "INSERT INTO delivery (branch,deliveredTo,deliveredBy,datetime,courierId)
VALUES ('$branchId', '$Dto', ' $Dby',' $date', '$cId')";
    $conn->query($sql);
    $sql ="update courier set status = '1' where id = '$cId';";
    echo $sql ;
    if($conn->query($sql)){
        echo 'success';
    }else{
       echo("Error description: " . mysqli_error($conn));
    }
    

//    header("Location:makeDelivery.php");

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
    <body>
        <?php
        // put your code here
        include 'navBar.php';
       
        
        ?>
         <style>

h1 {
  font-size:3em; 
  font-weight: 300;
  line-height:1em;
  text-align: center;
  color: #4DC3FA;
}

h2 {
  font-size:1em; 
  font-weight: 300;
  text-align: center;
  display: block;
  line-height:1em;
  padding-bottom: 2em;
  color: #FB667A;
}

h2 a {
  font-weight: 700;
  text-transform: uppercase;
  color: #FB667A;
  text-decoration: none;
}

.blue { color: #185875; }
.yellow { color: #FFF842; }

.container th h1 {
	  font-weight: bold;
	  font-size: 1em;
  text-align: left;
  color: #fff;
}

.container td { color: #fff;
	  font-weight: normal;
	  font-size: 1em;
  -webkit-box-shadow: 0 2px 2px -2px #0E1119;
	   -moz-box-shadow: 0 2px 2px -2px #0E1119;
	        box-shadow: 0 2px 2px -2px #0E1119;
}

.container {
	  text-align: left;
	  overflow: hidden;
	  width: 80%;
	  margin: 0 auto;
  display: table;
  padding: 0 0 8em 0;
  box-shadow: 0px 0px 25px #0E1119;
}

.container td, .container th {
	  padding-bottom: 2%;
	  padding-top: 2%;
  padding-left:2%;  
}

/* Background-color of the odd rows */
.container tr:nth-child(odd) {
	  background-color: #323C50;
}

/* Background-color of the even rows */
.container tr:nth-child(even) {
	  background-color: #2C3446;
}

.container th {
	  background-color: #1F2739;
}

.container td:first-child { color: #FB667A; }

.container tr:hover {
   background-color: #464A52;
-webkit-box-shadow: 0 6px 6px -6px #0E1119;
	   -moz-box-shadow: 0 6px 6px -6px #0E1119;
	        box-shadow: 0 6px 6px -6px #0E1119;
}

.container td:hover {
  background-color: #FFF842;
  color: #403E10;
  font-weight: bold;
  
  box-shadow: #7F7C21 -1px 1px, #7F7C21 -2px 2px, #7F7C21 -3px 3px, #7F7C21 -4px 4px, #7F7C21 -5px 5px, #7F7C21 -6px 6px;
  transform: translate3d(6px, -6px, 0);
  
  transition-delay: 0s;
	  transition-duration: 0.4s;
	  transition-property: all;
  transition-timing-function: line;
}

@media (max-width: 800px) {
.container td:nth-child(4),
.container th:nth-child(4) { display: none; }
}</style>
       <div class="container-fluid" style="margin-top:5%;">
            
            <div class="row" style="width:100%;"> 
                <div class="col-md-6">
                    <div class="container-fluid" style="margin-top: 10%; width: 150%;">
        <div class="row justify-content-center">
            <h2>Make Delivery</h2>
            <div class="media-container-column col-lg-8" data-form-type="formoid">
                    <div data-form-alert="" hidden="">
                        Thanks for filling out the form!
                    </div>
            
                <form class="mbr-form" action="makeDelivery.php" method="post" data-form-title="Mobirise Form">
                      <div class="form-group" data-for="address">
                            <label class="form-control-label mbr-fonts-style display-7" for="message-form1-4t">Select Courier to deliver</label>
                            <select class="btn btn-primary btn-lg" style="width: 100%;" name="cId" id="cId">
  
                                <?php
                                   include 'connect.php';
               $uid = $_SESSION["uid"];
                             $sql="select * from courier where status =0 "; 
                                 $appresult = $conn->query($sql);
                        if ($appresult->num_rows > 0) {
                            // output data of each row
                             while($row = $appresult->fetch_assoc()) 
                        {
                                 ?>
                                <option value="<?php echo $row['id'];?>">Courier to : <?php echo $row['name']?> || email address :<?php echo $row['email']?> || mobile No : <?php echo $row['mobile']?> </option>
                                  <?php
                                 
                                 
                        }}
                          
                                ?>
                                
                                
 
</select>
                        </div>
                        
                    <div class="row row-sm-offset">
                            <div class="col-md-4 multi-horizontal" >
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" >delivered on</label>
                                    <input type="date" class="form-control" name="dOn"  required="" id="name-form1-4t">
                                </div>
                            </div>
                            <div class="col-md-4 multi-horizontal" data-for="">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" >delivered TO</label>
                                    <input class="form-control" name="dTo" data-form-field="Email" required="" id="email-form1-4t">
                                </div>
                            </div>
                            <div class="col-md-4 multi-horizontal" data-for="amount">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="phone-form1-4t">Delivered BY</label>
                                   <select  id="dBy" class="btn btn-primary btn-lg" style="width: 100%;" name="dBy">
  
                                <?php
                                   include 'connect.php';
               $bid = $_SESSION["bid"];
                             $sql="select * from staff where branch ='$bid'"; 
                                 $appresult = $conn->query($sql);
                        if ($appresult->num_rows > 0) {
                            // output data of each row
                             while($row = $appresult->fetch_assoc()) 
                        {
                                 ?>
                                <option value="<?php echo $row['name'];?>"><?php echo $row['name'];?></option>
                                  <?php
                                 
                                 
                        }}
                          
                                ?>
                                
                                
 
</select>
                                </div>
                            </div>
                        </div>
                      
            
                        <span class="input-group-btn">
                            <button href="" type="submit" class=" pull-right btn btn-success btn-form display-4 btn-lg">deliver Courier  <span class="fa fa-rocket"></span></button>
                        </span>
                    </form>
            </div>
        </div>
    </div>

                </div>
                    <div class="col-md-6">
                         
<div class="" style="margin-top:5%; width: 100%;">
        <h1>Deliveries Done</h1>
<table class="container" >
	<thead>
		<tr>
			<th><h1>ID</h1></th>
			<th><h1>delivered TO</h1></th>
			<th><h1>delivered By</h1></th>
			<th><h1>delivered On</h1></th>
                        <th><h1>Courier Id</h1></th>
			
		</tr>
	</thead>
	<tbody>
               <?php 
                        include 'connect.php';
               $bid = $_SESSION["bid"];
                             $sql="select * from delivery where branch = '$bid'"; 
                                 $appresult = $conn->query($sql);
                        if ($appresult->num_rows > 0) {
                            // output data of each row
                             while($row = $appresult->fetch_assoc()) 
                                 {
                                 $id = $row['id'];
                                $dto=$row['deliveredTo'];
                                $dby=$row['deliveredBy'];
                                $dt=$row['datetime'];
                                
                                $cid = $row['courierId'];

                                ?>
                                <tr>
                                    <td><?php echo $id;?></td>
                                    <td><?php echo $dto;?></td>
                                    <td><?php echo $dby;?></td>
                                    <td><?php echo $dt;?></td>
                                    <td><?php echo $cid;?></td>
                                   
                                    
                                    
                                </tr>
                                <?php
                                 }}  
                              ?>
	</tbody>
</table>
        </div>
                </div>
            </div></div>
       
        
        
    </body>
</html>
