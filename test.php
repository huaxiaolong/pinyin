<?php

include __DIR__.'/pinyinext.class.php';

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
    $pys = Pinyin_Ext::getFirstPinyin($test);
    echo 'Time: ', microtime(true) - $stTime, ' Seconds', PHP_EOL;
    echo 'Memory: ', memory_get_peak_usage(true)/1024, ' KB', PHP_EOL;
    echo $test, PHP_EOL;
    echo $pys, PHP_EOL;
}
