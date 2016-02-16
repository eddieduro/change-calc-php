<?php
    class Change
    {
        function makeChange($value)
        {
            $change_array = array(0,0,0,0);
            $denomination = array(25, 10, 5, 1);
            for($i = 0; $i < 4; $i++) {
                while($value > ($denomination[$i] - 1)) {
                    $change_array[$i] += 1;
                    $value -= $denomination[$i];
                }
            }
            return "quarters:" . $change_array[0] . " dimes:" . $change_array[1] .  " nickels:" . $change_array[2] . " pennies:" . $change_array[3];
        }
    }
?>
