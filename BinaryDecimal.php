<?php

    function bin_to_dec($bin) {
        $bin = str_split($bin);
        $bin = array_reverse($bin);

        $i = 0;
        $dec = 0;
        foreach($bin as $values) {
            $ans = $values * pow(2, $i);
            $dec += $ans;
            $i++;
        }

    return $dec;
    }

    echo bin_to_dec($_POST['angka']);

?>