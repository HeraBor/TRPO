<?php

use Khoteev\KhoteevException;
use Khoteev\MyLog;

include "core/EquationInterface.php";
include "core/LogAbstract.php";
include "core/LogInterface.php";
include "Khoteev/MyLog.php";
include "Khoteev/Equation.php";
include "Khoteev/QuEquation.php";
include "Khoteev/KhoteevException.php";

ini_set("display_errors", 1);
error_reporting(-1);

MyLog::log("Версия программы ".file_get_contents("./version"));

try {
    $values = array();

    for ($i = 1; $i < 4; $i++) {
        echo "Введите " . $i . "аргумент : ";

        $values[] = readline();
    }
    $va = $values[0];
    $vb = $values[1];
    $vc = $values[2];

    $b = new\Khoteev\QuEquation();
    MyLog::log("Введено уравнение " . $va . "x^2 +  " . $vb . "x + " . $vc);
    $x = $b->solve($va, $vb, $vc);

    $str = implode(", ", $x);
    MyLog::log("Корни уравнения: " . $str);
} catch (KhoteevException $e) {
    MyLog::log($e->getMessage());
}
MyLog::write();

?>
