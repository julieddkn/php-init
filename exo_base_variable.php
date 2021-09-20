<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo - Bases</title>
    <style>
        body {
            font-family: "Courier New";
            text-align: center;
        }
        .container {
            margin: 100px auto;
            width: 500px;
        }
    </style>
</head>

<body>
    <div class="container">

        <?php
        function read()
        {
            $fr = fopen("php://stdin", "r");   // open our file pointer to read from stdin
            $input = fgets($fr, 128);        // read a maximum of 128 characters
            $input = rtrim($input);         // trim any trailing spaces.
            fclose($fr);                   // close the file handle
            return $input;                  // return the text entered
        }

        echo ("Hi.\nHow are you?\n\n");

        $movie = 'Velvet Goldmine';
        $rating = 10;

        echo ("The movie " . $movie . " is great. I'll give a " . " out of 10, especially for the soundtrack!");

        $ticketUGC = 11;
        $ticketVendome = 16;

        echo ("\n\nA ticket for the UGC is " . $ticketVendome - $ticketUGC . "$ cheaper than a ticket for the Vendôme movie theater.");
        echo ("Sometime, you can get a price reduction for the Vendôme. In this case, the single ticket price is " . $ticketVendome - ($ticketVendome * 0.1) . "$ instead of " . $ticketVendome . "$.");

        echo ("\n\nBy the way, what's your name ? ");
        $name = read();
        echo ("\nCool! Hello " . $name . "!");
        echo ("\nGimme a number : ");
        $nbr1 = read();
        echo ("\nGimme another number : ");
        $nbr2 = read();
        echo ("\n" . $nbr1 . " + " . $nbr2 . " = " . $nbr1 + $nbr2 . "\n" . $nbr1 . " - " . $nbr2 . " = " . $nbr1 - $nbr2 . "\n" . $nbr1 . " x " . $nbr2 . " = " . $nbr1 * $nbr2 . "\n" . $nbr1 . " / " . $nbr2 . " = " . $nbr1 / $nbr2);

        echo ("\nGimme 3 products : \n");
        $product1 = read();
        $product2 = read();
        $product3 = read();
        echo ("\nGimme the prices : \n");
        $price1 = read();
        $price2 = read();
        $price3 = read();
        echo ("\n$product1 - $price1 $");
        echo ("\n$product2 - $price2 $");
        echo ("\n$product3 - $price3 $");
        echo ("\n\nHow many $product1 do you want? ");
        $sell1 = read();
        echo ("\nHow many $product2 do you want? ");
        $sell2 = read();
        echo ("\nHow many $product3 do you want? ");
        $sell3 = read();

        echo ("\nThe total is : " . ($price1 * $sell1) + ($price2 * $sell2) + ($price3 * $sell3). " $");
        ?>
        

    </div>
</body>

</html>