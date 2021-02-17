<?php
include 'connect.php';
session_start();
if(!isset($_SESSION["uid"])){
    header('Location:index.php');
}
include('library.php');
$rand = get_rand_id(8);
$rname=$email= $rmobile=$raddress=$courierW=$courierA=$courierT="";
if($_SERVER['REQUEST_METHOD']=='POST'){

    if(isset($_POST["cname"])){

           $cons_no=$_POST['ConsignmentNo'];
            $sname = $_POST["cname"];
            $rname = $_POST["rname"];
     $email = $_POST["cemail"];
    $smobile = $_POST["cMob"];
    $rmobile = $_POST["recMob"];
     $caddress = $_POST["cAdd"];
    $raddress = $_POST["rAdd"];
     $courierW = $_POST["cWeight"];
     $courierA = $_POST["cAmount"];
      $courierT = $_POST["cType"];
      $userId = $_SESSION['uid'];
   /* $sql = "INSERT INTO courier (name,email,mobile,address,weight,amount,type,uid,cons_no)
VALUES ('$rname', '$email', '$rmobile','$raddress', '$courierW', '$courierA', '$courierT','$userId','$cons_no')";*/
        $sql = "INSERT INTO courier (shippername,receivername,email,shippermobile,receivermobile,shipperaddress,receiveraddress,weight,amount,type,uid,cons_no)
VALUES ('$sname','$rname','$email', '$smobile','$rmobile','$caddress','$raddress', '$courierW', '$courierA', '$courierT','$userId','$cons_no')";

if ($conn->query($sql) === TRUE)
{
    header("Location:viewCouriers.php");
}
    }}


?>


<html>
    <head>
        <meta charset="UTF-8">
 <script>
     function cityPrice()
     {
         var x=document.getElementById("city");
         var y=x.options[x.selectedIndex].value;
         if(y=="ahmedabad")
             {
                 document.getElementById("amnt").style.visibility="visible";
                 document.getElementById("amount").style.visibility="visible";
                 document.getElementById("amount").value="300";

                alert("price is 300");
                 <?php $courierA=300;?>
             }
         else if(y=="mumbai")
             {
                  document.getElementById("amnt").style.visibility="visible";
                  document.getElementById("amount").style.visibility="visible";
                 document.getElementById("amount").value="380";
                alert("price is 380");
                 <?php $courierA=380;?>

             }
         else if(y=="delhi")
             {
                 document.getElementById("amnt").style.visibility="visible";
                 document.getElementById("amount").style.visibility="visible";
                 document.getElementById("amount").value="290";
                alert("price is 290");
                 <?php $courierA=290;?>
             }
         else if(y=="chennai")
             {
                 document.getElementById("amnt").style.visibility="visible";
                 document.getElementById("amount").style.visibility="visible";
                 document.getElementById("amount").value="400";
                alert("price is 400");
                <?php $courierA=400;?>

             }
       else if(y=="Kolkata")
             {
                  document.getElementById("amnt").style.visibility="visible";
                  document.getElementById("amount").style.visibility="visible";
                 document.getElementById("amount").value="500";
                alert("price is 500");
                <?php $courierA=500;?>

             }
         else
             {
                document.getElementById("amnt").style.visibility="hidden";
                document.getElementById("amount").style.visibility="hidden";
             }

     }
        </script>

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
                   <table><tr><td class="TrackMediumBlue" align="right"><strong>Consignment No  : </strong></td>
            <td width="13">&nbsp;</td>
            <td width="477"><input name="ConsignmentNo"  value="<?php echo strtoupper($rand); ?>" id="ConsignmentNo"  readonly="true" maxlength="13" size="40" type="text">
                <span class="REDLink">*</span> </td></tr></table>

                    <div class="row row-sm-offset">
                            <div class="col-md-4 multi-horizontal" data-for="name">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="name-form1-4t">Shipper Name</label>
                                    <input type="text" class="form-control" name="cname" data-form-field="Name" required="" id="name-form1-4t">
                                </div>
                            </div>
                         <div class="col-md-4 multi-horizontal" data-for="name">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="name-form1-4t">Receiver Name</label>
                                    <input type="text" class="form-control" name="rname" data-form-field="Name" required="" id="name-form1-4t">
                                </div>
                            </div>

                            <div class="col-md-4 multi-horizontal" data-for="email">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="email-form1-4t">Email</label>
                                    <input type="email" class="form-control" name="cemail"  required="" >
                                </div>
                            </div>
                        <tr>
                            <td><div class="col-md-4 multi-horizontal" data-for="phone">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="phone-form1-4t">Shipper Phone No</label>
                                    <input type="number"  maxlength="10"class="form-control" name="cMob" data-form-field="Phone" id="phone-form1-4t">
                                </div>
                                </div></td>

                     <td><div class="col-md-4 multi-horizontal" data-for="phone">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="phone-form1-4t">Receiver Phone No</label>
                                    <input type="number"  maxlength="10"class="form-control" name="recMob" data-form-field="Phone" id="phone-form1-4t">
                                </div>
                         </div></td></tr>

                    <div class="row row-sm-offset">
                            <div class="col-md-4 multi-horizontal" data-for="Courier Weight">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="name-form1-4t">Courier Weight</label>
                                    <input type="text" class="form-control" name="cWeight" data-form-field="Name" required="" id="name-form1-4t">
                                </div>
                            </div>
                          <tr><td> <div class="col-md-4 multi-horizontal" data-for="Courier type">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="email-form1-4t">Courier Type</label>
                                    <select class="form-control" name="cType" data-form-field="Email" required="" id="email-form1-4t">
                                        <option value="select">---Select---</option>
                                        <option value="fragile">Fragile</option>
                                        <option value="basic">Basic</option>
                                        <option value="refrigerated">Refrigerated</option>
                                    </select>
                                </div>
                            </div>
                              </td>
                        <label class="form-control-label mbr-fonts-style display-7" data-for="phone-form1-4t" style="visibility:hidden;" id="amnt">Amount</label>
                            <div class="col-md-4 multi-horizontal" data-for="amount" style="visibility:hidden;">
                                <div class="form-group">
                                    <input class="form-control" id="amount" name="cAmount" readonly="true" >
                                </div>
                            </div>
                        </div>
                    <div class="form-group" data-for="city">
                            <label class="form-control-label mbr-fonts-style display-7" for="message-form1-4t">Destination(city)</label>
                         <select class="form-control" name="cAdd" rows="7" id="city" onChange="cityPrice()" >
                             <option value="select">---Select---</option>
                              <option value="ahmedabad" >Ahmedabad</option>
                             <option value="mumbai">Mumbai</option>
                                        <option value="delhi">Delhi</option>
                                        <option value="chennai">Chennai</option>
                                        <option value="Kolkata">Kolkata</option>

                                    </select>
                        <p id="price"></p>
                        </div>
                        <div class="form-group" data-for="addressST">
                            <label class="form-control-label mbr-fonts-style display-7" for="message-form1-4t">Shipper Address</label>
                            <textarea type="text" class="form-control" name="cAdd" rows="7"  ></textarea>
                        </div>
                        <div class="form-group" data-for="addressSF">
                            <label class="form-control-label mbr-fonts-style display-7" for="message-form1-4t">Receiver Address</label>
                            <textarea type="text" class="form-control" name="rAdd" rows="7"  ></textarea>
                        </div>
                        <span class="input-group-btn">
                            <button href="" type="submit" class="btn btn-primary btn-form display-4" onClick="cityPrice()">Send Courier</button>
                        </span>
                    </form>
            </div>
        </div>
    </div>




    </body>
</html>
