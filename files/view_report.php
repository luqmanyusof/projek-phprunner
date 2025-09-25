<?php
// view_report.php
require_once("include/dbcommon.php");

// Start the session to access the session variables
RunnerPage::sessionStart();

// Check if the session variable is set
$location = "";
if (isset($_SESSION["current_location"])) {
  $location = $_SESSION["current_location"];
}

?>

<!DOCTYPE html>
<html>
<head>
  <title>View Report</title>
</head>
<body>

  <h1>Weather Report</h1>
  <?php
    if ($location != "") {
      // Here you would use the $location variable to filter your data or display information.
      // For this example, we'll just display the value.
      echo "<p>Currently viewing weather data for: <strong>" . htmlspecialchars($location) . "</strong></p>";
    } else {
      echo "<p>No location selected. Please go to the 'Set Location' page first.</p>";
    }
  ?>
  
  <!-- You can add your chart or a list of records here,
       filtered by the $location variable. -->

</body>
</html>