  <!-- Navigation Bar -->
<?php
include('lang.php');
?>
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
  <div class="heading" id="global-heading">
  <div class="heading__logo">
     <img src="assets/img/logo.png">
    </div>
  </div>