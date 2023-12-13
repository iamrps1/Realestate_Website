<?php include 'includes/dataSet.php';

function is_decimal( $val )
{
    return is_numeric( $val ) && floor( $val ) != $val;
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About Us</title>

   <?php include "includes/header.php"; ?>

</head>

<body>

   <!-- header section starts  -->

   <?php include 'includes/navigation.php'; ?>

   <!-- header section ends -->

   <!-- about section starts  -->

   <section class="about">

      <div class="row">
         <div class="image">
            <img src="images/about-img.svg" alt="">
         </div>
         <div class="content">
            <h3>why choose us?</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum dolorem provident voluptatum distinctio laborum veritatis vitae suscipit praesentium fugiat unde?</p>
            <a href="contact.html" class="inline-btn">contact us</a>
         </div>
      </div>

   </section>

   <!-- about section ends -->

   <!-- steps section starts  -->

   <section class="steps">

      <h1 class="heading">3 simple steps</h1>

      <div class="box-container">

         <div class="box">
            <img src="images/step-1.png" alt="">
            <h3>search property</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, placeat.</p>
         </div>

         <div class="box">
            <img src="images/step-2.png" alt="">
            <h3>contact agents</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, placeat.</p>
         </div>

         <div class="box">
            <img src="images/step-3.png" alt="">
            <h3>enjoy property</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, placeat.</p>
         </div>

      </div>

   </section>

   <!-- steps section ends -->

   <!-- review section starts  -->

   


   <section class="reviews">

      <h1 class="heading">client's reviews</h1>

      <div class="box-container">

      <?php for ($i = 0; $i < count($review); $i++) { ?>


         <div class="box">
            <div class="user">
               <img src="images/<?php echo $review[$i]['image'] ?>"alt="">
               <div>
                  <h3><?php echo $review[$i]["name"]; ?></h3>
                  <div class="stars">
                     <?php   
                  if(is_decimal($review[$i]['rating'])){
                     $fstar=floor($review[$i]['rating']);
                     $estar=5-$fstar-1;
                     for($j=0;$j<$fstar;$j++){
                        echo '<i class="fas fa-star"></i>';
                     }
                     echo' <i class="fas fa-star-half-alt"></i>';
                     for($k=0;$k<$estar;$k++){
                        echo'<i class="fa-regular fa-star"></i>';
                     }
                  }
                  else{
                     $fstar=$review[$i]['rating'];
                     $estar=5-$fstar;
                     for($j=0;$j<$fstar;$j++){
                        echo '<i class="fas fa-star"></i>';
                     }
                     for($k=0;$k<$estar;$k++){
                        echo'<i class="fa-regular fa-star"></i>';
                     }

                  }
                  
                     
                     
                     
                     
                     
                     
                     
                     ?>
                     
                     
                    
                  </div>
               </div>
            </div>
            <p><?php echo $review[$i]['review'] ?></p>
         </div>

         <?php } ?>
      </div>

   </section>

   <!-- review section ends -->

   <!-- footer section starts  -->

   <?php include 'includes/footer.php'; ?>

   <!-- footer section ends -->

   <!-- custom js file link  -->
   <script src="js/script.js"></script>

</body>

</html>