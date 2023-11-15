<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Jeopardy!</title>
<link rel="stylesheet" href="style.css"> 
</head>
<body>
    <?php 
    
    include 'common.php';
    
    // Validate login credentials
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $enteredUsername = $_GET["username"];
        $enteredPassword = $_GET["password"];
    
        // Read the contents of registerinfo.txt
        $fileContent = file_get_contents("registerinfo.txt");
    
        // Explode the content into an array of lines
        $lines = explode("\n", $fileContent);
    
        // Loop through each line to check for a match
        foreach ($lines as $line) {
            list($storedUsername, $storedPassword) = explode(",", $line);
    
            // Trim to remove leading/trailing whitespaces
            $storedUsername = trim($storedUsername);
            $storedPassword = trim($storedPassword);
    
            // Check if entered credentials match
            if ($enteredUsername == $storedUsername && $enteredPassword == $storedPassword) {
                // Successful login, set session variable and redirect
                $_SESSION["username"] = $enteredUsername;
                header("Location: welcome.php"); // Replace welcome.php with your actual welcome page
                exit();
            }
        }
    
        // If no match found, display an error message and redirect to login.php
        echo "Error: Invalid username or password";
        header("Location: login.php");
        exit();
    }
    ?>
        ?>
<h1> Let's play Jeopardy!</h1>
<br><br>
<a href="index.php"><button class="button"><p>Start a new game</p></button></a>
<a href="leaderboard.php"><button class="button"><p>View leaderboards</p></button></a>
  



</body>
</html>