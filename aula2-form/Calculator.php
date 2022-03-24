<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
		$N1=$_GET["first"];
		$N2=$_GET["second"];
		
		$result=$N1+$N2;
        ?>
		<form method="get" action="calculator.php">
			<input type="text" name="first"> +
			<input type="tet" name="second"> </br>
			<?php echo "=", $result; ?>
			<input type="submit" value="Calcular">
		</form>
	
    </body>