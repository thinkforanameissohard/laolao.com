<?php
// $data="flag{ni_hao}";
// function encrypt($data,$key)
// {
//     $key = md5('ISCC');
//     $x = 0;
//     $len = strlen($data);
//     $klen = strlen($key);
//     // klen =32
//     for ($i=0; $i < $len; $i++)
//     {
//         if ($x == $klen)
//         {
//             $x = 0;
//         }
//         $char .= $key[$x];
//         $x+=1;
//     }
////     echo ord('a').'<br/>';
////     echo $char.'<br/>';
//     /**
//      * $char   729623334f0aa2784a1 :一直是key md5的循环遍历
//      * $key    729623334f0aa2784a1599fd374c120d
//      * ord() :得到ascii值
//      */
//     for ($i=0; $i < $len; $i++)
//     {
//         $str .= chr((ord($data[$i]) + ord($char[$i])) % 128);
//     }
//     return base64_encode($str);
// }
////$data=base64_decode('fR4aHWwuFCYYVydFRxMqHhhCKBseH1dbFygrRxIWJ1UYFhotFjA=');
//echo "demo1\n";
//function dencrypt($data)
//{
//    $data=base64_decode($data);
//
//    $key = md5('ISCC');
//    $x = 0;
//    $len = strlen($data);
//    $klen = strlen($key);
//
//    for ($i=0; $i < $len; $i++)
//    {
//        if ($x == $klen)
//        {
//            $x = 0;
//        }
//        $char .= $key[$x];
//        $x+=1;
//    }
////    echo "char[]=".$char."<br/>";
//    for ($i=0; $i < $len; $i++)
//    {
//        $str .= chr((ord($data[$i]) - ord($char[$i])) % 128);
//    }
//    return base64_encode($str);
//}
//
//echo "加密后：".encrypt($data,$key).'<br/>';
//echo "解密后:".dencrypt($data).'<br/>';
//////echo "data=".$data."<br/>";
////echo base64_encode($data);
//////echo "\n";
//////echo base64_decode(base64_encode($data));
    //?>
   <?php
function decrypt($str)
{
	$mkey = md5('ISCC');
	$klen = strlen($mkey);
	$tmp = $str;
	$tmp = base64_decode($tmp);  // 对 base64 后的字符串 decode
	$md_len = strlen($tmp); //获取字符串长度
    $x=0;
    $char="";
	for ($i=0; $i < $md_len; $i++)
	{  //  取二次加密用 key;
		if ($x == $klen)  // 数据长度是否超过 key 长度检测
		$x = 0;
		$char .= $mkey[$x];  // 从 key 中取二次加密用 key
		$x+=1;
	}
		$md_data = array();
		for($i=0;$i<$md_len;$i++)
		{ // 取偏移后密文数据
			array_push($md_data, ord($tmp[$i]));
		}
        $md_data_source = array();
    $data1 = "";
    $data2 = "";
    foreach ($md_data as $key => $value)
    { // 对偏移后的密文数据进行还原
        $i = $key;
        if($i >= strlen($mkey))
        {
            $i = $i - strlen($mkey);
        }
        $dd = $value;
        $od = ord($mkey[$i]);
        array_push($md_data_source,$dd);
        $data1 .= chr(($dd+128)-$od);  // 第一种可能, 余数+128-key 为回归数
        $data2 .= chr($dd-$od);  // 第二种可能, 余数直接-key 为回归数
     }
    print "data1 => ".$data1."<br>\n";
    print "data2 => ".$data2."<br>\n";
}

$str = "fR4aHWwuFCYYVydFRxMqHhhCKBseH1dbFygrRxIWJ1UYFhotFjA=";
decrypt($str);
?>
