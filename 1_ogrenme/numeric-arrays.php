<?php

    // Diziler
        // Numeric Diziler
        // Associative Diziler

    // $ogrenciler = "ali, ahmet, hasan";
    // $ogrenciler = array("ali", "ahmet", "hasan");
    $ogrenciler = ["ali", "ahmet", "hasan"];
    
    echo $ogrenciler[0]."<br>";
    echo $ogrenciler[1]."<br>";
    echo $ogrenciler[2]."<br>";
    echo gettype($ogrenciler)."<br>";

    $numaralar = [100, 200, 300];

    echo $ogrenciler[0]." ".$numaralar[0]."<br>";
    echo $ogrenciler[1]." ".$numaralar[1]."<br>";
    echo $ogrenciler[2]." ".$numaralar[2]."<br>";

    // array_push($ogrenciler, "sedef");
    // array_pop($ogrenciler);
    // array_shift($ogrenciler);
    // echo "<br>"."<br>".$ogrenciler[0]." ".$numaralar[0]."<br>";
    // echo $ogrenciler[1]." ".$numaralar[1]."<br>";

    $reversed_ogrenciler = array_reverse($ogrenciler);
    $reversed_numaralar = array_reverse($numaralar);
    echo "<br><br>";
    echo $reversed_ogrenciler[0]." ".$reversed_numaralar[0]."<br>";
    echo $reversed_ogrenciler[1]." ".$reversed_numaralar[1]."<br>";
    echo $reversed_ogrenciler[2]." ".$reversed_numaralar[2]."<br>";





?>