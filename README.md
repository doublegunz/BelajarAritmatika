# Belajar Aritmatika
Ini repositori belajar membuat package dengan studi kasus membuat package untuk aritmatika.

## Install

Via Composer

``` bash
composer require doublegunz/belajar-aritmatika
```

## Usage

``` php
require_once 'vendor/autoload.php';

use Aritmatika\Aritmatika;

$aritmatika = new Aritmatika;

$a = 10;
$b = 5;

$jml = $aritmatika->penjumlahan($a, $b);
$krg = $aritmatika->pengurangan($a, $b);
$kali = $aritmatika->perkalian($a, $b);
$bagi = $aritmatika->pembagian($a, $b);
$hasilBagi = $aritmatika->hasilBagi($a, $b);

echo "hasil {$a} + {$b} adalah {$jml}.<br/>";
echo "hasil {$a} - {$b} adalah {$krg}.<br/>";
echo "hasil {$a} x {$b} adalah {$kali}.<br/>";
echo "hasil {$a} : {$b} adalah {$bagi}.<br/>";
echo "hasil {$a} % {$b} adalah {$hasilBagi}.<br/>";
```

## License
The MIT License (MIT). Please see [License File](LICENSE.md) for more information.