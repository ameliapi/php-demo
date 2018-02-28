<?php


// $test = "25";
// echo substr($test, 1, 2) == 5;
// $num = 25;
// echo $num % 5 == 0;

$test_input = [27, 3, 5];

function fizzBuzz($input){

    for($i = $input[0]; $i > 0; $i--){
        
        $str = (string)$i;
        
        $cond1 = substr($str, 1, 2) == (string)$input[1] || substr($str, 1, 2) == (string)$input[2] || substr($str, 0, 1) == (string)$input[1] || substr($str, 0, 1) == (string)$input[2];
        $cond2 = $i % $input[1] == 0 || $i % $input[2] == 0;
        
        //var_dump($cond1, $cond2);

        if($cond1 && !$cond2){
            echo "FIZZ, ";
        }
        else if($cond2 && !$cond1){
            echo "BUZZ, ";
        } 
        else if($cond1 && $cond2){
            echo "FIZZBUZZ, ";
        }
        else if($i == 1){
        	echo "1";
        }
        else{
            echo "$i, ";
        }
    }
}

fizzBuzz($test_input);



?>