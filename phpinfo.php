<?php 

//echo "Hello World!";
// phpinfo();
$arret = "non";
do {

    $first=random_int(0,1000000);
    $second = random_int(0,1000000);
    $third = random_int(0,1000000);

    echo "$first - $second - $third <br />";

    if($first % 2 == 0 AND $second % 2 == 0 AND $third % 2 !=0){
        $arret = "oui";
    }

} while($arret=="non");

