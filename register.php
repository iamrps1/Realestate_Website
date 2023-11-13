<?php

session_start();

if (isset($_POST['submit'])) {

   $name = $_POST['name'];
   $email = $_POST['email'];
   $pass = $_POST['pass'];
   $c_pass = $_POST['c_pass'];

   if ($pass === $c_pass) {
      $_SESSION['name'] = $name;
      $_SESSION['email'] = $email;
      $_SESSION['pass'] = $pass;
      $_SESSION['success'] = 1;
   }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Register</title>

   <?php include "includes/header.php"; ?>

   <style>
      .success-msg {
         font-size: 2rem;
         padding: 0.25rem 0.5rem;
         text-align: center;
         color: #270;
         background-color: #DFF2BF;
      }
   </style>

</head>

<body>

   <!-- header section starts  -->

   <?php include 'includes/navigation.php'; ?>

   <!-- header section ends -->



   <?php

   if (isset($_SESSION['success'])) { ?>

      <!-- Alert Message -->

      <div class="success-msg">
         <i class="fa fa-check"></i>
         You have successfully registered. Redirecting to new page or <a href="login.php">Click Here</a>
      </div>

   <?php
      header('refresh: 5, url= login.php');
      unset($_SESSION['success']);
   }
   ?>


   <!-- register section starts  -->

   <section class="form-container">

      <form action="" method="post">
         <h3>create an account!</h3>
         <input type="tel" name="name" required maxlength="50" placeholder="enter your name" class="box">
         <input type="email" name="email" required maxlength="50" placeholder="enter your email" class="box">
         <input type="password" name="pass" required maxlength="20" placeholder="enter your password" class="box">
         <input type="password" name="c_pass" required maxlength="20" placeholder="confirm your password" class="box">
         <p>already have an account? <a href="login.php">Login now</a></p>
         <input type="submit" value="register now" name="submit" class="btn">
      </form>

   </section>

   <!-- register section ends -->

   <!-- footer section starts  -->

   <?php include 'includes/footer.php'; ?>

   <!-- footer section ends -->


   <!-- custom js file link  -->
   <script src="js/script.js"></script>

</body>

</html>