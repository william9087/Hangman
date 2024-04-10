<!DOCTYPE html>
<html>

<head>
  <title>Hangman</title>
  <link href="index.css" type="text/css" rel="stylesheet" />
</head>

<body>
  <div class="title">
    <p id="name">T H E - H A N G M A N</p>

    <?php
    session_start();

    $name = $_POST['input_name'];
    $file = file_get_contents("users.txt");

    // Check if the entered username exists in the file
    if (strpos($file, $name) === false) {
      // Username doesn't exist, display error message and prevent further action
      echo "<div id='error_exist'>";
      echo "<h1>Error</h1>";
      echo "<p><h1>User '$name' does not exist. Please <a href='signup.php'>sign up</a> first.</h1></p>";
      echo "</div>";
      exit; // Stop further execution
    }

    // Username exists, proceed with the game
    echo "<div id='greeting'>";
    echo "Have fun playing $name!";
    echo "</div>";

    ?>

    <div class="button">
      <a href="easy.php" id="easy_mode">Easy</a><br />
      <a href="medium.php" id="medium_mode">Medium</a><br />
      <a href="hard.php" id="hard_mode">HARD</a>
    </div>
    <a href="index.php" id="back">BACK</a>
  </div>
  <p id="text">Unravel the mystery, or meet your fate ...</p>

  <img id="index_bg" src="pics/main.jpeg" />
</body>

</html>