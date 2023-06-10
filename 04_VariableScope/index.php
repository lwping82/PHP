<!DOCTYPE html>
<html>

<body>

<?php 

$globalVariableA = 5;
$globalVariableB = 10;
$globalTotal = 0;

$firstName = "David";
$lastName = "Macron";
$fullName = "";

function testVariableScope() {
    $localVariableA = "I am local variable A";
    
    #use "global" keyword to access global variables within a function
    global $globalVariableA, $globalVariableB, $globalTotal;
    
    echo "$localVariableA<br/>";
    $globalTotal = $globalVariableA + $globalVariableB;
    
    #alternatively, use PHP GLOBALS array to access the global variables
    $GLOBALS['fullName'] = $GLOBALS['firstName']." ".$GLOBALS['lastName'];
}

testVariableScope();

# accessing local variable will yield a warning
echo "$localVariableA<br/>";

echo "Total sum is $globalTotal<br/>";
echo "My full name is $fullName";
?>

</body>

</html>