<?php
//什么是丑数
//把只包含质因子2、3和5的输称作丑数
//例如6、8都是丑数，但7、14不是，因为它们包含质因子7
//如何判断丑数
//首先除2，知道不能整除为止
//然后除5到不能整除为止
//然后除3知道不能整除为止
//最终贩毒案剩余的数组是否为1，如果为1则为丑数，否则不是丑数
function choushu($nums)
{
    if (!$nums) {
        echo "输入一个数";
    }
    while ($nums%2==0) {
        $nums=$nums/2;
        echo '2';
    }
    while ($nums%3==0) {
        $nums=$nums/3;
        echo '3';
    }
    while ($nums%5==0) {
        $nums=$nums/5;
        echo '5';
    }
    if ($nums==1) {
        echo "<br>";
        echo "这就是丑数";
    }else {
        echo "这不是丑数";
    }
    
}
choushu(100);

?>