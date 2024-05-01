<?php

@include 'config.php';
?>

<!DOCTYPE html>

  <head>
    <meta charset="UTF-8" />
    
    <title>Gallery</title>
    <link rel="icon" href="images/logo.jpg" type="image/jpg">

    <link rel="stylesheet" href="style.css" />
  </head>
  <body>

  <?php @include 'header.php'; ?>

  <!-- Destinations -->

  <section id="destinations" class="destinations">

        <h2>Popular Destinations</h2>


        <div class="destination-grid">

          <div class="destination-item">

          <a href="destination.php?destination=Colombo">
            <img src="images/colombo1.jpg" alt="" />
            </a>
            <h3>Colombo</h3>
            <p>
              The vibrant capital city is a bustling metropolis where modernity meets tradition. Explore historical sites, vibrant markets, and enjoy the diverse culinary scene.
            </p>
          </div>



          <div class="destination-item">

            <a href="destination.php?destination=Kandy">
            <img src="images/kandy.jpg" alt="" >
            </a>
            <h3>Kandy</h3>
            <p>
              Discover the cultural heart of Sri Lanka, home to the sacred Temple of the Tooth and surrounded by picturesque hills.
            </p>
          </div>




          <div class="destination-item">

            <a href="destination.php?destination=Sigiriya">
            <img src="images/sigiriya1.jpg" alt="" />
          </a>
            <h3>Sigiriya</h3>
            <p>
              Climb the iconic Sigiriya Rock Fortress for panoramic views of the surrounding landscape and explore the ancient frescoes that adorn its walls.
            </p>
          </div>




          <div class="destination-item">

            <a href="destination.php?destination=Galle">
            <img src="images/Galle.jpg" alt="" />
          </a>
            <h3>Galle</h3>
            <p>
              Wander through the charming streets of this UNESCO World Heritage Site, featuring a well-preserved Dutch fort and a unique blend of colonial architecture
            </p>
          </div>



          <div class="destination-item">

            <a href="destination.php?destination=NuwaraEliya">
            <img src="images/nuwra1.jpeg" alt="" />
          </a>
            <h3>Nuwara Eliya</h3>
            <p>
              Nuwara Eliya, with its cool climate and breathtaking landscapes, invites visitors to experience a different facet of Sri Lanka
            </p>
          </div>




          <div class="destination-item">

            <a href="destination.php?destination=Anuradhapura&Polonnaruwa">
            </a>
            <img src="images/anuradhapura.jpg" alt="" />
         </a>
            <h3>Anuradhapura & Polonnaruwa</h3>
            <p>
              Anuradhapura and Polonnaruwa are both important ancient cities with hundreds of crumbling monuments
            </p>
            </div>


      </section>

<?php @include 'footer.php'; ?>

</main>


<script src="script.js"></script>


</body>

</html>
