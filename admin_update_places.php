<?php

@include 'config.php';



if(isset($_POST['update_places'])){

   $name = $_POST['name'];
   $destination = $_POST['destination'];
   $details = $_POST['details'];

   $image = $_FILES['image']['name'];
   $image = filter_var($image);
   $image_size = $_FILES['image']['size'];
   $image_tmp_name = $_FILES['image']['tmp_name'];
   $image_folder = 'uploaded_img/'.$image;
   $old_image = $_POST['old_image'];

   $update_places = $conn->prepare("UPDATE `places` SET  destination = ?, details = ?, image = ? WHERE name = ?");
   $update_places->execute([$name, $destination, $details, $image]);

   $message[] = 'Place updated successfully!';

   if(!empty($image)){
      if($image_size > 2000000){
         $message[] = 'image size is too large!';
      }else{

         $update_image = $conn->prepare("UPDATE `places` SET image = ? WHERE name = ?");
         $update_image->execute([$image, $name]);

   
    }
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="icon" href="images/logo.jpg" type="image/jpg">

   <title>update places</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="adminstyles.css">

</head>
<body>
   
<?php include 'admin_header.php'; ?>

<section class="update-places">

   <h1 class="title">update Places</h1>   

   <?php
      $update_name = $_GET['update'];
      $select_places = $conn->prepare("SELECT * FROM `places` WHERE name = ?");
      $select_places->execute([$update_name]);
      if($select_places->rowCount() > 0){
         while($fetch_places = $select_places->fetch(PDO::FETCH_ASSOC)){ 
   ?>
   <form action="" method="post" enctype="multipart/form-data">
      <input type="hidden" name="old_image" value="<?= $fetch_places['image']; ?>">
      <img src="uploaded_img/<?= $fetch_places['image']; ?>" alt="">
      <input type="text" name="name" placeholder="enter places name" required class="box" value="<?= $fetch_places['name']; ?>">
      <select name="destination" class="box" required>
         <option selected><?= $fetch_places['destination']; ?></option>
         <option value="Colombo">Colombo</option>
               <option value="Kandy">Kandy</option>
               <option value="Sigiriya">Sigiriya</option>
               <option value="Galle">Galle</option>
               <option value="NuwaraEliya">Nuwara Eliya</option>
               <option value="Anuradhapura&Polonnaruwa">Anuradhapura & Polonnaruwa</option>
      </select>
      <textarea name="details" required placeholder="enter place details" class="box" cols="30" rows="10"><?= $fetch_places['details']; ?></textarea>
      <input type="file" name="image" class="box" accept="image/jpg, image/jpeg, image/png">
      <div class="flex-btn">
         <input type="submit" class="btn" value="update places" name="update_places">
         <a href="admin_places.php" class="option-btn">go back</a>
      </div>
   </form>
   <?php
         }
      }else{
         echo '<p class="empty">No places found!</p>';
      }
   ?>

</section>

<script src="js/script.js"></script>

</body>

</html>