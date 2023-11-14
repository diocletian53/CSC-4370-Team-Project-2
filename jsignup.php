<!DOCTYPE html>
<html>
    
	<head>
        <title>Jeopardy Signup</title>
        <link href="style2.css" type="text/css" rel="stylesheet" />
    </head>
	<body>
		<div>
			<h1>Sign Up Now!</h1>
            <p>
                Create Username and Password to access Jeopardy!
            </p>

            <form action="jsignup_submit.php" method="post">
                <fieldset>
                    <legend>New User Signup:</legend>
                    <strong>Name:</strong>
                    <input type="text" name="name" size="16" />
					<br>
                    <strong>Password:</strong>
                    <input type="text" name="password" size="16" />
                    <input type="submit" value="Sign Up" />
                </fieldset>
            </form>
        </div>
	
		