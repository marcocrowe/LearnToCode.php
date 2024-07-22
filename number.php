<?php

class PageForm
{
    const NUMBER1_INPUT = "number1-input";
    const NUMBER2_INPUT = "number2-input";
    const SUM_BUTTON = "sum-button";
    const SUBTRACT_BUTTON = "subtract-button";
    const MULTIPLICATION_TABLE_BUTTON = "multiplication-table-button";

    public static function isSumButtonPresent(): bool
    {
        return isset($_POST[self::SUM_BUTTON]);
    }
    public static function isSubtractButtonPresent(): bool
    {
        return isset($_POST[self::SUBTRACT_BUTTON]);
    }
    public static function isMultiplicationTableButtonPresent(): bool
    {
        return isset($_POST[self::MULTIPLICATION_TABLE_BUTTON]);
    }

    public static function getNumber1()
    {
        return $_POST[self::NUMBER1_INPUT];
    }
    public static function getNumber2()
    {
        return $_POST[self::NUMBER2_INPUT];
    }
}

function echoPagePost()
{
    $number1 = PageForm::getNumber1();
    $number2 = PageForm::getNumber2();

    if (PageForm::isSumButtonPresent()) {
        $sum = $number1 + $number2;
        echo "$number1 + $number2 is $sum";
    } elseif (PageForm::isSubtractButtonPresent()) {
        $subtract = $number1 - $number2;
        echo "$number1 - $number2 is $subtract";
    } elseif (PageForm::isMultiplicationTableButtonPresent()) {
        for ($multiplicationFactor = 1; $multiplicationFactor <= $number2; $multiplicationFactor++) {
            echo "$number1 * $multiplicationFactor is " . ($number1 * $multiplicationFactor) . "<br />";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Numbers</title>
</head>

<body>
    <?php echoPagePost(); ?>
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
