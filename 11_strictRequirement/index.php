<?php declare(strict_types=1);

?>
<!DOCTYPE html>
<html>
<body>

<?php 


# strict function
function multipyTwoNumbers(int $numberC, int $numberD) {
    return $numberC * $numberD;
}

echo multipyTwoNumbers(5, 4)."<br/>";

# default argument value
function sumTwoNumbers(int $numberA, int $numberB = 5) {
    return $numberA + $numberB;
}

echo sumTwoNumbers(50)."<br/>";

# return type declaration
function divideByThree(int $numberE) : float {
    return $numberE / 3;
}

echo divideByThree(8)."<br/>";

# pass by reference
$total = 5;

function doubleTheValue(int &$total) {
    $total = $total * 2;
}

doubleTheValue($total);
echo $total."<br/>";
?>

</body>

</html>
