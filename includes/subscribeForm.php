<?php 
  $name = $_REQUEST['name'];
  $email = $_REQUEST['email'];
  $address = $_REQUEST['address'];
  $phno = $_REQUEST['phone'];

  $query=mysqli_query($con,"insert into tblsub(Name,EmailId,Address,Phone) values('$name','$email','$address','$phno')");
if($query)
{
$msg="Subscription Added";
}
else{
$error="Something went wrong . Please try again.";    
} 
?>