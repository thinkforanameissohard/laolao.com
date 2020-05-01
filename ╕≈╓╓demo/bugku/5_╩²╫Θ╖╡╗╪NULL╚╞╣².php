<?php
show_source(__FILE__);
$flag = "flag";
if (isset ($_GET['password'])) {
    if (ereg ("^[a-zA-Z0-9]+$", $_GET['password']) === FALSE)
        echo 'You password must be alphanumeric';
    else if (strpos($_GET['password'], '--') !== FALSE)
        die('Flag: ' . $flag);
    else
        echo 'Invalid password';
}
/* strpos(string,find,start)
 * strpos() 函数查找字符串在另一字符串中第一次出现的位置。
   注释：strpos() 函数对大小写敏感。
 */