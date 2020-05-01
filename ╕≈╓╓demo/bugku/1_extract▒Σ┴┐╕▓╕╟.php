<?php
show_source(__FILE__);
$flag='xxx';
extract($_GET);
echo "shiyan=";var_dump($_GET);
if(isset($shiyan))
{
    $content=trim(file_get_contents($flag));
    echo "content=";var_dump($content);
    if($shiyan==$content)
    {
        echo'flag{xxx}';
    }
    else
    {
        echo'Oh.no';
    }
}
?>
