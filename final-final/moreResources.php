<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>MHATC | More Resources</title>
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all"/>
  <link rel="shortcut icon" href="images/favicon.ico" />
  <script type="text/javascript" src="scripts/jquery-3.2.1.js"></script>
  <script type="text/javascript" src="scripts/site.js"></script>
</head>

<body>
  <?php
  include ("includes/menuBar.php");
  ?>

  <h1 class="pageTitle">More Resources</h1>

    <div class="textContainer resourceContainer">
      <!-- resource links-->
      <div class="resource">
        <a href="http://www.mentalhealthamerica.net/" target="_blank"><img
          src="images/mentalHealthAmerica.png" alt="Mental Health America"></a>
      </div>
      <div class="resource">
        <a href="http://www.fcsith.org/" target="_blank"><img
          src="images/familyChildrensServiceIthaca.jpg"
          alt="Family & Children's Service of Ithaca"></a>
      </div>
      <div class="resource">
        <a href="http://www.lakeviewmhs.org/" target="_blank"><img src="images/Lakeview.png"
          alt="Lakeview"></a>
      </div>
      <div class="resource" id = "nami">
        <a href="http://www.nami.org/" target="_blank"><img src="images/namiLogo.jpeg"
          alt="NAMI"></a>
      </div>
      <div class="resource">
        <a href="http://www.nationaleatingdisorders.org/" target="_blank"><img
          src="images/nedaLogo.png" alt="NEDA"></a>
      </div>
      <div class="resource">
        <a href="http://www.nimh.nih.gov/index.shtml" target="_blank"><img
          src="images/nimhLogo.jpeg" alt="NIMH"></a>
      </div>
      <div class="resource">
        <a href="http://selfinjury.bctr.cornell.edu/" target="_blank"><img
          src="images/cornellResearchSelfInjuryAndRecovery.png"
          alt="Cornell Research Program on Self Injury and Recovery"></a>
      </div>
      <div class="resource" id = "moneygeek">
        <a href="http://www.moneygeek.com/education/student-loans-mental-health/"
        target="_blank"><img id = "moneygeek" src ="images/moneygeek.png" alt = "Student Loan Stress
        & Mental Health: Recognize Signs"></a>
      </div>
      <div class="clear"></div>
    </div>


  <?php
  include ("includes/footer.php");
  ?>
</body>
</html>
