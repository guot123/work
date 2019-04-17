<?php
class Math{
    public static function ninel(){
        $arr = [];
        for ($i = 1 ; $i<=9;$i++){
            $str = [];
            for ($j=1; $j <= $i; $j++) { 
                $str[] = " ".$j.'×'.$i.'='.$i*$j;
            }
            $arr[] = $str;
        }
        return $arr;
    }
    public static function ninel2(){
        $arr = [];
        $i = 1;
        while ($i<=9) {
            $str = [];
            $j = 1;
            while ($j<=$i) {
                $str[] = " ".$j.'×'.$i.'='.$i*$j;
                $j++;
            }
            $arr[] = $str;
            $i++;
        }
        return $arr;
    }
}

?>