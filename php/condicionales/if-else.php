<?php 
    $break_balance = 10;
    $money = 1000;
    $savings = 50;
    if ($break_balance < 100) {
        $bank_balance += $money;
    }else {
        $savings += 50;
        $bank_balance -= 50;
    }
?>