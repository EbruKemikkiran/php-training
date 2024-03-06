
<?php


//for($i = 1; $i <= 100; $i++) //burda birer birer sayar
for($i = 1; $i <= 100; $i+= 2) //burda ikiser sayar
{
    echo $i."<br>";
}

"<br>";

for($i = 1; $i <= 100; $i+= 2) //burda ikiser sayar
{
    if($i % 3 == 0 )
    {
        echo $i."<br>";
    }
    
}

echo "2"."<br>";
echo "100"."<br>";



//burada butun isimleri yazdirmis olacak
$isimler = ["ebru", "ezgi", "anne"];

for($i=0; $i <3; $i ++)
{
    echo $isimler[$i]."<br>";
}


//burada butun isimleri yazmis olacak
$isimler = ["ebru", "ezgi", "anne"];

for($i=0; $i < count($isimler); $i ++)
{
    echo $isimler[$i]."<br>";
}





//burada prin_r string olarak yazdirmak icin
$urunler = 
[
    ["iph 1", 400],
    ["iph 2", 200],
    ["iph 3", 500]

];
for($i=0; $i < count($urunler); $i ++)
{
    print_r($urunler[$i])."<br>";
}




//burada 0 indexteki urun yazdirilacak
$urunler = 
[
    ["iph 1", 400],
    ["iph 2", 200],
    ["iph 3", 500]

];
for($i=0; $i < count($urunler); $i ++)
{
    print_r($urunler[$i][0])."<br>";
}


//burada 0 ve 1. indexteki urunler geldi
$urunler = 
[
    ["iph 1", 400],
    ["iph 2", 200],
    ["iph 3", 500]

];
for($i=0; $i < count($urunler); $i ++)
{
    print_r($urunler[$i][0]." ".$urunler[$i][1] )."<br>";
}




foreach ($urunler as $urun)
{
    print_r($urun[0]." ".$urun[1] )."<br>";
}




?>