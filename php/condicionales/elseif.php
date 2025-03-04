<?php 
    $break_balance = 10;
    $money = 1000;
    $savings = 50;
    
    if ($break_balance < 100) {
        $money = 1000;
        $break_balance += $money;
    }elseif ($break_balance > 200) {
        $savings = +=100;
        $break_balance -=100;
    }else{
        $savings +=50;
        $break_balance -=50;
    }
?>