<?php

@include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="icon" href="images/logo.jpg" type="image/jpg">

   <title>Destination</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <link rel="stylesheet" href="style.css">

</head>

<body>

   <?php include 'header.php'; ?>
   <section class="places">

      <h1 class="title">Places</h1>

      <div class="box-container">

         <?php
         if (isset($_GET['destination'])) {

            $destination = $_GET['destination'];

            $select_places = $conn->prepare("SELECT * FROM `places` WHERE destination LIKE ?");
            $select_places->execute(["%$destination%"]);

            if ($select_places->rowCount() > 0) {
               while ($fetch_places = $select_places->fetch(PDO::FETCH_ASSOC)) {
         ?>
                  <form action="" class="box" method="POST">
                     <img src="uploaded_img/<?= $fetch_places['image']; ?>" alt="">
                     <div class="name"><?= $fetch_places['name']; ?></div>
                     <div class="details"><?= $fetch_places['details']; ?></div>

                  </form>
         <?php
               }
            } else {
               echo '<p class="empty">No places available!</p>';
            }
         }
         ?>


      </div>

   </section>

   <?php include 'footer.php'; ?>

   <script src="script.js"></script>

</body>

</html>