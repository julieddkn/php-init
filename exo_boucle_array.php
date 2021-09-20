<?php

    // function Say10Times(string $stuffToSay)
    // {
    //     for ($i=0; $i <= 10; $i++) { 
    //         echo "$stuffToSay";
    //     }
    // }

    // Say10Times("Hi honey ..");

    // for ($i=1; $i <= 100 ; $i++) { 
    //     echo "\n$i";
    // };

    $vals = array(20, 50, 7, 54);
    array_push($vals, 150, 300);
    // foreach ($vals as $val) {
    //     echo "$val\n";
    // };
    // for ($i=0; $i < count($vals); $i++) {
    // echo "$vals[$i]\n";
    // }

    function ShowArray(array $array){
        foreach ($array as $value) {
            echo "$value\n";
        }
    };
    ShowArray($vals);

?>