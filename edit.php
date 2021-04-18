<?php
  // Step 1: (2 points) Include your connection
  // CREATE YOUR CONNECTION BELOW THIS LINE
  include('_connect.php');
  // Step 2: (8 points) Retrieve the 'supers' row from your database
  // Ensure you use the condition to get only the one specific row
  // CREATE YOUR QUERY LOGIC BELOW THIS LINE

  $sql = "SELECT * FROM supers WHERE id = {$_GET["id"]}";
  $result = mysqli_query($mysqli, $sql);

  $row = mysqli_fetch_assoc($result);
?>

<!-- Step 3: (2 points) Include your header here -->
<?php include_once('_header.php') ?>
<!-- Step 4: (1 points) Create a link back to home.php -->
<!-- CREATE YOUR LINK BELOW THIS LINE -->
<p><a href='index.php'>Home</a></p>
<!-- Step 5: (15 points) Create a form that has a field for the following columns -->
<!-- first_name, last_name, date_of_birth,  alias, active -->
<!-- Ensure you don't forget the name attribute for each field -->

<!-- Step 6: (4 points) Add the action and method attributes -->
<!-- Ensure you use the correct HTTP method and point the action at the correct processing page -->

<!-- Step 7: (10 points) Prepopulate the form with the values from the retrieved row -->
<!-- CREATE YOUR FORM BELOW THIS LINE -->
<form action="update.php" method="post">
  <input type= "hidden" name= "id" value= "<?= $row["id"] ?>">  
  <div>
    <label>First name</label>
    <input type="text" name="first_name" value= "<?= $row["first_name"] ?>">
  </div>

  <div>
    <label>Last name</label>
    <input type="text" name="last_name" value= "<?= $row["last_name"] ?>">
  </div>

  <div>
    <label>Date of birth</label>
    <input type="date" name="date_of_birth" value= "<?= $row["date_of_birth"] ?>">
  </div>

  <div>
    <label>alias</label>
    <input type="text" name="alias" value= "<?= $row["alias"] ?>">
  </div>

  <div>
    <label>active</label>
    <input type="boolean" name="active" value= "<?= $row["active"] ?>">
  </div>

  <div>
    <label>hero</label>
    <input type="boolean" name="hero" value= "<?= $row["hero"] ?>">
  </div>

  <button type="submit">Update</button>
<!-- Step 8: (2 points) Include your footer here -->
<?php include_once('_footer.php') ?>


<!-- TOTAL POINTS POSSIBLE: 44 -->