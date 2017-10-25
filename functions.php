<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 21.10.2017
 * Time: 14:36
 */

/**
 * @param $arr
 * @param bool $par2
 * @return string
 */
function task1($arr, $par2 = false)
{
    if ($par2 == false) {
        foreach ($arr as $item) {
            echo  "<p>" . $item . "</p>" . PHP_EOL;
        }
    } else {
        $str = implode(' ', $arr);
        return $str;
    }

}

/**
 * @param $arr
 * @param $str
 */
function task2($arr, $str)
{
    if (is_array($arr) && is_string($str)) {
        for ($i = 0; $i < count($arr); $i++) {
            if (is_int($arr[$i]) || is_double($arr[$i])) {
                $alg = true;
            } else {
                $alg = false;
                echo "В массиве должни бить только числа!!!";
                break;
            }
        }
        if ($alg == true) {
            switch ($str) {
                case '+':
                    $result = 0;
                    foreach ($arr as $item) {
                        $result += $item;
                    }
                    echo $result;
                    break;
                case '-':
                    $result = $arr[0];
                    for ($i = 1; $i < count($arr); $i++) {
                        $result -= $arr[$i];
                    }
                    echo $result;
                    break;
                case '*':
                    $result = 1;
                    foreach ($arr as $item) {
                        $result *= $item;
                    }
                    echo abs($result);
                    break;
                case '/':
                    $result = $arr[0];
                    for ($i = 1; $i < count($arr); $i++) {
                        $result /= $arr[$i];
                    }
                    echo $result;
                    break;
                default:
                    echo "Введите + , - , *, /";
            }
        }
    } else {
        echo 'Введите корректние параметри:1 параметр должен бить числовим масиввом , 2 параметр строкой';
    }
}

function task3()
{
    $firstArg = func_get_arg(0);
    if (is_string($firstArg) && ($firstArg == '+' || $firstArg == '-' || $firstArg == '*' || $firstArg == '/')) {
        for ($i = 1; $i < func_num_args() - 1; $i++) {
            if (is_int(func_get_arg($i)) || is_double(func_get_arg($i))) {
                $alg = true;
            } else {
                $alg = false;
                echo "Должни бить только числа!!!";
                break;
            }
        }
        if ($alg == true) {
            switch ($firstArg) {
                case '+':
                    $result = 0;
                    for ($i = 1; $i < func_num_args(); $i++) {
                          $result += func_get_arg($i);
                    }
                    break;
                case '-':
                      $result = func_get_arg(1);
                    for ($i = 2; $i < func_num_args(); $i++) {
                              $result -= func_get_arg($i);
                    }
                    break;
                case '*':
                      $result = 1;
                    for ($i = 1; $i < func_num_args(); $i++) {
                              $result *= func_get_arg($i);
                    }
                    break;
                case '/':
                      $result = func_get_arg(1);
                    for ($i = 2; $i < func_num_args(); $i++) {
                          $result /= func_get_arg($i);
                    }
                    break;
            }
        }
        return $result;
    } else {
        echo "Первым аргументом обязательно должна быть строка, обозначающая арифметическое действие(+ , -, *, /)";
    }
}

function task4($par, $par2)
{
    if (is_int($par) && is_int($par2)) {
        echo "<table>";
        for ($i = 1; $i <= $par; $i++) {
            echo "<tr>";
            for ($k = 1; $k <= $par2; $k++) {
                echo "<td>" . $k * $i . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "О нет Братуха, вводь целие числа";
}
}

function task5($str)
{
    if (is_string($str)) {
        $str1 = $str;
        $str2 = str_replace(" ", "", $str1);
        $str2 = mb_strtolower($str2);
        $arr = preg_split('//u', $str2, -1, PREG_SPLIT_NO_EMPTY);
        $arr1 = array_reverse($arr);
        if ($arr == $arr1) {
            $inner = function () use ($str1) {
                echo "$str1 ето Палиндром";
            };
            echo $inner();
            return true;
        } else {
            $inner = function () use ($str1) {
                echo "$str1 ето не Палиндром";
            };
            echo $inner();
        }

    } else {
        echo "Ето не строка";
        return false;
    }
}

function task6()
{
    echo date("d.m.Y H:s") . PHP_EOL;
    echo  "<br>";
    $date = '24.02.2016 00:00:00';
    $timestamp = strtotime($date);
    echo $timestamp;
}

function task7()
{
    $str1 = 'Карл у Клары украл Кораллы';
    $str1 = str_replace('К', '', $str1);
    echo $str1;
    $str2 = 'Две бутылки лимонада';
    $str2 = str_replace('Две', 'Три', $str2);
    echo $str2;
}

function task9()
{
    echo file_get_contents('test.txt');
}

function task10()
{
    $data = 'Hello again!';
    file_put_contents('anothertest.txt', $data);
}