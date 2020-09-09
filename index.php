<?php include('./include/db.php'); 
include('lang.php');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://fonts.googleapis.com/css?family=Arizonia|Montserrat:400,500,600,700|Roboto+Condensed&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link rel="shortcut icon" href="assets/img/logo.png">
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
        <li class="navigation__item"><a href="index.php" class="navigation__link"><?=$home?></a></li>
        <li class="navigation__item"><a href="about.php" class="navigation__link"><?=$about?></a></li>
        <li class="navigation__item"><a href="portfolio.php" class="navigation__link"><?=$portfolio?></a></li>
        <li class="navigation__item"><a href="contact.php" class="navigation__link"><?=$contact?></a></li>
      </ul>
    </nav>

  </div>

  <!-- HEADING -->
  <div class="heading global-heading">
    <div class="heading__logo">
     <img src="assets/img/logo.png">
    </div>

    <div class="heading__text">
      <h2 class="heading__text-1">Lasri douae<span class="dot">,</span></h2>
      <h3 class="heading__text-2"><?=$titre1?> <span class="dot-1">&</span> <?=$titre2?> </h3>
    </div>
  </div>

  <!-- ID -->
    <div class="id">
      <div class="id__info">
        <p class="id__info-text">
        <?= $p2?> <span class="dot-1"><?= $p3?>
        </p>
        <span class="id__info-name">Lasri douae</span>
      </div>
    </div>
    <!-- PORTFOLIO -->
    <div class="container">
      <div class="port__header">
        <h2 class="port__header-h2">Portfolio</h2>
        <p class="port__header-paragraph">
          <?= $p?>
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
          <a href="<?php echo $row['projectlink']?>" ><span class="glyphicon glyphicon-link"></span></a>
         </div>
     </div>
     </div>
                 <?php endwhile ?>
  </div>
 </div>

<!--footer--->
<?php
  include('./include/footer.php'); 

?>


</body>
</html>
