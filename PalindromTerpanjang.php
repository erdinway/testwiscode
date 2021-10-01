<?php

    function isPalindrome($subs){
        $len = strlen($subs);
        for($i=0; $i<(int)($len/2); $i++){
            if($subs[$i] != $subs[$len-$i-1]){
                return false;
            }
        }
        return true;
    }

    function longestPalindrome($s) {
        $len = strlen($s);
        $tmps = '';
        $max = 0;
        for($i=0 ; $i<$len; $i++){ //Start subscript
            for($j=$i+1; $j<=$len;$j++){ //length
                if(isPalindrome(substr($s,$i,$j)) && $j > $max){
                    $tmps = substr($s,$i,$j);
                    $max = $j;
                }
            }
        }
        return $tmps;
    }

    echo longestPalindrome('aku suka makan nasi');

?>