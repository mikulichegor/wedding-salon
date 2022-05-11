<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="container">

<?php @include 'header.php'; ?>

<section class="about">

   <img src="images/about-img.png" alt="">
   <h3>about us</h3>
   <p>Our salon provides the highest level of service.
   Cozy atmosphere, impeccable service, exclusive designer wedding gowns, a wide range of
   additional services – things that ensure the uniqueness of our salon.</p>
   <a href="contact.php" class="btn">contact us</a>

</section>

<section class="team">

   <h1 class="heading">our team</h1>

   <div class="box-container">

       <div class="box">
         <img src="images/team-1.jpg" alt="">
         <h3>lisa brick</h3>
         <p>wedding visagiste</p>
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
         </div>
      </div>

      <div class="box">
         <img src="images/team-2.jpg" alt="">
         <h3>peter white</h3>
         <p>wedding photographer</p>
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
         </div>
      </div>

      <div class="box">
         <img src="images/team-3.jpg" alt="">
         <h3>olivia hoper</h3>
         <p>wedding organizer</p>
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
         </div>
      </div>

      <div class="box">
         <img src="images/team-4.jpg" alt="">
         <h3>richard brown</h3>
         <p>wedding musician</p>
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
         </div>
      </div>

   </div>

</section>

<?php @include 'footer.php'; ?>

</div>
<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>