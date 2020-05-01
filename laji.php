<?php
echo preg_replace('/[a-z,_]+\((?R)?\)/', NULL, $_GET['exp']);
if(';' === preg_replace('/[a-z,_]+\((?R)?\)/', NULL, $_GET['exp'])) 
{
    if (!preg_match('/et|na|info|dec|bin|hex|oct|pi|log/i', $_GET['exp'])) 
    {
        // echo $_GET['exp'];
        @eval($_GET['exp']);
    }
    else
    {
        die("还差一点哦！");
    }
}
else
{
    die("再好好想想！");
}
