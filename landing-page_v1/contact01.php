
<!--
<?php
$insert = false;
if(isset($_POST['name'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";

    // Collect post variables
    $name=$_POST["name"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $feedback=$_POST["feedback"];


    $sql="INSERT INTO  `databasse2`.`tab2` (`name`, `email`, `phone`, `feedback`, `dt`) VALUES ('$name', '$email', '$phone','$feedback' ,current_timestamp());";



    if($con->query($sql) == true){
         echo "Thank you for giving feedback";

        // Flag for successful insertion
        $insert = true;
    }
    else{
        echo "I am Sorry :server is now  under maintenance";
    }

    // Close the database connection
    $con->close();
}
?>
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tsidealONEidentity_main_page_feedback_form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Sriracha&display=swap" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="index.js" type="text/javascript">


    </script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Sorry !!</strong> the Database structure of this form is under-maintenance for some time,it will back shortly,have a grate day. 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
  <h1 class="about-set black"><b>visitors feedback form</b></h1>
  <p class="about-set black">.....Your are one step to go to make a good bonding.....</p><br><br><br>

<div class="my-form">
  <br><br><br><br><br>
  <div class=database>
  <form  action="contact01.php" method="post">
    <input type="text" name="name" id="name" placeholder="Enter your name:">
    <input type="email" name="email" id="email" placeholder="Enter your email Id:">
    <input type="phone" name="phone" id="phone" placeholder="Enter your phone:">
    <textarea id="feedback" name="feedback" placeholder="leave your comments on this sitefor a better representation"></textarea>
     <button class="btn">Submit</button>


  </form>


</div>
<p class="but-on opc"> <a href="main.html">back to home page</a> </p>
<p class="but-on opc"> <a href="index.html">back to index page</a> </p>
<br><br>
<div class="footer">

   <br><br>
    <p class="about-des1">This is a personal website run by Tirtharaj Sinha only for a self interest.
     While using this site,you agree to have read and accepted my <span class="ref-link">terms of use</span> and
     <span class="ref-link"> <a href="#">privacy policy</a> </span>. <span class="ref-link"> <a href="#">Copyright 1999-2020</a> </span> by Refsnes Data. All Rights Reserved.</p>
<br><br>
<div class="footer-icon">
  |<a href="https://github.com/tsidealONEidentity"><i class="fa fa-github"></i></a>
  <a href="https://www.instagram.com/tirtharaj_sinha/"><i class="fa fa-instagram"></i></a>
  <a href="https://twitter.com/sinha_tirtharaj"><i class="fa fa-twitter"></i></a>
  <a href="https://www.linkedin.com/in/tirtharaj-sinha-89a9541aa/"><i class="fa fa-linkedin"></i></a>
  <a href="mailto:tsidealoneidentity@gmail.com"><i class="fa fa-google"></i></a>|

</div>
<br><br>
<p class="about-des1 branding">@tsidealONEidentity powered by Tirtharaj Sinha</p>
<br>

</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
