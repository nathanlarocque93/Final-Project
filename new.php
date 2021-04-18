<!-- Step 1: (2 points) Include your header here -->
<?php include_once('_header.php') ?>
<!-- Step 2: (1 points) Create a link back to home.php -->
<!-- CREATE YOUR LINK BELOW THIS LINE -->
<p><a href='index.php'>Home</a></p>
<!-- Step 3: (15 points) Create a form that has a field for the following columns -->
<!-- first_name, last_name, date_of_birth,  alias, active -->
<!-- Ensure you don't forget the name attribute for each field -->

<!-- Step 4: (4 points) Add the action and method attributes -->
<!-- Ensure you use the correct HTTP method and point the action at the correct processing page -->
<!-- CREATE YOUR FORM BELOW THIS LINE -->
<form action="insert.php" method="post">
    <div>
        <label>supers</label>
    </div>

    <div>
        <label>first name</label>
        <input type="text" name="first_name">
    </div>

    <div>
        <label>last name</label>
        <input type="text" name="last_name">
    </div>

    <div>
        <label>date of birth</label>
        <input type="date" name="date_of_birth">
    </div>

    <div>
        <label>alias</label>
        <input type="text" name="alias">
    </div>

    <div>
        <label>active</label>
        <input type="boolean" name="active">
    </div>

    <div>
        <label>hero</label>
        <input type="boolean" name="hero">
    </div>

    <button type="submit">Create</button>

<!-- Step 5: (2 points) Include your footer here -->
<?php include_once('_footer.php') ?>


<!-- TOTAL POINTS POSSIBLE: 24 -->