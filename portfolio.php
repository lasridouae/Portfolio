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

  <?php include('./include/nav.php'); ?>

  
    <!-- PORTFOLIO -->
    <div class="container">
      <div class="port__header">
        <h2 class="port__header-h2"><?=$portfolio?></h2>
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
