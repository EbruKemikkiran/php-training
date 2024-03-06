<?php

$urunAdi = "IPhone 15";
$urunFiyati = 500;
$kdv = 0.05;

$sonuc = $urunAdi." isimli urun fiyati ".$urunFiyati * $kdv + $urunFiyati ."TL.";

echo $sonuc;
echo "<br>";

$urunFiyati = $urunFiyati +($urunFiyati*$kdv);

$sonucYeni = "{$urunAdi} isimli urun fiyati {$urunFiyati} TL";

echo $sonucYeni."<br>";

echo $sonucYeni[0]."<br>";
echo $sonucYeni[10]."<br>";



echo strlen($sonuc)."<br>";
echo str_word_count($sonuc)."<br>";
echo strtolower($sonuc)."<br>";
echo strtoupper($sonuc)."<br>";



?>