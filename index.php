<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="refresh" content="3600; url=./">

  <title>Christmas Calendar</title>

  <link rel="preload" href="./css/style.css" as="stylesheet">
  <link rel="preload" href="./css/font/product-sans/ProductSans-Regular.woff2" as="font" crossorigin type="font/woff2">
  <link rel="preload" href="./css/font/product-sans/stylesheet.css" as="stylesheet" crossorigin>
  
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" defer></script>
  <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.js" defer></script>
  <script src="./js/main.js" defer></script>

  <link rel="stylesheet" href="./css/style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=IBM+Plex+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Courier+Prime:ital,wght@0,400;0,700;1,400;1,700&family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> 
  <!-- <link rel="stylesheet" href="./css/font/import.css"> -->
  <link rel="stylesheet" href="./css/font/product-sans/stylesheet.css">
  <link rel="shortcut icon" href="./img/favicon/present.png" type="image/x-icon">
</head>

<body>
  <?php

  /* 
    Bruke cookies til å finne ut hvilke luker brukeren har åpnet.
    calendar[i].onclick = function(){
      openedCalendars += calendar[i];
      setcookie
    }
   */

  include './php/hasCalendar.php';
  include './php/displayCalendar.php';

  hasCalendar();
  ?>
</body>

</html>