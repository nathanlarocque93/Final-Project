<?php
  // Step 1: (2 points) Include your connection
  // CREATE YOUR CONNECTION BELOW THIS LINE
  include('_connect.php');
  // Step 2: (17 points) Insert the new 'supers' row into the database
  // CREATE YOUR QUERY LOGIC BELOW THIS LINE"
  $sql = "INSERT INTO supers (
    first_name,
    last_name,
    date_of_birth,
    alias,
    active,
    hero
  ) VALUES (
    '{$_POST['first_name']}',
    '{$_POST['last_name']}',
    '{$_POST['date_of_birth']}',
    '{$_POST['alias']}',
    {$_POST['active']},
    {$_POST['hero']}
  )";
  // Step 3: (16 points) Perform basic error handling and redirect the user with a success or error message
  // Ensure you store the messages into the $_SESSION
  // Ensure you exit after your redirect
  // CREATE YOUR ERROR HANDLING BELOW THIS LINE

  $result = mysqli_query($mysqli, $sql);

  session_start();

   if ($result) {
    $_SESSION["message"] = "The new super was created successfully";
  } else {
    $error = mysqli_error($mysqli);
    $_SESSION["message"] = "There was an error creating the new super: " . $error;
  }

  header("Location: notification.php");
  exit();
  // TOTAL POINTS POSSIBLE: 35
?>