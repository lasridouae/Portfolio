<?php include('./include/db.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Arizonia|Montserrat:400,500,600,700|Roboto+Condensed&display=swap" rel="stylesheet">
  <link rel="shortcut icon" href="assets/img/favicon.ico">
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">

  <title>Dlas,</title>
</head>
<body>
  <!-- Navigation Bar -->

  <?php include('./include/nav.php'); ?>

    <!-- About Section -->
    <div class="about">
      <div class="about__container">
        <div class="about__photo">
          <img src="assets/img/about.png" alt="About image" class="about__image">
        </div>

        <div class="about__content">
          <h2 class="about__h2"><?= $titre3?></h2>
          <p class="about__paragraph">
         <?= $p4?>
           
          </p>

          <p class="about__paragraph">
          <?= $p5?>
          </p>

          <p class="about__paragraph">
          <?= $p6?>
          </p>

          <span class="id__info-name">Lasri Douae</span>
        </div>
      </div>
      </div>
      

<!-- Skills -->
    
    <div class="skills-section">
      <div class="skills-header">
       <h1><?= $titre4?></h1>   
       </div>
       <div class="skills-container">
         
        <div class="skills-box">
         <div class="skills-title">
         <div class="skills-img">
          <img src="https://cdn.freebiesupply.com/logos/large/2x/html-5-logo-png-transparent.png"     alt="" class="skills-icons">
          </div>
           <h3>HTML 5</h3>
          </div>
         </div>
         
         
          <div class="skills-box">
         <div class="skills-title">
         <div class="skills-img">
          <img src="https://upload.wikimedia.org/wikipedia/commons/3/3d/CSS.3.svg" alt="" class="skills-icons">
          </div>
          <h3>CSS3</h3>
          </div> 
         </div>
         
         
          <div class="skills-box">
         <div class="skills-title">
         <div class="skills-img">
          <img src="https://icon-library.net/images/javascript-icon-png/javascript-icon-png-23.jpg" alt="" class="skills-icons">
          </div>
          <h3>JAVASCRIPT</h3>
          </div>
         </div>
         
            <div class="skills-box">
         <div class="skills-title">
         <div class="skills-img">
          <img src="https://cdn.freebiesupply.com/logos/large/2x/php-logo-png-transparent.png" alt="" class="skills-icons">
          </div>
          <h3>PHP</h3>
          </div>
         </div>
         
            <div class="skills-box">
         <div class="skills-title">
         <div class="skills-img">
          <img src="https://cdn.freebiesupply.com/logos/large/2x/mysql-logo-png-transparent.png" alt="" class="skills-icons">
          </div>
          <h3>Mysql</h3>
          </div>
         </div>
            </div>


<!--footer--->
<?php
  include('./include/footer.php'); 

?>
</body>
</html>
