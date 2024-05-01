<?php

@include 'config.php';
?>
<?php
if(isset($_POST['add_places'])){

$name = $_POST['name'];
$name = filter_var($name);
//$price = $_POST['price'];
//$price = filter_var($price, FILTER_SANITIZE_STRING);
$destination = $_POST['destination'];
$destination = filter_var($destination);
$details = $_POST['details'];
$details = filter_var($details);

$image = $_FILES['image']['name'];
$image = filter_var($image);
$image_size = $_FILES['image']['size'];
$image_tmp_name = $_FILES['image']['tmp_name'];
$image_folder = 'uploaded_img/'.$image;

$select_places = $conn->prepare("SELECT * FROM `places` WHERE name = ?");
$select_places->execute([$name]);

if($select_places->rowCount() > 0){
   $message[] = 'places name already exist!';
}else{

   $insert_places = $conn->prepare("INSERT INTO `places`(name, destination, details, image) VALUES(?,?,?,?)");
   $insert_places->execute([$name, $destination, $details, $image]);

   if($insert_places){
      if($image_size > 2000000){
         $message[] = 'image size is too large!';
      }else{
         move_uploaded_file($image_tmp_name, $image_folder);
         $message[] = 'new place added!';
      }

   }

}

};

if(isset($_GET['delete'])){

$delete_name = $_GET['delete'];
$select_delete_image = $conn->prepare("SELECT image FROM `places` WHERE name = ?");
$select_delete_image->execute([$delete_name]);
$fetch_delete_image = $select_delete_image->fetch(PDO::FETCH_ASSOC);
unlink('uploaded_img/'.$fetch_delete_image['image']);
$delete_places = $conn->prepare("DELETE FROM `places` WHERE name = ?");
$delete_places->execute([$delete_name]);
header('location:admin_places.php');


}

?>



<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="icon" href="images/logo.jpg" type="image/jpg">

   <title>Places</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="adminstyles.css">

</head>
<body>
<?php include 'admin_header.php'; ?>

<section class="add-places">

   <h1 class="title">Add New Place</h1>

   <form action="" method="POST" enctype="multipart/form-data">
      <div class="flex">
         <div class="inputBox">
         <input type="text" name="name" class="box" required placeholder="enter places name">
         <select name="destination" class="box" required>
            <option value="" selected disabled>select Destinaton</option>
               <option value="Colombo">Colombo</option>
               <option value="Kandy">Kandy</option>
               <option value="Sigiriya">Sigiriya</option>
               <option value="Galle">Galle</option>
               <option value="NuwaraEliya">Nuwara Eliya</option>
               <option value="Anuradhapura&Polonnaruwa">Anuradhapura & Polonnaruwa</option>

         </select>
         </div>
         <div class="inputBox">
         <input type="file" name="image" required class="box" accept="image/jpg, image/jpeg, image/png">
         </div>
      </div>
      <textarea name="details" class="box" required placeholder="enter places details" cols="30" rows="10"></textarea>
      <input type="submit" class="btn" value="add places" name="add_places">
   </form>

</section>

<section class="show-places">

   <h1 class="title">Places added</h1>

   <div class="box-container">

   <?php
      $show_places = $conn->prepare("SELECT * FROM `places`");
      $show_places->execute();
      if($show_places->rowCount() > 0){
         while($fetch_places = $show_places->fetch(PDO::FETCH_ASSOC)){  
   ?>
   <div class="box">
      <img src="uploaded_img/<?= $fetch_places['image']; ?>" alt="">
      <div class="name"><?= $fetch_places['name']; ?></div>
      <div class=""><?= $fetch_places['destination']; ?></div>
      <div class="details"><?= $fetch_places['details']; ?></div>
      <div class="flex-btn">
         <a href="admin_update_places.php?update=<?= $fetch_places['name']; ?>" class="option-btn">update</a>
         <a href="admin_places.php?delete=<?= $fetch_places['name']; ?>" class="delete-btn" onclick="return confirm('delete this places?');">delete</a>
      </div>
   </div> 
   <?php
      }
   }else{
      echo '<p class="empty">No places added yet!</p>';
   }
   ?>

   </div>

</section>




<script src="js/script.js"></script>

</body>
</html>