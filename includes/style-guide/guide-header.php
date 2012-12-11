<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Agile Patterns</title>
  
    <link type="text/css" rel="stylesheet" href="css/style.css" media="all" />
    <link type="text/css" rel="stylesheet" href="css/pattern-browser.css" media="all" />

    <link href='http://fonts.googleapis.com/css?family=Permanent+Marker' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,300,400italic' rel='stylesheet' type='text/css'>
    <script src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript">

     // StickNav for second level menus (e.g in the 'Style Guide' section)
     $(function() {

       // grab the initial top offset of the navigation
       var stickynav = $('.stickynav');
       var stickynavContainer = $('.stickynav-container');
       var stickynavTopOffset = stickynav.offset().top;
        // everytime the user scrolls
        $(window).scroll(function() {
          // if the user scrolls further down that the top offset
         if ($(window).scrollTop() > stickynavTopOffset) {
           // add a class
           stickynav.addClass('stickynav-fixed');
           stickynavContainer.css({ 'height':stickynav.outerHeight() });
         } else {
          // when the user scrolls back up - remove the class
           stickynav.removeClass('stickynav-fixed');
           stickynavContainer.css({ 'height':'auto' });
         }
       });

     });
    </script>
  </head>
  <body>
  <a id="top"></a>
  <nav>
    <div class="pb-menu-primary">
      <div class="pattern-browser-content-wrapper">
      <div class="pb-logo">
        <img src="img/dcl-logo.png" id="pb-logo-icon" />
        
      </div>        
        <ul class="menu">
          <li><a href="./index.php">Home</a></li>
          <li><a href="./style-guide.php">Style Guide</a></li>
          <li><a href="./patterns.php">Patterns</a></li>
          <li><a href="./layouts.php">Layouts</a></li> 
        </ul>
      </div>
    </div>
  </nav>