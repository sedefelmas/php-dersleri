<?php
    $db_username = "sadikturan2";
    $db_password = "1234";
        
    // if($db_username == "sadikturan2" and $db_password == "1234"){
    //     echo "username ya da parola doğru";
    // }
    // else{
    //     echo "username ya da parola yanlış";
    // }
        
    // if($db_username == "sadikturan2"){
    //     if($db_password == "1234"){
    //         echo "giriş başarılı";
    //     }
    //     else{
    //         echo "parola yanlış";
    //     }
    // }
    // else{
    //     echo "username yanlış";
    // }

    if($db_username != "sadikturan"){
        echo "username yanlış";
    }
    elseif($db_password != "1234"){
        echo "parola yanlış";
    }
    else{
        echo "giriş başarılı";
    }


?>