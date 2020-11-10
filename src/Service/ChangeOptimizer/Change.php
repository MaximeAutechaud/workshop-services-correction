<?php

namespace App\Service\ChangeOptimizer;

class Change
{
    /**
     * @var integer
     */
    private $coin2;
    /**
     * @var integer
     */
    private $bill5;
    /**
     * @var integer
     */
    private $bill10;

    public function __construct(int $coin2,int $bill5,int $bill10)
    {
        $this->coin2 = $coin2;
        $this->bill5 = $bill5;
        $this->bill10 = $bill10;
    }
}