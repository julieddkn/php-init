<?php
    function read()
    {
        $fr = fopen("php://stdin", "r");   // open our file pointer to read from stdin
        $input = fgets($fr, 128);        // read a maximum of 128 characters
        $input = rtrim($input);         // trim any trailing spaces.
        fclose($fr);                   // close the file handle
        return $input;                  // return the text entered
    }


    // echo "What's your bedroom's width? ";
    // $width = read();
    // echo "What's your bedroom's length? ";
    // $length = read();
    // if ($width == $length) {
    //     echo "Your room is a perfect square!";
    // } else {
    //     echo "The total surface area is " . ($width * $length) . " m³.";
    // };

    // echo "What's the temperature? ";
    // $temperature = read();
    // if ($temperature > 15 AND $temperature < 25) {
    //     echo "Niiice!";
    // } elseif ($temperature < 15) {
    //     echo "Chilly!";
    // } else {
    //     echo 'As Paris Hilton would say : "So hot."';
    // };  

    

?>