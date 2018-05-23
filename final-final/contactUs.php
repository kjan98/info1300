<?php
  session_start();
  $_SESSION["name"]=htmlspecialchars($_REQUEST["name"]);


    $HIDDEN_ERROR_CLASS = "hiddenError";

    $submit = $_REQUEST["submit"];
    if (isset($submit)) {
      error_log("submit attempted");

      /*name*/
      $name = htmlspecialchars($_REQUEST["name"]);
      $nameValid = !empty($name);

      /*email*/
      $email = htmlspecialchars($_REQUEST["email"]);
      $isEmailEmpty = empty($email);
      $isEmailAddress = filter_var($email, FILTER_VALIDATE_EMAIL);
      $emailValid = !$isEmailEmpty && $isEmailAddress;

      $message = htmlspecialchars($_REQUEST["message"]);

      /*form Valid*/
      $formValid = $nameValid && $emailValid;
      if ($formValid) {
        header("Location: contactUsSubmitted.php");
        return;
      } else {
        error_log("form was not submitted");
      }
    } else {
      $nameValid = true;
      $emailValid = true;
      $isEmailAddress = true;
      $isEmailEmpty = false;
    }
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

<iframe id = "map" class = "clear" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5868.804164478995!2d-76.50451804136742!3d42.43647408481383!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d0819e65f10623%3A0x63842eecb51f0133!2sThe+Mental+Health+Association+in+Tompkins+County!5e0!3m2!1sen!2sus!4v1512335724070"
allowfullscreen></iframe>


    <p class = "info"><span class = "bold">Location:</span> 301 South Geneva Street, Suite 109,
      Ithaca, New York 14850</p>
    <p class = "info"><span class = "bold">Phone</span>: (607) 273-9250</p>
    <p class = "info"><span class = "bold">Fax</span>: (607) 272-5343 </p>
    <p class = "info"><span class = "bold">Email</span>: <a class = "links" href="mailto:info@mhaedu.org">info@mhaedu.org</a><p>
    <p class = "info"><span class = "bold">Hours</span> : Monday to Friday: 9:00am – 4:30pm</p>
    <p class = "info">We are closed on federally observed holidays.</p>


    <div class="clear"></div>
    <div id="form">
      <form action="contactUs.php" method="POST" novalidate>
        <h3>Send Us a Message!</h3>
        <h6><span class="star">*</span>Required</h6>
        <div>
          <label for="name">Name<span class="star">*</span>:</label>
          <input type="text" id="name" name="name" placeholder="John Doe" required
          value ="<?php echo($name)?>">
          <p class="errorContainer <?php if ($nameValid) { echo($HIDDEN_ERROR_CLASS);} ?>"
             id="nameError">
              Name is required.
          </p>
        </div>

        <div>
          <label for="email">Email<span class="star">*</span>:</label>
          <input type="email" id="email" name="email" required
          placeholder="jdoe@gmail.com" value="<?php echo($email)?>">
          <p class="errorContainer <?php if (!($isEmailEmpty)) { echo($HIDDEN_ERROR_CLASS);} ?>"
             id="emailError">
              Email is required.
          </p>
          <p class="errorContainer <?php if (($isEmailEmpty) || $isEmailAddress) { echo($HIDDEN_ERROR_CLASS);} ?>"
            id="emailErrorTwo">
              Must be in email format.
          </p>
        </div>

        <div>
          <label for="message">Message:</label>
          <textarea id="message" name="message"><?php if(isset($message))
            {echo($message);}?></textarea>
        </div>

        <div>
          <button type="submit" id="submit" name="submit">Submit</button>
        </div>
      </form>
    </div>

    <div class="clear"></div>

  </div>
</div>

</div>
    <?php
    include ("includes/footer.php");
    ?>

  </body>
  </html>
