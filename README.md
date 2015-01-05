pinyin
======

Xiaolong PHP Pinyin Library

<p>基于微软拼音库，仅支持简体中文，unicode编码，共20977个汉字</p>
<p>该类只提供最基础的API接口，如需更高级的功能，请自行扩展</p>
<p>API：</p>
<p>1.判断给定的字符是否是汉字</p>
<p>Pinyin::isChinese($chr) => true|false</p>
<p>2.根据给定的字符返回所有的拼音</p>
<p>Pinyin::getPinyins($chr) => 差 array('CHAI', 'CI', 'CHA')</p>
<p>3.根据给定的字符返回所有的拼音</p>
<p>Pinyin_Ext::getFirstPinyin($str) => IBM中国有限公司 IBMZGYXGS</p>

<p>算法和数据结构参考：http://zh.lucida.me/blog/lucida-pinyin-converter/</p>
<p>感谢lucida的文章</p>
