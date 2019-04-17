<?php
class Math{
    public static function getAllData($arr){
        $sum = array_sum($arr);
        $num = count($arr);
        $avg = round($sum/$num,2);
        $max = max($arr);
        $min = min($arr);
        return ['avg'=>$avg,'max'=>$max,'min'=>$min];
    }
    public static function getAllData2($arr){
        $len = count($arr);
        $sum = 0;
        $max = 0;
        $min = 0;
        //循环赋值
        for ($i=0; $i < $len; $i++) { 
            $sum += $arr[$i];
            //给最大赋值
            if ($max==0 || $arr[$i]>$max) {
                $max = $arr[$i];
            }
            //给最小赋值
            if ($min==0 || $arr[$i]<$min) {
                $min = $arr[$i];
            }
        }
        //平均值
        $avg = round($sum/$len,2);
        //返回值
        return ['avg'=>$avg,'max'=>$max,'min'=>$min];
    }
    

}

?>