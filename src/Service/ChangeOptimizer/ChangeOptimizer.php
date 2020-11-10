<?php

namespace App\Service\ChangeOptimizer;

class ChangeOptimizer
{

    public function getOptimalChange(int $amount)
    {
        $coin2 = $bill5 = $bill10 = 0;
        if ($amount == 1 || $amount == 3)
            return false;
        if ($amount % 2 !== 0){
            $bill5 += 1;
            $amount -= 5;
        }
        if ($amount >= 10) {
            $bill10 = floor($amount / 10);
            $amount -= $bill10 * 10;
        }
        $coin2 = $amount / 2;

        return new Change($coin2, $bill5, $bill10);

    }

}
