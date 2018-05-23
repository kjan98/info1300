<?php   session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title> Blog </title>
  <link rel="stylesheet" type="text/css" href="../styles/all.css" media = "all"/>
</head>

<body>
  <div id = content>
  <h1> Thanks for Submitting! </h1>

  <?php include 'includes/navigation.php';?>

  <p> Thanks for submitting your memories to our site! Here's an approximation of what your post
    will look like. We hope to see you next year! </p>

  <div>
  <?php


  $blogPost = filter_var($_SESSION["post"], FILTER_SANITIZE_STRING);
  $fName = filter_var($_SESSION["firstName"], FILTER_SANITIZE_STRING);
  $lName = filter_var($_SESSION["lastName"], FILTER_SANITIZE_STRING);
#  $email = filter_var($_SESSION["userEmail"], FILTER_SANITIZE_STRING);

    echo $blogPost;
    echo "      --";
    echo $fName;
    echo " ";
    echo $lName;
    echo "<br>";

    ?>
  </div>




    <div id = space>
    </div>
  <?php include 'includes/footer.php';?>
</div>
</body>
