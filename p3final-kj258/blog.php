<?php
$HIDDEN_ERROR_CLASS = "hiddenError";
$submit = $_REQUEST["submit"];
if (isset($submit)) {
  $firstName = $_REQUEST["firstName"];
  $post = $_REQUEST["post"];
#  $email = $_REQUEST["userEmail"];

  // if the first name field is not empty:
  if ( !empty($firstName) ) {
    // the first name is valid
    $fnameValid = true;
  } else {
    // the first name is not valid
    $fnameValid = false;
  }
  if (!empty($post)) {
    $postValid = true;
  } else {
    $postValid = false;
  }

  // the form is valid if the first name, last name, and post is valid.
  $formValid1 = ($fnameValid &&  $postValid);
  // if valid, allow submission
  if ($formValid1) {
    // redirect to formSubmitted.php
    session_start();
    $_SESSION['firstName'] = $firstName;
    $_SESSION['post'] = $post;
    header("Location: submitted.php");
    return;
  }
} else {
  // no form submitted
  //
  $fnameValid = true;
  $postValid = true;

}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title> Blog </title>
  <link rel="stylesheet" type="text/css" href="../styles/all.css" media = "all"/>
  <script src="scripts/jquery-3.2.1.min.js" type="text/javascript"></script>
  <script src="scripts/clientValidation.js" type="text/javascript"></script>
</head>

<body>
  <div id = content>
  <h1> We Came, We saw, We ate a lot of Apples </h1>

  <?php include 'includes/navigation.php';?>


  <p class = intro> The Ithaca Harvest Festival was inaugrated in 1982 and every year
    everybody has had lots of fun. Check out what some of our past-goers had to say! </p>


  <div class = post>
    <p>I went to the Harvest Festival last year and it was amazing! Unfortunately it's smack dab in the middle of
    our first round of exams, but I'm so glad I went. It was a great stress relief! My friends and I did a lot--but
    of course we ate a lot of apples. </p>
    <p> I've marked it in my calender, and I'm coming back next year!  -Susy  </p>
  </div>


  <div class = post>
    <p> It was really nice! It was really nice to get off campus and see what local Ithaca has to offer. I'm a sophomore and feel like
      I now truly know what Ithaca has to offer. Also, it was really refreshing to step away from the bussyness of school and just enjoy
      fall food. There was so much food from local companies and stuff, it was really charming.  -- Mathew Guo
    </p>
  </div>

  <p> Want to share your own experiences at the Apple Harvest Festival? Submit your story below! </p>

  <form method="post" action="blog.php" id="mainForm" novalidate>
    <div class = input>
      <label for = "firstName"> First Name: </label>
      <input id="firstName" name="firstName" placeholder="First Name" value="<?php echo($firstName);?>" type = "text" required>
    </div>
    <span class="errorContainer <?php if ($fnameValid) { echo($HIDDEN_ERROR_CLASS);} ?>"   id = "errorMsgFName" >
      Please write your first name
    </span>
    <div class = input>
      <label for = "lastName"> Last Name: </label>
      <input id="lastName" name="lastName" placeholder="Optional" type = "text" >
    </div>
    <div class = input1>
      <label for = "post"> Post: </label>
    </div>
    <div class = input>
      <textarea  id = "post" name = "post" placeholder = "Please type your story here and press submit"
      rows="40" cols="57"  required><?php echo($post)?></textarea>
    </div>
    <span class="errorContainer <?php if ($postValid) { echo($HIDDEN_ERROR_CLASS);} ?>" id = "errorMsg">
      Please write your story before submitting
    </span>
    <div class = input3>
      <button type="submit" name = "submit" class = "submit">Post your story!</button>
    </div>
    </form>


  <div id = space>
  </div>
  <?php include 'includes/footer.php';?>
  </div>


</body>
