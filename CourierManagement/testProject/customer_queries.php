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
        include 'navBar1.php';
         ?>
      
        
        <div class="" style="margin-top:5%; width: 100%;">
        <h1> CUSTOMER QUERIES</h1>
<table class="container" >
	<thead>
		<tr>
			<th><h1>First Name</h1></th>
            <th><h1>Last Name</h1></th>
			<th><h1>Email</h1></th>
			<th><h1>Telephone</h1></th>
			<th><h1>Comments</h1></th>
    		</tr>
	</thead>
	<tbody>
               <?php 
                        include 'connect.php';
              // $uid = $_SESSION["uid"];
                             $sql="select * from contact"; 
                                 $appresult = $conn->query($sql);
                        if ($appresult->num_rows > 0) {
                            // output data of each row
                             while($row = $appresult->fetch_assoc()) 
                                 {
                                 $first_name=$row['firstname'];
                                 $last_name=$row['lastname'];
                                $email_from=$row['email'];
                                $telephone = $row['mobile'];
                                $comments= $row['comments'];
                                
                                ?>
                                <tr>
                                    <td><?php echo $first_name;?></td>
                                    <td><?php echo $last_name;?></td>
                                    <td><?php echo $email_from;?></td>
                                    <td><?php echo $telephone;?></td>
                                    <td><?php echo $comments;?></td> 
                                </tr>
                                <?php
                                 }}  
                              ?>
	</tbody>
</table>
        </div>
        
        
    </body>
   
</html>