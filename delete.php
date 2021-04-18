<?php
  // Step 1: (2 points) Include your connection
  // CREATE YOUR CONNECTION BELOW THIS LINE
  include('_connect.php');
  // Step 2: (20 points) Delete the existing 'supers' row from the database
  // CREATE YOUR QUERY LOGIC BELOW THIS LINE
  $sql = "DELETE FROM supers
  WHERE id = {$_GET['id']}";
  // Step 3: (16 points) Perform basic error handling and redirect the user with a success or error message
  // Ensure you store the messages into the $_SESSION
  // Ensure you exit after your redirect
  // CREATE YOUR ERROR HANDLING BELOW THIS LINE

  $result = mysqli_query($mysqli, $sql);

  session_start();
  if ($result) {
    $_SESSION["message"] = "The person was deleted successfully.";
  } else {
    $_SESSION["message"] =  "There was an error updating the record: " . mysqli_error($mysqli);
  }

  header("Location: notification.php");
  exit();
  
  // TOTAL POINTS POSSIBLE: 38
?>