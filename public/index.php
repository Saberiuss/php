<?php

require dirname(__DIR__).'/autoload.php';
ini_set('display_errors', 'On');
error_reporting(E_ALL);

/*
$test = new \App\Test();
$test->hello();
*/

/*$calculator = new \App\Calculator();
echo $calculator->sum(433, 251); // 5
echo '-';
echo $calculator->pow(4, 3); // 6 * 6
echo '-';
echo $calculator->sqrt(3, 7); // 8






/*
 //НАЙТИ, СКОЛЬКО В ЧИСЛЕ ЦИФР МЕНЬШЕ 5 == ZADANIE 1
$y = 0;
$j = 0;

 $do5 = 123498712999999999;

while ($do5 > 0) {
    $j = $do5 % 10;

    if ($j < 5) {
        $y++; }
$do5 = ($do5 - $j) / 10;

}

echo $y;
echo '<br>';


    }

*/

/*
  //все четырехзначные, сумма цифр которых = у == ZADANIE 2
$y = 4;
$x = 0;
$j = 0;

for ($c = 1000; $c < 10000; $c++) {
    $x = $c;
    $o = 0;
    while ($x > 0) {

        $j = $x % 10;
        $o = $o + $j;
        $x = ($x - $j) / 10;

    }
    if ($o == $y) {
        echo $c;
        echo '<br>';
    }

}

*/

//NE SDELAL ========== ZADANIE 3
// образуют ли возрастающую последовательность


$j = 0;
$do5 = 12346789;

$x = $do5;
$j = $x % 10;
$x = ($x - $j) / 10;


while ($x > 1) {
    $j = $x % 10;
    $x = ($x - $j) / 10;



    if ($j <= $x % 10) { // sravnivaem po vozrastaniy i s4itaem
        echo 'ne rastet';
        exit();
    }


}
echo 'vozrastaet';




/*$y = 0;
$j = 0;
$nakop = 0;

$do5 = 12345678;

$x = $do5;
while ($x > 0) {
    $j = $x % 10;
    $y++;
    $x = ($x - $j) / 10;
}

$x = $do5;
// - NE TROGAT - uznali, skolko nulei

$x = $x / pow(10, $y);
$nakop = floor($x);
$x = $do5;
$x = $x - $nakop * pow(10, $y);
$y = $y - 1; // - pervaya iteraciya zapisi c nakop dlya raboti cikla

while ($x > 1) {

    $x = $x / pow(10, $y); // otsekaem ostatkom

    echo $x;
    echo '<br>';
    echo $y;
    echo '<br>';
    echo $nakop;
    echo '<br>';

    if ($nakop < floor($x)) // sravnenie s predidushim

    {
        $nakop = floor($x); // esli predidushee nije - prisvaivaem tekushee
        $x = $x * pow(10, $y); // vosstanavlivaem int X
        $x = $x - $nakop * pow(10, $y);// ubiraem pervuy cifru ot X
        $y = $y - 1; // - snijaem stepen 4isla
    } else {
        echo 'NE RASTET';

        exit();
    }
}

echo '<br>';
echo 'RASTET';


/*==========
$x = $x / pow(10, $y); // RABOTAET
echo $x;
echo '<br>';
$nakop = floor($x);
echo $nakop;
echo '<br>';
$x = $x * pow(10, $y);
echo $x;
echo '<br>';
$x = $x - $nakop * pow(10, $y);
echo $x;
echo '<br>';
$y = $y - 1; //3
===========*/




// =============== ZADANIE 4 NAITI VSE 4 ZNA4 V VOZRASTANII ILI UBIVANII

/*
$y = 4;

$j = 0;
$o = 0;


for ($chislo = 1000; $chislo < 10000; $chislo++) {
    $x = $chislo;
    $sc1 = 0;
    $sc2 = 0;
    $j = $x % 10; //4
    $x = ($x - $j) / 10; //123

    if ($j % 2 == 0) {
        while ($x > 0) { // razbivaem chislo


            if ($j > $x % 10) { // sravnivaem po vozrastaniy i s4itaem
                $sc1 = $sc1 + 1;

            } else if ($j < $x%10) { // sravnivaem po ybivaniy i s4itaem
                $sc2 = $sc2 + 1;
            }


            $j = $x % 10; // otdelaem poslednee cifru
            $x = ($x - $j) / 10; // rejem 4islo na 1 znak

        }
    }

    if ($sc1 == 3 or $sc2 == 3) { // proverka vozrastaniya ili ubivaniya

        echo $chislo;
        echo '<br>';
    }

}

*/// ZADANIE 5 - ZAPISAtb 4ISLO NAOBOROT
/*
$y = 0;
$j = 0;
$obratnoe = 0;

$do5 = 1235234987129999;

$x = $do5;
while ($x > 0) {
    $j = $x % 10;
    $y++; // kolvo 0
    $x = ($x - $j) / 10;
}
$y = $y-1;

while ($do5 > 0) {
    $j = $do5 % 10;
    $do5 = ($do5 - $j) / 10;
    $obratnoe += $j*pow(10, $y);
    $y = $y - 1;


}
echo $obratnoe;
echo '<br>';


*/
//result =
// "5-6-8"
//
//
//
//
//
//
//
//
//
//
//
//