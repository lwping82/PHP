<!DOCTYPE html>

<html>

<body>
<?php 

class Animal {
    public $hasFeathers;
    public $color;
    public $numberOfLegs;
    
    public function __construct($hasFeathers, $color, $numberOfLegs) {
        $this->hasFeathers = $hasFeathers;
        $this->color = $color;
        $this->numberOfLegs = $numberOfLegs;
    }
    
    public function myPet() {
        return "My pet has ".($this->hasFeathers==true?"feathers":"no feather").", have ".$this->numberOfLegs." leg(s) in ".$this->color." color.";
    }
}


$strDataType = "Hello World";
$intDataType = 100;
$floatDataType = 10.2223;
$boolDataType = false;
$arrayDataType = array("cupcake", "pancake");
$objectDataType = new Animal(true, "black", 2);
$nullDataType = null;

echo $strDataType."<br/>";
echo $intDataType."<br/>";
echo $floatDataType."<br/>";
echo ($boolDataType==true?"TRUE":"FALSE")."<br/>";
echo sizeof($arrayDataType)."<br/>";
echo $objectDataType->myPet();
echo $nullDataType."<br/>";

# to inspect variable data type
var_dump($intDataType);
?>

</body>
</html>