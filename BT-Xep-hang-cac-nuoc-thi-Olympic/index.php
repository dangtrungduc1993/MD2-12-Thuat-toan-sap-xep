<?php
include_once "Country.php";

//$countrys[0] = new Country("vietNam",5);
//$countrys[1] = new Country("japan",6);
//$countrys[2] = new Country("korea",7);
//$countrys[3] = new Country("campuchia",8);
//$countrys[4] = new Country("indonesia",9);


$vietNam = new Country("vietNam",5);
$japan = new Country("japan",6);
$korea = new Country("korea",7);

$countrys = [$vietNam->getTotalGoldMedals(), $japan->getTotalGoldMedals(), $korea->getTotalGoldMedals()];
rsort($countrys);
foreach ($countrys as $country){
    echo $country . "<br>";
}