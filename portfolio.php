<?php include('./include/db.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://fonts.googleapis.com/css?family=Arizonia|Montserrat:400,500,600,700|Roboto+Condensed&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link rel="shortcut icon" href="assets/img/favicon.ico">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/portfolio.css">



  <title>Dlas,</title>
</head>
<body>
  <!-- Navigation Bar -->

  <div class="navigation">
    <input type="checkbox" class="navigation__checkbox" id="nav-toggle">

    <label for="nav-toggle" class="navigation__button">
      <span class="navigation__icon">&nbsp;</span>
    </label>

    <div class="navigation__background">&nbsp;</div>

    <nav class="navigation__nav">
      <ul class="navigation__list">
        <li class="navigation__item"><a href="index.php" class="navigation__link">Home</a></li>
        <li class="navigation__item"><a href="about.php" class="navigation__link">About</a></li>
        <li class="navigation__item"><a href="portfolio.php" class="navigation__link">Portfolio</a></li>
        <li class="navigation__item"><a href="contact.php" class="navigation__link">Contact</a></li>
      </ul>
    </nav>

  </div>

  <!-- HEADING -->
  <div class="heading" id="global-heading">
  <div class="heading__logo">
     <img src="assets/img/logo.png">
    </div>
  </div>

  
    <!-- PORTFOLIO -->
    <div class="container">
      <div class="port__header">
        <h2 class="port__header-h2">Portfolio</h2>
        <p class="port__header-paragraph">
          If you do good work for good clients,</br>
          it will lead to other good work for other good clients.
        </p>
        </div>
 <div class="row">
          <?php $sql = "SELECT * FROM portfolio";
             $result = mysqli_query($conn,$sql);
               while ($row = mysqli_fetch_assoc($result)) :?>

    <div class="col-md-4 col-xs-6">
    <div class="portfolio-item">
           <img src="assets/img/<?php echo $row['projectpic']?>" class="img-res" alt="">
        <div class="portfolio-item-info" title="<?php echo $row['projectname']?>">
        <a href="assets/img/<?php echo $row['projectpic']?>" data-toggle="modal" data-target="#portfolioItem1"><span class="glyphicon glyphicon-eye-open"></span></a>
          <a href="<?php echo $row['projectlink']?>" ><span class="glyphicon glyphicon-link"></span></a>
         </div>
     </div>
     </div>
                 <?php endwhile ?>
  </div>
 </div>





    <!-- Footer -->
    <footer class="footer">
      <ul class="footer__list">
        <li class="footer__item">
          <a href="https://www.facebook.com/douae.lsr" class="footer__link">
            <i class="fab fa-facebook-f"></i>
          </a>
        </li>

        <li class="footer__item">
          <a href="https://www.linkedin.com/in/douae-lasri-55b42b17a/" class="footer__link">
            <i class="fab fa-linkedin"></i>
          </a>
        </li>

        <li class="footer__item">
          <a href="https://www.instagram.com/douaelsr/" class="footer__link">
            <i class="fab fa-instagram"></i>
          </a>
        </li>

        <li class="footer__item">
          <a href="https://github.com/lasridouae" class="footer__link">
            <i class="fab fa-github"></i>
          </a>
        </li>
      </ul>

      <div class="footer__logo">
        <div class="heading__logo-name">Dlas<span class="dot">,</span></div>
      </div>
  
      <!-- <button class="footer__btn">Contact US!</button> -->
      <ul class="lang">
        <li>
      <a href="#" class="lang_sp"  ></a> <img src="https://demo.neontheme.com/assets/images/flags/flag-fr.png" width="24">
    </li>
    <li>
      <a href="#" class="lang_sp" ></a> <img src="https://demo.neontheme.com/assets/images/flags/flag-uk.png" width="24">
    </li>
    </ul>

      <p class="footer__rights">2020 © Lasri Douae, All rights reserved.</p>

    </footer>

</body>
</html>
