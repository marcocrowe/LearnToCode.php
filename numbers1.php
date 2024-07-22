<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Numbers</title>
    </head>
    <body>
		<?php
		$number1 = 0;
		$number2 = 0;

		if (isset($_POST["sum-button"])) {
			$number1 = $_POST["number1-input"];
			$number2 = $_POST["number2-input"];

			$sum = $number1 + $number2;
			echo "$number1 + $number2 is $sum";
		} elseif (isset($_POST["subtract-button"])) {
			$number1 = $_POST["number1-input"];
			$number2 = $_POST["number2-input"];

			$subtract = $number1 - $number2;
			echo "$number1 - $number2 is $subtract";
		} elseif (isset($_POST["multiplication-table-button"])) {
			$number1 = $_POST["number1-input"];
			$number2 = $_POST["number2-input"];
			for ($multiplicationFactor = 1; $multiplicationFactor <= $number2; $multiplicationFactor++) {
				echo "$number1 * $multiplicationFactor is " . ($number1 * $multiplicationFactor) . "<br />";
			}
		}
		// put your code here
		?>
		<form method="post">
			<table>
				<tr>
					<th scope="row">Number 1:</th>
					<td><input name="number1-input" type="number" value="6"></td>
					<td></td>

				</tr>
				<tr>
					<th scope="row">Number 2:</th>
					<td><input name="number2-input" type="number" value="5"></td>
					<td></td>
				</tr>
				<tr>
					<td><input name="sum-button" type="submit" value="Sum Numbers"></td>
					<td><input name="subtract-button" type="submit" value="Subtract Numbers"></td>
					<td><input name="multiplication-table-button" type="submit" value="Numbers Multiplication Table"></td>
				</tr>
			</table>
		</form>
    </body>
</html>
