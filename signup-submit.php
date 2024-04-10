<!DOCTYPE html>
<html>

<head>


  <title>Hangman</title>
  <link href="index.css" type="text/css" rel="stylesheet" />
</head>

<body>
  <?php
  // Check if form fields are empty
  if (empty($_POST['input_name'])) {
    // Display error message and provide a link to go back to the signup page
    echo "<h1>Error</h1>";
    echo "<p><h1>Name is required. Please <a href='signup.php'>go back</a> and fill in name.</h1></p>";
  } else {
    // Retrieve form data
    $name = $_POST['input_name'];

    // Check if the name already exists in the system
    $file = file_get_contents("users.txt");
    $lines = explode("\n", $file);
    foreach ($lines as $line) {
      $data = explode(",", $line);
      if ($data[0] === $name) {
        echo "<div class='greeting'>";
        echo "<h1 style='margin-top: 23%';>Error</h1>";
        echo "<p id='user_exist' ><h1>A user with the name '$name' already exists. <br>Please choose a different name.</h1></p>";
        echo "</div>";
        echo "<p id='text'>Unravel the mystery, or meet your fate ...</p>";
        echo "<img id='index_bg' src='pics/main.jpeg' />";
        echo '<a href="signup.php" style="margin-top: -16%;" id="back">BACK</a>';
        exit;
      }
    }

    // If the name is unique, continue
    echo '<div id="welcome">';
    echo "<h1>Thank you!</h1>";
    echo "Welcome to The Hangman, " . $name . "! <br><br>";
    echo "Now <a href='login.php'>log in to play!</a><br><br>";
    echo "</div>";

    // Format user's data and append it to the singles.txt file

    $data = "$name\n";
    file_put_contents("users.txt", "\n" . $data, FILE_APPEND | LOCK_EX);
  }
  ?>
  <p id="text">Unravel the mystery, or meet your fate ...</p>

  <img id="index_bg" src="pics/main.jpeg" />

  <img id="index_bg" src="pics/main.jpeg" />
  <!-- <a href="index.php" id="back">BACK</a> -->
</body>

</html>