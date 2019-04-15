<?php
class Math{
    public static function getFbng($n){
        if ($n == 1 || $n == 2) {
            return 1;
        }
        $first = 1;
        $next =1;
        $i = 3;
        while (true) {
            $v = $first+$next;
            if ($i==$n) {
                return $v;
            }
            $first = $next;
            $next = $v;
            $i++;
        }
    }
    //递归
    public static function getFbng2($n){
        if ($n==1 || $n==2) {
            return 1;
        }
        return self::getFbng2($n-1)+self::getFbng2($n-2);
    }
    public static function getFbnglist($n){
        $list = [1,1];
        while (true) {
            $count = count($list);
            $v = $list[$count-1]+$list[$count-2];
            if ($v>$n) {
                return $list;
            }
            $list[] = $v;
        }
        return $list;
    }
}

?>
