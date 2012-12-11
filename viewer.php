<?php
 /** 
  * @file viewer.php
  * Simple script to allow viewing individual files
  * Used to view patterns on their own
  */
?>
<?php include('includes/style-guide/guide-header.php'); ?>
<br />
<?php
  // Get the path & filname from the URL
  $file_view = $_GET['view'];
  
  // check it's not an absolute path as this could access files outside the web root
  if(substr($file_view, 0,1) == '/') {
    echo "Cannot use absolute paths.";
  } else {
    // check file actually exists
    if(file_exists($file_view)) {
     include($file_view);
    } else {
     echo "Sorry file does not exist.";
    }
  }
?>

<?php include('includes/style-guide/guide-footer.php'); ?>