<?php
  $the_title = 'Welcome';
  $active_nav = 'home'; 
?>

<!DOCTYPE html>
<html >
  <head>
    <?php include('includes/head.php'); ?>
  </head>

  <body>
    <!-- PAGE HEADER -->
      <?php include('includes/header.php'); ?>

  	<main id="<?php echo $active_nav; ?>">
  		<br>
      <div class="box-ad">
        <a href="https://www.lethbridgevw.com/en"><img class= "ad" src="images/advertisements/vw_cars.jpg" alt="VW Advertisement"></a>  
      </div>

      <hr class="line-breaker">

  		<h2>Art Beat</h2>

  		<!--beginning of the Slider 1--> 
  		<div id="slider">
  			<a href="#" class="button" id="next">></a>
  			<a href="#" class="button" id="prev"><</a>
  			<div class="slide" id="slide1"><a href="article_casa.php">
            <img class="articles" src="images/articles/casa art faces and facades darcy logan.jpg" alt="CASA"></a>
        </div>
  			<div class="slide" id="slide2">
          <a href="article_oktoberfest.php"><img class="articles" src="images/articles/oktoberfest pogo brothers toast for pogo bros.jpg" alt="Oktoberfest"></a>
        </div>
        
  		</div>
  		<!--ending of the Slider 1-->

      <hr class="line-breaker">

      <h2>Latest Articles</h2>

  		<section class="feed-list">
  			<div class = "feed-item">
  				<a href="article_casa.php">
            <img class="articles" src="images/articles/casa art faces and facades darcy logan.jpg" alt="CASA"></a>
  				<div>
  					<h2>New Exhibits at Casa and SAAG Explore Alberta and Cosplay</h2>
  					<p> Wednesday, 06 December 2017 16:17 | Richard Amery</p>
            <a href="article_casa.php">Click here to read</a>
  				</div>

          <div class="feed-item feed-item--right">
          <a href="article_oktoberfest.php">
            <img class="articles" src="images/articles/oktoberfest pogo brothers toast for pogo bros.jpg" alt="Oktoberfest">
          </a>
          <div>
            <h2>Oktoberfest winds up ArtsDays</h2>
            <p>Wednesday, 27 September 2017 07:23 | Richard Amery</p>
            <a href="article_oktoberfest.php">Click here to read</a>
          </div>


        </div>
          <div class="beat-feed">
            <h2> Beatfeed </h2>
            <br>
            <span class="event-date">Wednesday<br>Jan 24</span>
            <p class="event-list">Mauno, Look Vibrant, Body Lens </p>

            <div class="event-breaker"><hr class="line-breaker-feed"></div>

            <span class="event-date">Thursday<br>Jan 25</span>
            <p class="event-list">Joker's Gone Wild with Simon King, Brett Forte and Adam Blank</p>

            <div class="event-breaker"><hr class="line-breaker-feed"></div>

            <span class="event-date">Friday<br>Jan 25</span>
            <p class="event-list">Open Mic at the Slice</p>

            <div class="event-breaker"><hr class="line-breaker-feed"></div>
            <span class="event-date">Friday<br>Jan 26</span>
            <p class="event-list">Herb Hicks Jazz Quartet with Sheena lawson on vocals</p>
          </div>
  			</div>
      </section>

      <!--  Ad 2 of 2 on page -->
        <div class="box-ad">
          <a href="https://wordpress.com/"><img class= "ad" src="images/advertisements/wordpress_ad.jpg" alt="Wordpress Advertisement"></a>
        </div>

  	</main>

    <!-- PAGE FOOTER -->
    <?php include('includes/footer.php'); ?>
    
    <script src="js/index.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js">  
    </script>
  </body>
</html>
