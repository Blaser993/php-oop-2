<?php

require_once __DIR__."./models/Products.php";

require_once __DIR__."./models/Categories.php";

require_once __DIR__."./models/Food.php";
require_once __DIR__."./models/Gadgets.php";
require_once __DIR__."./models/Sits.php";

$cane = new Categories("cane");


$osso = new Products("osso", 20, $cane);

$gatto = new Categories("gatto", $osso);

var_dump($gatto);

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