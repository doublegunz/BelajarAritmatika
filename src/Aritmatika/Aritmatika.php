<?php

declare(strict_types=1);

namespace Aritmatika;

/**
 * @author Gun Gun Priatna <gungunpriatna02@gmail.com>
 * @license MIT
 * @version 1.0.1
 */
class Aritmatika
{

    /**
     * Undocumented function
     *
     * @param float $a comment about this variable
     * @param float $b comment about this variable
     * 
     * @return float
     */
    public function penjumlahan($a, $b): float
    {
        return $a + $b;
    }

    /**
     * Undocumented function
     *
     * @param float $a comment about this variable
     * @param float $b comment about this variable
     * 
     * @return float
     */
    public function pengurangan($a, $b): float
    {
        return $a - $b;
    }

    /**
     * Undocumented function
     *
     * @param float $a comment about this variable
     * @param float $b comment about this variable
     * 
     * @return float
     */
    public function perkalian($a, $b)
    {
        return $a * $b;
    }

    /**
     * Undocumented function
     *
     * @param float $a comment about this variable
     * @param float $b comment about this variable
     * 
     * @return float
     */
    public function pembagian($a, $b) 
    {
        return $a / $b;
    }

    /**
     * Undocumented function
     *
     * @param float $a comment about this variable
     * @param float $b comment about this variable
     * 
     * @return float
     */
    public function hasilBagi($a, $b)
    {
        return $a % $b;
    }
}