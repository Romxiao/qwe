<?php
header("Content-type: text/html; charset=utf-8");
$name = 'a:2:{s:10:"short_name";s:15:"焊接紧固类";s:9:"cat_color";s:6:"1b8cfc";}';
$name =unserialize($name);
echo  "<pre>";
print_r($name);
echo "</pre>";
echo "limdddddmmmm";
echo "<br>";
$data=date('y/m/d h:i:s',1513625313+3400*10);
print_r($data);echo "<br>";
$data=time();
print_r($data);
$password='123456';
echo "<br>";
echo md5(md5('admin00').'6057');
echo "<br>";
$money =110.81;
$num  = 5;
$num_rand=$money%$num;
echo 	   $num_rand =sprintf("%.2f", $num_rand);

echo "<br>";
$kong ="a b eee bdg fgerg htfhaw  awdawd  e";
$kong =str_word_count($kong,1);//字符串中的空格作为分隔符
echo "<pre>";
var_dump($kong);
echo  "</pre>";
echo  "<br>";
for($i= 0 ;$i<5;$i++){
//    echo  str_repeat("",3-$i);

        echo  str_repeat("*",$i*2+1);

    echo "<br>";

}


?>

