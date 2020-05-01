<?php
#这不是抽奖程序的源代码！不许看！
//highlight_file(__FILE__);

mt_srand(505650363);

$str_long1 = "abcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
$str='';
$len1=20;
for ( $i = 0; $i < $len1; $i++ )
{
    $str.=substr($str_long1, mt_rand(0, strlen($str_long1) - 1), 1);       
}
$str_show = substr($str, 0, 10);



echo "<p id='p1'> str=".$str."</p>";
