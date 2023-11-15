<?php 
	session_start(); /* Starts the session */
	// Check if the link has been visited during the session
	if (isset($_SESSION['visited_links']) && in_array('link_id', $_SESSION['visited_links'])) {
		echo '<style>.flex-container > td a#link_id:visited { color: lightblue; }</style>';
	}

	// When the link is clicked, mark it as visited
	if (isset($_GET['link_visited'])) {
		$visited_link = $_GET['link_visited'];
		$_SESSION['visited_links'][] = $visited_link;
	}
	session_destroy(); /* Destroy started session */
	header("location:login.php");
	exit;
?>
