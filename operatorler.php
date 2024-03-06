<?php

$a = 10;
$b = 5;

//aritmetik
echo $a + $b."<br>";
echo $a - $b."<br>";
echo $a * $b."<br>";
echo $a / $b."<br>";
echo $a % $b."<br>";
echo $a++."<br>";
echo $a ** $b."<br>";



//Atama

$a = $a + $b;
$a += $b;  //a ile b'yi toplar sonucu a'ya atar
$a *= $b;
echo $a;



//Karsilastirma


$sonuc = ($a == $b);


echo $sonuc;

echo var_dump($sonuc);

$yas = 20;
$mezuniyet = "lise";


$sonuc = ($yas >= 18);
$sonuc = ($mezuniyet == "lise");


$sonuc = ($yas >= 18 and ($mezuniyet == "lise" or $mezuniyet == "universite"));
echo var_dump($sonuc);


?>