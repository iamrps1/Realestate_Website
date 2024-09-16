<?php 
session_start();

if (isset($_POST['submit'])) {

   
   $email = $_POST['email'];
   $pass = $_POST['pass'];
   

   if (  $email === $_SESSION['email'] && $pass === $_SESSION['pass']) {
      $_SESSION['loginSuccess'] = 1;
      header("Location: home.php");

   }

}?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login</title>

   <?php include "includes/header.php"; ?>

</head>

<body>

   <!-- header section starts  -->

   <?php include 'includes/navigation.php'; ?>

   <!-- header section ends -->

   <section class="form-container">

      <form action="" method="post">
         <h3>Welcome back!</h3>
         <input type="email" name="email" required maxlength="50" placeholder="enter your email" class="box">
         <input type="password" name="pass" required maxlength="20" placeholder="enter your password" class="box">
         <p>don't have an account? <a href="register.html">register new</a></p>
         <input type="submit" value="login now" name="submit" class="btn">
      </form>

   </section>

   <!-- login section ends -->

   <!-- footer section starts  -->

   <?php include 'includes/footer.php'; ?>

   <!-- footer section ends -->


   <!-- custom js file link  -->
   <script src="js/script.js"></script>

</body>

</html>