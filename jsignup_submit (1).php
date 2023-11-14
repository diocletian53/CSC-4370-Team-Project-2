<!DOCTYPE html>
<html>
    
	<head>
        <title>Jeopardy Signup</title>
        <link href="style2.css" type="text/css" rel="stylesheet" />
    </head>
	<body>
	<?php
            // create variables from form
            $name = $_POST['name'];
            $password = $_POST['password'];
			
			
			// validate form fields
            $validForm = true;
            if (empty($name) || empty($password)){
				$validForm = false;
                echo "<p>All fields are required.</p>";
			}
			else if ($validForm) {
				$file = fopen("users.txt", "a") or die("Unable to open file!");
				fwrite($file, $name . "," . $password . "\n");
				fclose($file);
				echo "<p>Thank you! Your profile has been successfully added.</p>";
				echo "<p>Go on and have fun now " . $name . "! <br />";
			}
			else {
                echo "<p>Sorry, your profile was not added.</p>";
                echo "<p>Please go back and try again.</p>";
            }
	?>
	</body>
</html>	