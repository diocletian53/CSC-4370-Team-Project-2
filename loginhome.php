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
        $user = $_GET["username"].$_GET["password"];
    ?>
<h1> Let's play Jeopardy!</h1>
<br><br>
<a href="index.php"><button class="button"><p>Start a new game</p></button></a>
<a href="leaderboard.php"><button class="button"><p>View leaderboards</p></button></a>
  



</body>
</html>