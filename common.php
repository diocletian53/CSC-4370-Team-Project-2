<?php

function saveUser($uName, $pWord){
  if(isset($uName) && isset($pWord)){
			$inString = "\r\n".$uName.",". $pWord;
			$fp = fopen('registerinfo.txt', 'a');
			fwrite($fp, $inString);
      fclose($fp);
		}
}

function readLeaderBoard(){
  $lboard = explode(";", file_get_contents("leaderboard.txt"));
  echo"<p>LeaderBoard</p><hr>";
  foreach($lboard as $board){
    echo "</br>".$board;      
  }
}
