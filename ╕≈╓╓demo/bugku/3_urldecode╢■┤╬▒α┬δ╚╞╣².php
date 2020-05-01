<?php
show_source(__FILE__);
if (eregi("hackerDJ", $_GET['id']))
{
    echo("not allowed!");
    exit();
}
$_GET['id'] = urldecode($_GET['id']);
if ($_GET['id'] == "hackerDJ")
{
    echo "Access granted!";
    echo "flag";
}
//payload=http://123.206.87.240:9009/10.php?id=%25%36%38%25%36%31%25%36%33%25%36%62%25%36%35%25%37%32%25%34%34%25%34%61
/*
 *  语法
    int eregi(string pattern, string string, [array regs]);
    定义和用法
    eregi()函数在一个字符串搜索指定的模式的字符串。搜索不区分大小写。Eregi()可以特别有用的检查有效性字符串,如密码。　
    可选的输入参数规则包含一个数组的所有匹配表达式,他们被正则表达式的括号分组。
    返回值
    如果匹配成功返回true,否则,则返回false
 * */