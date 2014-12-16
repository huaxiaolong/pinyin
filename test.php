<?php

short_test();
long_test();

function short_test()
{
    $test = '差';
    $stTime = microtime(true);
    $a = Pinyin::getPinyins($test);
    echo 'Time: ', microtime(true) - $stTime, ' Seconds', PHP_EOL;
    echo 'Memory: ', memory_get_peak_usage(true)/1024, ' KB', PHP_EOL;
    echo $test, PHP_EOL;
    echo implode(';', $a), PHP_EOL;
}

function long_test()
{
    $test = 'IBM中国有限公司';
    $stTime = microtime(true);
    $pinyins = '';
    for ($i = 0, $length = strlen($test); $i < $length; ) {
        $s1 = substr($test, $i, 1);
        $p = ord($s1);
        if ($p > 160) {
            $s2 = substr($test, $i, 3);
            $i += 3;
            $pinyin = Pinyin::getPinyins($s2);
            if (is_array($pinyin)) {
                $pinyins .= substr($pinyin[0], 0, 1);
            }
        } else if (strstr('ABCDEFGHIJKLMNOPQRSTUVWXYZ', strtoupper($s1))) {
            $pinyins .= strtoupper($s1);
            $i++;
        } else {
            $i++;
        }
    }
    echo 'Time: ', microtime(true) - $stTime, ' Seconds', PHP_EOL;
    echo 'Memory: ', memory_get_peak_usage(true)/1024, ' KB', PHP_EOL;
    echo $test, PHP_EOL;
    echo $pinyins, PHP_EOL;
}
