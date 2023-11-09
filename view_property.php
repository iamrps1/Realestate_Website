<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>View Property</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>

<body>

   <!-- header section starts  -->

   <?php include('includes/navigation.php'); ?>

   <!-- header section ends -->

   <!-- view property section starts  -->

   <section class="view-property">

      <div class="details">
         <div class="thumb">
            <div class="big-image">
               <img src="images/house-img-1.webp" alt="">
            </div>
            <div class="small-images">
               <img src="images/house-img-1.webp" alt="">
               <img src="images/hall-img-1.webp" alt="">
               <img src="images/kitchen-img-1.webp" alt="">
               <img src="images/bathroom-img-1.webp" alt="">
            </div>
         </div>
         <h3 class="name">modern flats and appartments</h3>
         <p class="location"><i class="fas fa-map-marker-alt"></i><span>andheri, mumbai, india - 400104</span></p>
         <div class="info">
            <p><i class="fas fa-tag"></i><span>15 lac</span></p>
            <p><i class="fas fa-user"></i><span>john deo (owner)</span></p>
            <p><i class="fas fa-phone"></i><a href="tel:1234567890">1234567890</a></p>
            <p><i class="fas fa-building"></i><span>flat</span></p>
            <p><i class="fas fa-house"></i><span>sale</span></p>
            <p><i class="fas fa-calendar"></i><span>10-11-2022</span></p>
         </div>
         <h3 class="title">details</h3>
         <div class="flex">
            <div class="box">
               <p><i>rooms :</i><span>2 BHK</span></p>
               <p><i>deposit amount :</i><span>0</span></p>
               <p><i>status :</i><span>ready to move</span></p>
               <p><i>bedroom :</i><span>3</span></p>
               <p><i>bathroom :</i><span>2</span></p>
               <p><i>balcony :</i><span>1</span></p>
            </div>
            <div class="box">
               <p><i>carpet area :</i><span>750sqft</span></p>
               <p><i>age :</i><span>3 years</span></p>
               <p><i>room floor :</i><span>3</span></p>
               <p><i>total floors :</i><span>22</span></p>
               <p><i>furnished :</i><span>semi-furnished</span></p>
               <p><i>loan :</i><span>available</span></p>
            </div>
         </div>
         <h3 class="title">amenities</h3>
         <div class="flex">
            <div class="box">
               <p><i class="fas fa-check"></i><span>lifts</span></p>
               <p><i class="fas fa-check"></i><span>security guards</span></p>
               <p><i class="fas fa-times"></i><span>play ground</span></p>
               <p><i class="fas fa-check"></i><span>gardens</span></p>
               <p><i class="fas fa-check"></i><span>water supply</span></p>
               <p><i class="fas fa-check"></i><span>power backup</span></p>
            </div>
            <div class="box">
               <p><i class="fas fa-check"></i><span>parking area</span></p>
               <p><i class="fas fa-times"></i><span>gym</span></p>
               <p><i class="fas fa-check"></i><span>shopping mall</span></p>
               <p><i class="fas fa-check"></i><span>hospital</span></p>
               <p><i class="fas fa-check"></i><span>schools</span></p>
               <p><i class="fas fa-check"></i><span>market area</span></p>
            </div>
         </div>
         <h3 class="title">description</h3>
         <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum cupiditate aliquid ipsum recusandae maxime nisi, velit eaque, libero, exercitationem culpa accusamus. Neque dolor quaerat modi saepe facere dignissimos temporibus molestias.</p>
         <form action="" method="post">
            <input type="submit" value="save property" name="save" class="inline-btn">
         </form>
      </div>

   </section>

   <!-- view property section ends -->

   <!-- footer section starts  -->

   <?php include('includes/footer.php'); ?>

   <!-- footer section ends -->


   <!-- custom js file link  -->
   <script src="js/script.js"></script>

</body>

</html>