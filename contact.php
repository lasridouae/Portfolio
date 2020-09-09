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


  <title>Dlas,</title>
</head>
<body>
  <!-- Navigation Bar -->

  <?php include('./include/nav.php'); ?>

  <!-- Contact Section -->
  <section id="contact" class="site-section section-form text-center">
    <div class="container">
        <h3><?= $contact?></h3>
        <p class="contact__heading-paragraph">
        <?= $p?>
        </p>
        <form action="include/message.php" method="post" role="form" class="php-email-form">
            <div class="form-row">
                <div class="form-group col-sm-6">
                    <input type="text" name="name" class="form-control mt-x-0" placeholder="<?= $nom?>" required>
                </div>
                <div class="col-sm-6">
                    <input type="email" name="email" class="form-control" placeholder="Email" data-rule="email" required> 
                    <div class="validate"></div>  
                </div>
                <div class="col-sm-12">
                    <textarea name="message" id="mesaage" class="form-control" placeholder="Message" required></textarea>
                </div>
            </div>
            <button href="#" class="btn btn-border" type="submit"><?= $submit?></button>
            <?php 
                            $Message = "";
                            if(isset($_GET['error']))
                            {
                              $Message = " <?= $msg1?> ";
                                echo '<div class="alert alert-danger">'.$Message.'</div>';
                            }

                            if(isset($_GET['success']))
                            {
                              $Message = " Your Message Has Been Sent ";
                                echo '<div class="alert alert-success">'.$Message.'</div>';
                            }
                        
                        ?>
        </form>
    </div>
</section><!-- /.section-form -->

  
<!--footer--->
<?php
  include('./include/footer.php'); 
?>


</body>
</html>
