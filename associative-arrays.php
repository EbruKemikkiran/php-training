<?php


$plakalar = array("06","07","34");
$sehirler = array("ankara","antalya","istanbul");

$plaka_bilgiler = array(
    "06" => "ankara",
    "07" =>"antalya",
    "34" => "istanbul"
);

echo $plaka_bilgiler["06"]."<br>";
echo $plaka_bilgiler["07"]."<br>";
echo $plaka_bilgiler["34"]."<br>";



$urun = array(
    "name" => "watch",
    "price" => 500,
    "isavaliable" => true
);


echo $urun["name"]." ".$urun["price"];

$urunler = [
    ["name" => "watch",
    "price" => 500,
    "isavaliable" => true],
    ["name" => "phone",
    "price" => 300,
    "isavaliable" => true],
    ["name" => "tabler",
    "price" => 900,
    "isavaliable" => true]
];


echo $urunler[1]["name"]."<br>";
echo $urunler[0]["price"]."<br>";

?>