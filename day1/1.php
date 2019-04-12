<?php
$arr = array('3','5','1','2','9','4','8');
sort($arr);  //由小到大的顺序排序忽略键名的数组排序
print_r($arr);
echo "<br>";
rsort($arr);  //由大到小的顺序排序忽略键名的数组排序
print_r($arr);
echo "<br>";
echo array_sum($arr);//数组元素的和
echo "<br>";
$a=array("a"=>"red","b"=>"green","c"=>"blue");
echo array_shift($a);//删除数组中的第一个元素，并返回被删除元素的值
echo "<br>";
$a=array("red","green","blue");
array_pop($a);//删除数组中的最后一个元素
$re=array("asdwa","sda","rew","asd","axc","123");
print_r(array_chunk($re,2));//把数组分割为带有两个元素的数组
echo "<br>";
$ar = array('as','ax','azz','ssew');
array_shift($ar);//删除数组第一个元素
print_r($ar);
echo "<br>";
array_splice($arr,5,6);//删除数组中指定元素
print_r($arr);
echo "<br>";
$a1=array("a"=>"red","b"=>"green","c"=>"blue");
$a2=array("a"=>"red","c"=>"blue","d"=>"pink");
$result=array_diff_key($a1,$a2);
print_r($result);
echo "<br>";
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$result=array_flip($a1);
print_r($result);//反转数组中所有的键以及它们关联的值
echo "<hr>";

$a = "hello word"; 
echo "$a";//直接输出
echo "<br>";
$b = "how are ";
$c = "you";
echo $b.''.$c;//拼接字符串
echo "<br>";
$text = "asdwads12as";
echo strlen($text);//字符串长度
echo "<br>";
echo str_replace("word","asd","hello word");//替换
echo "<br>";
echo strrev("hello word!"); // 倒序输出输出
echo "<br>";
echo stristr("hello word!","WORD");//查找字符串在另一字符串中第一次出现的位置 不区分大小写
echo "<br>";
echo substr_count("asdwadadsaczxffa","a");//查找字符出现次数
echo "<br>";
echo ucfirst("hello word"); //把首字母转成大写
echo "<br>";
echo strrpos("asdfghjkl","f");//查找字符串在另一字符串中最后一次出现的位置
echo "<br>";
echo str_repeat("php",5);//把字符串重复指定的次数
echo "<hr>";
$t='10';

if ($t<"20") {
  echo "Have a good day!";
}
echo "<br>";
for ($x=0; $x<10; $x++) {
    echo "小于10的值为：$x <br>";
} 
echo "<br>";
$i=1; 
while($i<=5) {
  echo "这个数字是：$i <br>";
  $i++;
} 
echo "<hr>";


$str='Have you ever gone shopping and';
$arr=[];
for($i=0;$i<=strlen($str);$i++)
{
    if(array_key_exists($str[$i],$arr))
    {
        $arr[$str[$i]]+=1;
        if($arr[$str[$i]]==3)
        {
            echo $str[$i];
            break;
        }
    }
    else
    {
        $arr[$str[$i]]=1;
    }
}
        
        
    



?>