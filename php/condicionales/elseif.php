<?php 
    $bank_balance = 10;
    $money = 1000;
    $savings = 50;
    
    if ($bank_balance < 100) {
        $money = 1000;
        $bank_balance += $money;
    }elseif ($bank_balance > 200) {
        $savings = +=100;
        $bank_balance -=100;
    }else{
        $savings +=50;
        $bank_balance -=50;
    }   
?>