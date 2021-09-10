
 <?php
 
 ?>
  
 <!DOCTYPE html>
 <html>
 <head>
  <meta charset="UTF-8" />
  <title>Labb 1</title>
 </head>
 <body>
  
  <div id="wrap">
  
  <?php get_header(); ?>
  
  <div class="mobile-search">
  <form id="searchform" class="searchform">
  <div>
  <label class="screen-reader-text">Sök efter:</label>
  <input type="text" />
  <input type="submit" value="Sök" />
  </div>
  </form>
  </div>
  
  <main>
  <section>
  <div class="container">
  <div class="row">
  <div class="col-xs-12">
  <div class="hero">
  <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2021/09/city.jpg"/>
  <div class="text">
  <h1>Hej och välkommen!</h1>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed sodales mauris. Aliquam felis est, efficitur vel fringilla quis, vehicula quis ex.</p>
  </div>
  </div>
  </div>
  </div>
  </div>
  </section>
  </main>
  
 <?php
  get_footer();
 ?>
  
  </div>
  
  <script src="js/script.js"></script>
  
 </body>
 </html>