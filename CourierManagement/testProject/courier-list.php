<?php
session_start();
require_once('database.php');
require_once('library.php');
isUser();

/*$sql = "SELECT cid, cons_no, ship_name, rev_name, pick_date, pick_time, status
		FROM tbl_courier
		WHERE status != 'Delivered'
		ORDER BY cid DESC 
		LIMIT 0, 20";*/
$sql1="SELECT * from courier ORDER BY id DESC LIMIT 0,20";
$result = dbQuery($sql1);		

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Admin</title>
<link href="css/mystyle.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.style2 {color: #FFFFFF}
-->
</style>
</head>
<body>
<table border="0" cellpadding="0" cellspacing="0" align="center" width="900">
  <tbody><tr>
    <td width="900">

<?php include("header.php"); ?>
	</td>
  </tr>
  
  <tr>
    <td bgcolor="#FFFFFF">
	<script language="JavaScript">
var checkflag = "false";

function check(field) {
if (checkflag == "false")
 {
	for (i = 0; i < field.length; i++) {
	if(field[i].type=="checkbox" && field[i].name!="chkAll")
	{
	field[i].checked=true;	
	}
	}
	checkflag = "true";
}
else
{
	for (i = 0; i < field.length; i++) {
	if(field[i].type=="checkbox" && field[i].name!="chkAll")
	{
	field[i].checked=false;
	}
	}
	checkflag = "false";
}

}
function confirmDel(field,msg)
{
	count=0;
	for (i = 0; i < field.length; i++) {
	if(field[i].type=="checkbox" && field[i].name!="chkAll" && field[i].checked==true)
	{
	count++;
	}
	}
	
	if(count == 0)
	{
		alert("Select any one record to delete!");
		return false;
	}
	else
	{
		return confirm(msg);
	}
}
</script>
<table border="0" align="center" width="80%">
    <tbody><tr>
      <td class="LargeBlue" bgcolor="#FFFFFF" align="left">&nbsp;</td>
    </tr>
    <tr>
      <td class="LargeBlue" bgcolor="#FFFFFF" align="left"><div class="Partext1" align="center"><strong>Update Shipment </strong></div></td>
    </tr>
  </tbody></table>

 
  <table border="0" cellpadding="1" cellspacing="1" align="center" width="95%">
    <tbody>
	<tr>
    <td>
	</td>
    </tr>
  </tbody></table>
  <table class="blackbox" border="0" cellpadding="1" cellspacing="1" align="center" width="95%">
    <tbody><tr class="BoldRED" bgcolor="#FFFFFF" style="height:20px;">
      <td class="newtext" bgcolor="#EDEDED" width="6%"><div align="center">Edit</div></td>
      <td class="newtext" bgcolor="#EDEDED" width="10%">Courier Id </td>
        <td class="newtext" bgcolor="#EDEDED" width="10%">Consignment No </td>
      <td class="newtext" bgcolor="#EDEDED" width="7%">Name</td>
      <td class="newtext" bgcolor="#EDEDED" width="11%">email</td>
      <td class="newtext" bgcolor="#EDEDED" width="11%">Mobile</td>
    <td class="newtext" bgcolor="#EDEDED" width="11%">Address</td>
    <td class="newtext" bgcolor="#EDEDED" width="11%">weight</td>
    <td class="newtext" bgcolor="#EDEDED" width="11%">Amount</td>
    <td class="newtext" bgcolor="#EDEDED" width="11%">Type</td>
     <td class="newtext" bgcolor="#EDEDED" width="11%">status</td>
   <td class="newtext" bgcolor="#EDEDED" width="11%">uid</td>



     
    </tr>
	<?php
	
	while($data = dbFetchAssoc($result)){
	extract($data);	
	?>
      <tr onMouseOver="this.bgColor='gold';" onMouseOut="this.bgColor='#FFFFFF';" bgcolor="#FFFFFF">
	
      <td class="gentxt" align="center">
	  <a href="edit-courier.php?cid=<?php echo $data['id']; ?>">
	  <img src="images/edit_icon.gif" border="0" height="20" width="20"></a>
	  </td>
        <td class="gentxt"><?php echo $data['id']; ?></td>  
        <td class="gentxt"><?php echo $data['cons_no']; ?></td>  
      <td class="gentxt"><?php echo $data['receivername']; ?></td>
      <td class="gentxt"><?php echo $email; ?></td>
      <td class="gentxt"><?php echo $data['receivermobile']; ?></td>
      <td class="gentxt"><?php echo $data['receiveraddress']; ?></td>
      <td class="gentxt"><?php echo $data['weight']; ?></td>
          <td class="gentxt"><?php echo $data['amount']; ?></td>
          <td class="gentxt"><?php echo $data['type']; ?></td>
          <td class="gentxt"><?php echo $data['status']; ?></td>
          <td class="gentxt"><?php echo $data['uid']; ?></td>
    </tr>
    <?php
	}//while
	?>
	  </tbody></table>
  <br>
	
    </td>
  </tr>
  <tr>
    <td><table border="0" cellpadding="0" cellspacing="0" align="center" width="900">
  <tbody><tr>
    <td bgcolor="#2284d5" height="40" width="476">&nbsp;</td>
    <td bgcolor="#2284d5" width="304"><div align="right"></div></td>
  </tr>
</tbody></table>
</td>
  </tr>
</tbody></table>


</body></html>