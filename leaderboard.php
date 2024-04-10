<?php
// Read user login info file and store user data
$file_path = 'users.txt';

$_SESSION['userData'] = [];

// Check if the file exists before attempting to open it
if (file_exists($file_path)) {
    $file = fopen($file_path, "r");
    while (!feof($file)) {
        $line = fgets($file);
        $username = trim($line);
        // Ensure the array has at least three elements before proceeding
        if (!empty($username)) {
            $randomNumber = rand(0, 12);
            $_SESSION['userData'][$username] = ['Wins' => $randomNumber];
        }
    }
    fclose($file);

    // Sort user data based on number of wins
    arsort($_SESSION['userData']); // Sort in descending order based on wins
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leaderboard</title>
    <link href="index.css" type="text/css" rel="stylesheet" />
</head>

<body bgcolor="white">
    <a href="index.php" id="game_back">Back to main page</a>

    <img id="game_bg" src="pics/gamebg.jpg" />
    <p id="name1">L E A D E R B O A R D</p>
    <div class="leaderboard-container">
        <table id='userData'>
            <tr>
                <th>Username</th>
                <th>Wins</th>
            </tr>
            <?php
            $rank = 1;
            foreach ($_SESSION['userData'] as $username => $userInfo) {
                echo "<tr>";
                echo "<td>$username</td>";
                echo "<td>{$userInfo['Wins']}</td>";
                echo "</tr>";
                $rank++;
            }
            ?>
        </table>
    </div>
</body>

</html>