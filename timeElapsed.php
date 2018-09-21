<?php
session_start();
  if(!isset($_SESSION['totalGames'])) {
  $_SESSION['totalGames'] = 0;
  $_SESSION['totalTime'] = 0;
  }
?>
<?php
    $start = microtime(true);
    function displayElapsedTime() {
      global $start;
      $elapsedSecs = round((microtime(true) - $start), 3);
      $_SESSION['totalTime'] += $elapsedSecs;
      echo "Duration: " . $elapsedSecs . " seconds " . "<br />";
      $ave = $_SESSION['totalTime'] / $_SESSION['totalGames'] ;
      echo "Average Time: " . $ave . "secs" . "<br />";
      echo "Rounds of Game Plays: " . $_SESSION['totalGames'];

    }
?>    
