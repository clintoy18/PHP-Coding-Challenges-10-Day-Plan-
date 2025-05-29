<?php

  #DAY 1 REVERSE AN INTEGER without converting it to string


  function reverseInteger(int $num) : int{
       $isNegative = $num < 0 ;
       $num = abs($num); // make num as a positive to make sure we only reversed a positive integer
       $reversed = 0; // variable to store the reversed number
       
       //loop through all numbers until the end
       while( $num > 0 ){
        $lastDigit = $num % 10; //extract the last digit of the integer
        $reversed = $reversed * 10 + $lastDigit; //append the last digit to reversed variable
        $num = (int)($num/10); // remove the last digit of the number from num variable    
       }

       return  $isNegative ? -$reversed : $reversed;

  }

  $number = 12345;
  echo reverseInteger($number);



?>