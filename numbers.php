<?php

$sayi1 = 100;
$sayi2 = 200;
$sayi3 = 200.03;

echo "sonuc: ".($sayi1 + $sayi2)."<br>";
echo "sonuc: ".($sayi1 / $sayi2)."<br>";
echo "sonuc: ".($sayi1 - $sayi2)."<br>";
echo "sonuc: ".($sayi1 * $sayi2)."<br>";


echo is_int(5)."<br>";
echo is_int($sayi3)."<br>";

echo var_dump(is_int($sayi3))."<br>";
echo var_dump(is_float($sayi3))."<br>";



echo ceil(4.3)."<br>";
echo floor(4.3)."<br>";
echo round(4.3)."<br>";
echo sqrt(5)."<br>";
echo abs(-25)."<br>";

?>