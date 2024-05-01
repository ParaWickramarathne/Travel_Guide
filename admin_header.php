
<header class="header">

   <div class="flex">

      <a href="admin_places.php" class="logo">Admin<span>Panel</span></a>

      <nav class="navbar">
         <a href="admin_places.php">Places</a>
         <a href="admin_users.php">Users</a>
      </nav>

      

      <div class="profile">
         <?php
         ?>
         <img src="uploaded_img/<?= $fetch_profile['image']; ?>" alt="">
         <p><?= $fetch_profile['name']; ?></p>
         <a href="admin_update_profile.php" class="btn">update profile</a>
         <a href="logout.php" class="delete-btn">logout</a>
         <div class="flex-btn">
            <a href="login.php" class="option-btn">login</a>
            <a href="register.php" class="option-btn">register</a>
         </div>
      </div>

   </div>

</header>