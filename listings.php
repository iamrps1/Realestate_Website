<?php

$first = "Real Hai Mai";

$nameContainer = 'Rishabh ' . $first . ' Realstate';

$dataSet = [[
   "circle" => "I",
   "name" => "IAMRPS",
   "date" => "10-11-2024",
   "no-of-images" => 4,
   "propertyType" => "house",
   "title" => "modern flats and appartments",
   "address" => "andheri, mumbai, india - 401303",
   "bed" => 3,
   "bath" => 2,
   "area" => 750
], [
   "circle" => "R",
   "name" => "Raja",
   "date" => "16-10-2025",
   "no-of-images" => 3,
   "propertyType" => "Flat",
   "title" => "So beatiful so eligant just wow",
   "address" => "Chinhat lucknow - 226028",
   "bed" => 5,
   "bath" => 3,
   "area" => 1200
],];
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>All Listings | <?php echo $nameContainer; ?></title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>

<body>

   <!-- header section starts  -->

   <?php include 'includes/navigation.php'; ?>

   <!-- header section ends -->

   <!-- listings section starts  -->

   <section class="listings">

      <h1 class="heading">all listings</h1>

      <div class="box-container">

         <?php for ($i = 0; $i < count($dataSet); $i++) { ?>

            <div class="box">
               <div class="admin">
                  <h3><?php echo $dataSet[$i]["circle"]; ?></h3>
                  <div>
                     <p><?php echo $dataSet[$i]["name"]; ?></p>
                     <span>1<?php echo $dataSet[$i]["date"]; ?></span>
                  </div>
               </div>
               <div class="thumb">
                  <p class="total-images"><i class="far fa-image"></i><span><?php echo $dataSet[$i]["no-of-images"]; ?></span></p>
                  <p class="type"><span><?php echo $dataSet[$i]["propertyType"]; ?></span><span>sale</span></p>
                  <form action="" method="post" class="save">
                     <button type="submit" name="save" class="far fa-heart"></button>
                  </form>
                  <img src="images/house-img-1.webp" alt="">
               </div>
               <h3 class="name"><?php echo $dataSet[$i]["title"]; ?></h3>
               <p class="location"><i class="fas fa-map-marker-alt"></i><span><?php echo $dataSet[$i]["address"]; ?></span></p>
               <div class="flex">
                  <p><i class="fas fa-bed"></i><span><?php echo $dataSet[$i]["bed"]; ?></span></p>
                  <p><i class="fas fa-bath"></i><span><?php echo $dataSet[$i]["bath"]; ?></span></p>
                  <p><i class="fas fa-maximize"></i><span><?php echo $dataSet[$i]["area"]; ?>sqft</span></p>
               </div>
               <a href="view_property.php" class="btn">view property</a>
            </div>

         <?php } ?>
      </div>

   </section>

   <!-- listings section ends -->

   <!-- footer section starts  -->

   <?php include 'includes/footer.php'; ?>

   <!-- footer section ends -->


   <!-- custom js file link  -->
   <script src="js/script.js"></script>

</body>

</html>