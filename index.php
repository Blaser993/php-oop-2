<?php

require_once __DIR__."./models/Products.php";

require_once __DIR__."./models/Categories.php";

require_once __DIR__."./models/Food.php";
require_once __DIR__."./models/Gadgets.php";
require_once __DIR__."./models/Sits.php";

$gatto = new Categories("Gatti", "icona del gatto");
$cane = new Categories("Cani", "icona del cane");

$food1 = new Food("Croccantini", 10, "20-04-2036", $gatto);
$food2 = new Food("Tonno in scatola", 5, "30-08-2030", $cane);

$gadget1 = new Gadgets("Osso", 2, "PLA", $gatto);
$gadget2 = new Gadgets("Palla", 3.99, "gommapiuma",$gatto);

$sit1 = new Sits("Castello", 45, 4, $cane);
$sit2 = new Sits("Cuccia outdoor", 32, 2, $cane);


var_dump($food1, $food2, $gadget1, $gadget2, $sit1, $sit2, $cane, $gatto);

// $cane = new Categories();
// $cane->animale = "Cane";

// $gatto = new Categories();
// $gattoe->animale = "Gatto";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E - commerce</title>
</head>
<body>

<h1>ciao</h1>
    
</body>
</html>