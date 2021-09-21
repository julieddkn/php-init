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

    // for ($i=10; $i <= 50 ; $i++) { 
    //     echo "\n$i";
    // };

    // $vals = array(20, 50, 7, 54);
    // array_push($vals, 150, 300);
    // foreach ($vals as $val) {
    //     echo "$val\n";
    // };
    // for ($i=0; $i < count($vals); $i++) {
    // echo "$vals[$i]\n";
    // }

    // function showArray(array $array) : void {
    //     foreach ($array as $value) {
    //         echo "$value\n";
    //     }
    // };
    // showArray($vals);

    // function ReversedArray (array $array) : array {
    //     $reverse = array_reverse($array);
    //     return $reverse;
    // };
    // $myArray = array ("Julie", "Logan", "Doom");
    // print_r(ReversedArray($myArray));
    

    // $movie1 = array("Title" => "Ghost World", "Director" => "Terry Zwigoff", "Genre" => "Comedy, Drama, Independant");
    // $movie2 = array("Title" => "Mysterious Skin", "Director" => "Gregg Araki", "Genre" => "Drama, Independant");
    // $movie3 = array("Title" => "Jawbreaker", "Director" => "Darren Stein", "Genre" => "Comedy");
    
    // $movie1 += ["Release Date" => "2001"];
    // $movie2 += ["Release Date" => "2004"];
    // $movie3 += ["Release Date" => "1999"];

    // function ShowMovie (array $movie) {
    //     foreach ($movie as $name => $info) {
    //         echo "$name - $info\n";
    //     };
    // };

    // ShowMovie($movie1);
    // ShowMovie($movie2);
    // ShowMovie($movie3);

    // $actors = array ("James Duval","Fairuza Balk", "Joseph Gordon-Levitt", "Anjelica Huston", "Dev Patel");
    // function ShowActors (array $array) : void {
    //     foreach ($array as $value) {
    //         echo ("- $value\n");
    //     }
    // };
    // ShowActors($actors);
    // unset($actors[2]);
    // ShowActors($actors);
    
    // if (in_array("James Duval", $actors)) {
    //     echo array_search("James Duval", $actors);
    // } else {
    //     echo "not found!";
    // };
    // $actorsCopy = array();
    // foreach ($actors as $value) {
    //     array_push($actorsCopy, $value);
    // };
    // print_r($actorsCopy);

    $wad21 = array("Anais", "Assmaa", "Caroline", "Grace", "Judy", "Julie", "Julie", "Laure", "Marwa", "Minh", "Myriam", "Stefania", "Valerie", "Ylenia");
    function randomWad (array $array) : string {
            $random = rand(0, count($array) - 1);
            $name = $array[$random];
            if (in_array($name, $wad21once)) {
                echo ("Try again");
                break;
            } else {
                array_push($wad21once, $name);
                echo "$name";
            };
        return $name;
    };
    $wad21once = array();
    while (count($wad21once) < count($wad21)) {
        randomWad($wad21);
    };

?>