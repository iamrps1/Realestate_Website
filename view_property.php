<?php

$nameContainer = 'Rishabh\'s Realstate';

if (!isset($_GET['id'])) {

   header('Location: listings.php');
}

$propertyId = $_GET['id'];

include "includes/dataSet.php";

$details = $dataSet[$propertyId];

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title><?php echo $details['title']; ?> | <?php echo $nameContainer; ?></title>

   <?php include "includes/header.php"; ?>

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
               <img src="images/<?php echo $details['property-image']; ?>" alt="">
            </div>
            <div class="small-images">
               <img src="images/<?php echo $details['property-image']; ?>" alt="">
               <img src="images/hall-img-1.webp" alt="">
               <img src="images/kitchen-img-1.webp" alt="">
               <img src="images/bathroom-img-1.webp" alt="">
            </div>
         </div>
         <h3 class="name"><?php echo $details['title']; ?></h3>
         <p class="location"><i class="fas fa-map-marker-alt"></i><span><?php echo $details['address']; ?></span></p>
         <div class="info">
            <p><i class="fas fa-tag"></i><span><?php echo $details['details']['tag']; ?></span></p>
            <p><i class="fas fa-user"></i><span><?php echo $details['name']; ?> (owner)</span></p>
            <p><i class="fas fa-phone"></i><a href="tel:<?php echo $details['phoneNumber']; ?>"><?php echo $details['phoneNumber']; ?></a></p>
            <p><i class="fas fa-building"></i><span><?php echo $details['propertyType']; ?></span></p>
            <p><i class="fas fa-house"></i><span><?php echo $details['propertyFor']; ?></span></p>
            <p><i class="fas fa-calendar"></i><span><?php echo $details['date']; ?></span></p>
         </div>
         <h3 class="title">Details</h3>
         <div class="flex">
            <div class="box">
               <p><i>rooms :</i><span><?php echo $details['details']['rooms']; ?> BHK</span></p>
               <p><i>deposit amount :</i><span><?php echo $details['details']['deposit-amount']; ?></span></p>
               <p><i>status :</i><span><?php echo $details['details']['status']; ?></span></p>
               <p><i>bedroom :</i><span><?php echo $details['details']['bed']; ?></span></p>
               <p><i>bathroom :</i><span><?php echo $details['details']['bath']; ?></span></p>
               <p><i>balcony :</i><span><?php echo $details['details']['balcony']; ?></span></p>
            </div>
            <div class="box">
               <p><i>carpet area :</i><span><?php echo $details['details']['carpet-area']; ?>sqft</span></p>
               <p><i>age :</i><span><?php echo $details['details']['age']; ?> years</span></p>
               <p><i>room floor :</i><span><?php echo $details['details']['room-floor']; ?></span></p>
               <p><i>total floors :</i><span><?php echo $details['details']['total-floors']; ?></span></p>
               <p><i>furnished :</i><span><?php echo $details['details']['furnished']; ?></span></p>
               <p><i>loan :</i><span><?php echo $details['details']['loan']; ?></span></p>
            </div>
         </div>
         <h3 class="title">Amenities</h3>
         <div class="flex">
            <div class="box">
               <p><i class="fas <?php echo $details['amenities']['lifts'] == 0 ? 'fa-times' : 'fa-check'; ?>"></i><span>lifts</span></p>
               <p><i class="fas <?php echo $details['amenities']['security-guards'] == 0 ? 'fa-times' : 'fa-check'; ?>"></i><span>security guards</span></p>
               <p><i class="fas <?php echo $details['amenities']['play-ground'] == 0 ? 'fa-times' : 'fa-check'; ?>"></i><span>play ground</span></p>
               <p><i class="fas <?php echo $details['amenities']['gardens'] == 0 ? 'fa-times' : 'fa-check'; ?>"></i><span>gardens</span></p>
               <p><i class="fas <?php echo $details['amenities']['water-supply'] == 0 ? 'fa-times' : 'fa-check'; ?>"></i><span>water supply</span></p>
               <p><i class="fas <?php echo $details['amenities']['power-backup'] == 0 ? 'fa-times' : 'fa-check'; ?>"></i><span>power backup</span></p>
            </div>
            <div class="box">
               <p><i class="fas <?php echo $details['amenities']['parking-area'] == 0 ? 'fa-times' : 'fa-check'; ?>"></i><span>parking area</span></p>
               <p><i class="fas <?php echo $details['amenities']['gym'] == 0 ? 'fa-times' : 'fa-check'; ?>"></i><span>gym</span></p>
               <p><i class="fas <?php echo $details['amenities']['shopping-mall'] == 0 ? 'fa-times' : 'fa-check'; ?>"></i><span>shopping mall</span></p>
               <p><i class="fas <?php echo $details['amenities']['hospital'] == 0 ? 'fa-times' : 'fa-check'; ?>"></i><span>hospital</span></p>
               <p><i class="fas <?php echo $details['amenities']['schools'] == 0 ? 'fa-times' : 'fa-check'; ?>"></i><span>schools</span></p>
               <p><i class="fas <?php echo $details['amenities']['market-area'] == 0 ? 'fa-times' : 'fa-check'; ?>"></i><span>market area</span></p>
            </div>
         </div>
         <h3 class="title">Description</h3>
         <p class="description"><?php echo $details['description']; ?></p>
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