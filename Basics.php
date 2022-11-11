<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        this is my php website
        <?php
            echo "hello world from php";
            echo "<br>";

            $var1 = 45;
            $var2 = 30;

            $var1 +=1;
            echo $var1;
            echo $var2;
            echo "<br>";
            echo var_dump($var1==$var2);

            echo "<br>";
            echo "data types";
            $string = "i am a string";
            echo var_dump($string);

            // constants
            define('pi',3.14);
            echo pi;

            echo "<br>";
            echo "<br>";
            $lang=array("c","cpp","c#","html");
            echo $lang[0];
            echo count($lang);

            echo "<br>";
            echo "<br>";
            $a=0;
            while($a<10){
                $a +=1;
                echo $a;
            }

            $i=0 ;
            while($i <count($lang)){
                
                echo $lang[$i];
                $i +=1;
            }

            for ($i=0; $i < 10; $i++) { 
                echo "<br>hello";
            }

            foreach($lang as $l){
                echo $l;
            }

            echo "<br><h1>stings</h1>";
            $str = "hello php i am siddharth";
            echo "len of string".strlen($str).str_word_count($str).strrev($str);
        ?>
    </div>
</body>
</html>