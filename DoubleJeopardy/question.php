<?php
    session_start();

    function csv_to_multidimension_array($filename='', $delimiter=',')
    {
        if(!file_exists($filename) || !is_readable($filename)) {
            return false;
        }
        $header = NULL;
        $data = array();
        if (($handle = fopen($filename, 'r')) !== false) {
            while (($row = fgetcsv($handle, 1000, $delimiter)) !== false ) {
                $data[] = $row;
            }
            fclose($handle);
        }
        return $data;
    }

    $questionsArr = csv_to_multidimension_array("questions.txt",",");
    $answersArr = csv_to_multidimension_array("answers.txt",",");
    $row = substr((float)$_GET['id'],0,1)-1;
    $col = substr((int)$_GET['id'],1,1)-1;
    $question = $questionsArr[(int)$row][(int)$col];
    $answer = $answersArr[(int)$row][(int)$col];

    echo("<br><br><h1>Question: ".$question."</h1><br>");
    if(isset($_POST['showAnswer'])){
        echo("<h2>What is ".$answer."</h2><br>");
    }

    $pointVal = ($row+1)*400;

    if(isset($_POST['team1'])){
        $_SESSION['score1'] = $_SESSION['score1'] + $pointVal;
        header("location:index2.php");
    }
    if(isset($_POST['team2'])){
        $_SESSION['score2'] = $_SESSION['score2'] + $pointVal;
        header("location:index2.php");
    }
    if(isset($_POST['incorrect'])){
        header("location:index2.php");
    }

    if(isset($_POST['Team1incorrect'])){
        $_SESSION['score1'] = $_SESSION['score1'] - $pointVal;
        header("location:index2.php");
    }
    if(isset($_POST['Team2incorrect'])){
        $_SESSION['score2'] = $_SESSION['score2'] - $pointVal;
        header("location:index2.php");
    }
    
    

?>

<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" href="questionCSS.css">
</head>
<body>
<div id = buttons>
    <form method="post" action="">
        <input type="submit" name="team1" value="Team 1 + <?php echo $pointVal; ?>">
        <input type="submit" name="team2" value="Team 2 + <?php echo $pointVal; ?>">
        <input type="submit" name="Team1incorrect" value="Team1 incorrect Incorrect Answer -<?php echo $pointVal; ?>">
        <input type="submit" name="Team2incorrect" value="Team2 incorrect Incorrect Answer -<?php echo $pointVal; ?>">
    </form>
    <form method="post" action="" onclick="this.style.display='none'">
        <input type="submit" name="showAnswer" value="Show Answer">
    </form>
</body>
</html>