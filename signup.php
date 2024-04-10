<!DOCTYPE html>
<html>

<head>
  <title>Hangman</title>
  <link href="index.css" type="text/css" rel="stylesheet" />
</head>

<body>
  <form action="signup-submit.php" method="post" id="newuser_signup">
    <fieldset>
      <legend>New User Signup:</legend>
      <input type="text" name="input_name" placeholder="Enter your name" required>
      <button type="submit">Submit</button>
    </fieldset>
  </form>
  <br><br>
  <p id="text">Unravel the mystery, or meet your fate ...</p>
  <img id="index_bg" src="pics/main.jpeg" />
  <a href="index.php" id="back">BACK</a>
</body>

</html>