<?php
include 'connect.php';
if(isset($_POST['submit'])) {
$email_to = "atif.shahab@cloudways.com";
$email_subject = "Summarized propose of the email";
//Errors to show if there is a problem in form fields.
function died($error) {
    echo "We are sorry that we can procceed your request due to error(s)";
    echo "Below is the error(s) list <br /><br />";
    echo $error."<br /><br />";
    echo "Please go back and fix these errors.<br /><br />";
    die();
}
// validation expected data exists
if(!isset($_POST['first_name']) ||
       !isset($_POST['last_name']) ||
       !isset($_POST['email']) ||
       !isset($_POST['telephone']) ||
       !isset($_POST['comments'])) {
    died('We are sorry to proceed your request due to error within form entries');   
}
$first_name = $_POST['first_name']; // required
$last_name = $_POST['last_name']; // required
$email_from = $_POST['email']; // required
   $telephone = $_POST['telephone']; // not required
$comments = $_POST['comments']; // required
$error_message = "";
$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 if(!preg_match($email_exp,$email_from)) {
$error_message .= 'You entered an invalid email<br />';
 }
$string_exp = "/^[A-Za-z .'-]+$/";
 if(!preg_match($string_exp,$first_name)) {
$error_message .= 'Invalid first name<br />';
 }
 if(!preg_match($string_exp,$last_name)) {
$error_message .= 'Invalid Last name<br />';
 }
 if(strlen($comments) < 2) {
$error_message .= 'Invalid comments<br />';
 }
 if(strlen($error_message) > 0) {
   died($error_message);
 }
$email_message = "Form details below.\n\n";
function clean_string($string) {
  $bad = array("content-type","bcc:","to:","cc:","href");
  return str_replace($bad,"",$string);
}
$email_message .= "First Name: ".clean_string($first_name)."\n";
$email_message .= "Last Name: ".clean_string($last_name)."\n";
$email_message .= "Email: ".clean_string($email_from)."\n";
$email_message .= "Telephone: ".clean_string($telephone)."\n";
$email_message .= "Comments: ".clean_string($comments)."\n";
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
@mail($email_to, $email_subject, $email_message, $headers);
$sql = "INSERT INTO contact (firstname,lastname,email,mobile,comments)
VALUES ('$first_name','$last_name','$email_from','$telephone','$comments')";
    if ($conn->query($sql) === TRUE)
    {
        echo("Thank you for contacting us. We will be in touch with you very soon.");
    }
    
        else
        {
            echo"not entered in if";
        }
    }
}

?>
<form name="contactform" method="post" action="contact_us.php">
<table width="450px">
<tr>
<td valign="top">
 <label for="first_name">First Name *</label>
</td>
<td valign="top">
 <input  type="text" name="first_name" maxlength="50" size="30">
</td>
</tr>
<tr>
<td valign="top"">
 <label for="last_name">Last Name *</label>
</td>
<td valign="top">
 <input  type="text" name="last_name" maxlength="50" size="30">
</td>
</tr>
<tr>
<td valign="top">
 <label for="email">Email Address *</label>
</td>
<td valign="top">
 <input  type="text" name="email" maxlength="80" size="30">
</td>
</tr>
<tr>
<td valign="top">
 <label for="telephone">Telephone Number</label>
</td>
<td valign="top">
 <input  type="text" name="telephone" maxlength="30" size="30">
</td>
</tr>
<tr>
<td valign="top">
 <label for="comments">Comments *</label>
</td>
<td valign="top">
 <textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
</td>
</tr>
<tr>
<td colspan="2" style="text-align:center">
 <input type="submit" value="Submit" name="submit">  </a>
</td>
</tr>
</table>
</form>
