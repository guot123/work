<?php
class Math{
    public function sum(){
        $sum = 0;
        for($i=0 ; $i<=100 ; $i++) {
            $sum += $i;
        }
        return $sum;
    }
   public function sum2(){
       $sum2 = 0;
       $i = 0;
       while ($i<=100) {
           $i++;
           $sum+=$i;
       }
       return $sum2;
   }
   //1-100和  递归算法
   //$n 结尾
   //$i 开头
   //$sum 结果
   public static function sum3($n,$i=0,$sum=0){
        if ($i<$n) {
            $i++;
            $sum += $i;
            
            return self::sum3($n,$i,$sum);
        }else {
            return $sum;
        }
   }
   //阶乘 循环方式
   public static function jie($n){
       $s = 1;
       for($i=$n;$i>=1;$i--){
            $s *= $i;
       }
       return $s;
   }
   //回文字符串
   public static function huiwen($str){
       $str2 = strrev($str);
       if ($str == $str2) {
           return true;
       }
       return false;
   }
   public static function huiwen2($str){
       $str2 = '';
       $len = strlen($str);
       for($i=$len-1;$i>=1;$i--){
            $str2 .= $str[$i];
       }
       if ($str == $str2) {
           return true;
       }
       return false;
   }
}
?>