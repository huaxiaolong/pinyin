<?php

/**
 * Xiaolong拼音库扩展类
 */
defined('DS') or define('DS', DIRECTORY_SEPARATOR);
require __DIR__.DS.'pinyin.class.php';
class Pinyin_Ext extends Pinyin
{
    public static getFirstPinyin($str)
    {
        $str = strtoupper($str);
        $pys = '';
        for ($i = 0, $length = strlen($str); $i < $length; ) {
            $s1 = substr($str, $i, 1);
            $p = ord($s1);
            if ($p > 160) {
                $s2 = substr($str, $i, 3);
                $i += 3;
                $py = parent::getPinyins($s2);
                if (is_array($py)) {
                    $pys .= substr($py[0], 0, 1);
                }
            } else if (strstr('ABCDEFGHIJKLMNOPQRSTUVWXYZ', $s1)) {
                $pys .= $s1;
                $i++;
            } else {
                $i++;
            }
        }
        return $pys;
    }
}