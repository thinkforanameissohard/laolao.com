<?php
show_source(__FILE__);
//strcmp ( string $str1 , string $str2 ) : int
//如果 str1 小于 str2 返回 < 0； 如果 str1 大于 str2 返回 > 0；如果两者相等，返回 0。
$flag = "flag{xxxxx}";
if (isset($_GET['a']))
{
    var_dump($_GET['a']);
    echo "<br/>";
    var_dump(strcmp($_GET['a'], $flag));
    echo "<br/>";
    if (strcmp($_GET['a'], $flag) == 0)
        die('Flag: '.$flag);
    else
        print 'No';
}

//strcmp("","")#, $flag)
