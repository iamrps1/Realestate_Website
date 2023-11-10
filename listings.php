<?php

$nameContainer = 'Rishabh\'s Realstate';

include 'includes/dataSet.php';
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
                  <img src="images/<?php echo $dataSet[$i]['property-image'] ?>" alt="">
               </div>
               <h3 class="name"><?php echo $dataSet[$i]["title"]; ?></h3>
               <p class="location"><i class="fas fa-map-marker-alt"></i><span><?php echo $dataSet[$i]["address"]; ?></span></p>
               <div class="flex">
                  <p><i class="fas fa-bed"></i><span><?php echo $dataSet[$i]["details"]["bed"]; ?></span></p>
                  <p><i class="fas fa-bath"></i><span><?php echo $dataSet[$i]["details"]["bath"]; ?></span></p>
                  <p><i class="fas fa-maximize"></i><span><?php echo $dataSet[$i]["details"]["carpet-area"]; ?>sqft</span></p>
               </div>
               <a href="view_property.php?id=<?php echo $i; ?>" class="btn">view property</a>
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