<?php 
session_start();
include('includes/config.php');

    ?>


<?php 
if(isset($_POST['submit'])){


  $name = $_POST['name'];
  $email = $_POST['email'];
  $address = $_POST['address'];
  $phno = $_POST['phone'];

  $query=mysqli_query($con,"insert into tblsub(Name,EmailId,Address,Phone) values('$name','$email','$address','$phno')");
if($query)
{
$msg="Subscription Added";
}
else{
$error="Something went wrong . Please try again.";    
} 
}
?>


<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>News Portal | Subscribe</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
   <?php include('includes/header.php');?>

    <!-- Page Content -->
    <div class="container">


     
      <div class="row" style="margin-top: 4%">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

               
          <!-- add form for adding subsctibers -->
          <div class="card my-4">
          	<h5 class="card-header">Enter your details for offline subscription</h5>
          	<div class="card-body">
      		<form>
  			Name:<br>
  			<input type="text" name="name" class="form-control" placeholder="Enter your fullname" required><br>
  			Email ID:<br>
  			<input type="email" name="email" class="form-control" placeholder="Enter your Valid email" required><br>
  			Address:<br>
  			<input type="text" name="address" class="form-control" placeholder="Enter your valid address" required><br>
  			Phone Number:<br>
  			<input type="tel" name="phone" class="form-control" pattern="[0-9]{10}" placeholder="Enter your valid 10 digit contact number" required><br><br>
  			<button type="submit" class="btn btn-primary" name="submit">Submit</button><br>
			</form>
		</div>
			<br>
		</div>

          


    

        <!-- Sidebar Widgets Column -->
      <?php include('includes/subscribeForm.php');?>
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
      <?php include('includes/footer.php');?>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

 
</head>
  </body>

</html>
