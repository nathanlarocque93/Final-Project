<?php
  // Step 1: (2 points) Include your connection
  // CREATE YOUR CONNECTION BELOW THIS LINE
  include('_connect.php');
  // Step 2: (20 points) Update the existing 'supers' row in the database
  // CREATE YOUR QUERY LOGIC BELOW THIS LINE
  $sql = "UPDATE supers SET
    first_name = '{$_POST['first_name']}',
    last_name = '{$_POST['last_name']}',
    date_of_birth = '{$_POST['date_of_birth']}',
    alias = '{$_POST['alias']}',
    active = {$_POST['active']},
    hero = {$_POST['hero']}
  WHERE id = {$_POST['id']}";
  // Step 3: (16 points) Perform basic error handling and redirect the user with a success or error message
  // Ensure you store the messages into the $_SESSION
  // Ensure you exit after your redirect
  // CREATE YOUR ERROR HANDLING BELOW THIS LINE

  $result = mysqli_query($mysqli, $sql);

  session_start();
  if ($result) {
    $_SESSION["message"] = "The super was updated successfully.";
  } else {
    $_SESSION["message"] = "There was an error updating the record: " . mysqli_error($mysqli);
  }

  header("Location: notification.php");
  exit();

  // TOTAL POINTS POSSIBLE: 38
?>