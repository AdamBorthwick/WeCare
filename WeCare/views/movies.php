<!DOCTYPE html>
<html lang="en">
  <!--
  views/countries.php
  This page is included by index.php after our SQL query has finished. 
  It has the purpose of rendering our data into a pleasing "view".
  -->
  <head>
    <meta charset="utf-8">
    <title>Movies</title>
    <!-- Typography and icons help bring data to life. Here we include Google Fonts and Material icons to add vibes.-->
    <!-- Google Fonts: https://fonts.google.com/ --> 
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300;500&display=swap" rel="stylesheet">
    <!-- Material Icons: https://fonts.google.com/icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- This stylesheet lives in our "public" folder -->
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <div class="header-fixed headergrid">
      Netflix Content Finder
      
      <?php

      require 'navigation.php'; 
      ?>
    </div>
    

    
       
<div class="input-group">

</div>
    </div>
    <div class="grid" id ="gridSection">
    <?php
    // this "foreach" loop iterates over our query results from MySQL
    // on each iteration, a new row of data is loaded into $country
    foreach ($movies as $movie){
      
      echo $movie->card();
      

    }
    ?>
    </div>
  </body>
</html>