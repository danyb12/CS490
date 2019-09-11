<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="single-card">
            <div class="card">

                <h1 class="card-title">Home</h1>

				<?php
					echo $_POST["username"];
					echo"<br>";
					echo $_POST["password"];
				?>
            </div>
        </div>
    </body>
</html>