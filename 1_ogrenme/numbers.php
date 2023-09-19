<?php
    $sayi1 = 10;
    $sayi2 = 20;

    echo "sonuç: ".($sayi1 + $sayi2)."<br>";
    echo "sonuç: ".($sayi1 - $sayi2)."<br>";
    echo "sonuç: ".($sayi1 * $sayi2)."<br>";
    echo "sonuç: ".($sayi1 / $sayi2)."<br>";

    echo is_int($sayi1)."<br>";

    // false bilgisi ekrana yazdırılmaz.

    echo var_dump(is_int($sayi1))."<br>";
    echo var_dump($sayi1);
    echo var_dump(is_float($sayi1))."<br>";
    echo var_dump(is_numeric($sayi1))."<br>";
    echo var_dump(is_numeric("10"))."<br>"; // true döndürür.
    echo var_dump(is_numeric("a10"))."<br>"; //false döndürür.

    echo ceil(4.3)."<br>";
    echo ceil(4.7)."<br>";
    echo floor(4.7)."<br>";
    echo round(4.7)."<br>";
    echo round(4.4)."<br>";
    echo sqrt(25)."<br>";
    echo abs(-25)."<br>";


?>