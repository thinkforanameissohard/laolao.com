<?php
show_source(__FILE__);
error_reporting(0);
$flag = 'flag{test}';
if (isset($_GET['username']) and isset($_GET['password']))
{
    var_dump(md5($_GET['username']));
    var_dump(md5($_GET['password']));
    echo "<br/>";
    if ($_GET['username'] == $_GET['password'])
        print 'Your password can not be your username.';
    else if (md5($_GET['username']) === md5($_GET['password']))
        die('Flag: '.$flag);
    else
        print 'Invalid password';
}
?>