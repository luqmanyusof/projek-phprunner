<?php
// set_location.php
require_once("include/dbcommon.php");

// Start the session to be able to use session variables
RunnerPage::sessionStart();

// Check if the form has been submitted
if (postvalue("submit_location")) {
  $_SESSION["current_location"] = postvalue("location");
  $message = "Session variable 'current_location' has been set to: " . $_SESSION["current_location"];
}

?>

<!DOCTYPE html>
<html>
<head>
  <title>Set Location</title>
</head>
<body>

  <h1>Set Location for Report</h1>
  <?php if (isset($message)) { echo "<p style='color:green;'>" . $message . "</p>"; } ?>
  
  <form method="post" action="set_location.php">
    <label for="location">Enter Location:</label>
    <input type="text" id="location" name="location">
    <input type="submit" name="submit_location" value="Set Location">
  </form>

</body>
</html>