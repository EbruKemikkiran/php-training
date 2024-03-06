<?php

$db_userName = "ebru";
$db_password = "1234";

$sonuc = ($db_userName =="ebru" and $db_password = "1234");

if($sonuc)
{
    echo "username ve parola dogru";
}
else
{

    echo "username ya da password yanlis";
}


//bu icerdekini dondurmek icin


if($db_userName == "ebru")
{
    if($db_password == "1234")
    {
        echo "giris basarili";
    }
    else
    {
        echo "password yanlis";
    }
}

else
{

  echo "username ya da password yanlis";
}


if($db_username != "ebru")
{
    echo "username yanlis";
}
elseif($db_password != "1234")
{
    echo "password yanlis";
}
else
{
    echo "giris basarili";
}




  


?>