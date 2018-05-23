<?php   session_start();
  $name = $_SESSION["name"];
  ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>MHATC | Contact Us</title>
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all"/>
  <link rel="shortcut icon" href="images/favicon.ico" />
  <script type="text/javascript" src="scripts/jquery-3.2.1.js"></script>
  <script type="text/javascript" src="scripts/site.js"></script>
  <script type="text/javascript" src="scripts/processForm.js"></script>
</head>

<body>
  <?php
  include ("includes/menuBar.php");
  ?>
  <div class="textContainer">
  <div id = "contactUsContent">
    <h1 class = "pageTitle"> Contact Us</h1>
    <!--content provided by Client-->
    <p class = "info"><span class = "bold">The MHATC offices are located at:</span> 301 South Geneva Street, Suite 109
      Ithaca, New York 14850</p>
    <p class = "info"><span class = "bold">Phone</span>: (607) 273-9250</p>
    <p class = "info"><span class = "bold">Fax</span>: (607) 272-5343 </p>
    <p class = "info"><span class = "bold">Email</span>: <a class = "links" href="mailto:info@mhaedu.org">info@mhaedu.org</a><p>
    <p class = "info"><span class = "bold">Hours</span> : Monday to Friday: 9:00am – 4:30pm</p>
    <p class = "info">We are closed on federally observed holidays.</p>
    <div id = "space">

    <div class="echoForm">
      <p>Thank you for your message, <?php echo($name); ?>. We will get back to
        you as soon as we can.</p>
    </div>

  </div>
</div>

</div>
    <?php
    include ("includes/footer.php");
    ?>

  </body>
  </html>
