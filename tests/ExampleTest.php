<?php

declare(strict_types=1);

namespace Aritmatika;

class ExampleTest extends \PHPUnit\Framework\TestCase
{
    public function testBasicPenjumlahan() {
        $aritmatika = new Aritmatika();
        $this->assertEquals($aritmatika->penjumlahan(2, 2), 4);
    }

    public function testBasicPengurangan() {
        $aritmatika = new Aritmatika();
        $this->assertEquals($aritmatika->pengurangan(3, 1), 2);
    }

    public function testBasicPerkalian() {
        $aritmatika = new Aritmatika();
        $this->assertEquals($aritmatika->perkalian(2, 3), 6);
    }

    public function testBasicPembagian() {
        $aritmatika = new Aritmatika();
        $this->assertEquals($aritmatika->pembagian(10, 2), 5);
    }

    public function testBasicHasilBagi() {
        $aritmatika = new Aritmatika();
        $this->assertEquals($aritmatika->hasilBagi(10, 4), 2);
    }
}