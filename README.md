pinyin
======

Xiaolong PHP Pinyin Library

基于微软拼音库，仅支持简体中文，unicode编码，共20977个汉字
该类只提供最基础的API接口，如需更高级的功能，请自行扩展
API：
1.判断给定的字符是否是汉字
Pinyin::isChinese($chr) => true|false
2.根据给定的字符返回所有的拼音
Pinyin::getPinyins($chr) => 差 array('CHAI', 'CI', 'CHA')

算法和数据结构参考：http://zh.lucida.me/blog/lucida-pinyin-converter/
感谢lucida的文章
