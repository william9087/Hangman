<!DOCTYPE html>
<html>
  <head>
    <!-- <link
      href="https://fonts.googleapis.com/css2?family=Creepster&family=Eater&family=Nosifer&display=swap"
      rel="stylesheet"
    /> -->

    <title>Hangman</title>
    <link href="index.css" type="text/css" rel="stylesheet" />
  </head>
  <body>
  <form action="mode.php" method="post">
        <fieldset>
            <legend>Returning User:</legend>
            
            <label for="name"><strong>Name:</strong></label>
            <input type="text" id="input_name" name="input_name" maxlength="10" required>
            <br><br>

            <input type="submit" value="Play">

        </fieldset>
    <p id="text">Unravel the mystery, or meet your fate ...</p>

    <img id="index_bg" src="pics/main.jpeg" />

    <img id="index_bg" src="pics/main.jpeg" />
    <a href="index.php" id="back">BACK</a>
  </body>
</html>
