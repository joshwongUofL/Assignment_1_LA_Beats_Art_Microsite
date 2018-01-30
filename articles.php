<?php
  $the_title = 'Articles';
  $active_nav = 'articles'; 
?>

<!DOCTYPE html>
<html >

  <head>
    <?php include('includes/head.php'); ?>
  </head>

  <body id="<?php echo $active_nav; ?>">
    <!-- PAGE HEADER -->
      <?php include('includes/header.php'); ?>
  	<main>
  		<br>
      <!-- This is AD 1 of 2-->
      <div class="box-ad">
        <a href="https://geomaticattic.ca/shows/"><img class= "ad" src="images/advertisements/geomatic_attic_ad.jpg" alt="Geomatic Attic Advertisement"></a>
      </div>

      <hr class="line-breaker">
      <h2>Articles</h2>

      <!-- This is the list of articles -->
      <section class="feed-list">
        <div class = "feed-item">
          <a href="article_casa.php"><img class="articles" src="images/articles/casa art faces and facades darcy logan.jpg" alt="CASA"></a>
          <div>
            <h2>New Exhibits at Casa and SAAG Explore Alberta and Cosplay</h2>
            <p> Wednesday, 06 December 2017 16:17 | Richard Amery</p>
            <a href="article_casa.php">Click here to read</a>
          </div>
        </div>
        <div class="feed-item">
          <a href="article_oktoberfest.php"><img class="articles" src="images/articles/oktoberfest pogo brothers toast for pogo bros.jpg" alt="Oktoberfest"></a>
          <div>
            <h2>Oktoberfest winds up ArtsDays</h2>
            <p>Wednesday, 27 September 2017 07:23 | Richard Amery</p>
            <a href="article_oktoberfest.php">Click here to read</a>
          </div>
        </div>
      </section>

      <!-- This is AD 2 of 2-->
      <div class="box-ad">
        <a href="http://www.jessfm.ca/"><img class= "ad" src="images/advertisements/jess_fm_logo.png" alt="Jess FM Advertisement"></a>
      </div>

  	</main>

    <!-- PAGE FOOTER -->
      <?php include('includes/footer.php'); ?> 

  </body>
</html>