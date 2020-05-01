<?php
show_source(__FILE__);
$flag = "flag";
if (isset($_GET['name']) and isset($_GET['password']))
{
    var_dump($_GET['name']);
    echo "";
    var_dump($_GET['password']);
    var_dump(sha1($_GET['name']));
    var_dump(sha1($_GET['password']));
    if ($_GET['name'] == $_GET['password'])
        echo 'Your password can not be your name!';
    else if (sha1($_GET['name']) === sha1($_GET['password']))
        die('Flag: ' . $flag);
    else
        echo 'Invalid password.';
} else
    echo 'Login first!';
