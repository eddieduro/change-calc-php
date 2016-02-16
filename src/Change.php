<?php
    class Change
    {
        function makeChange($value)
        {
            $change_array = array();

            $quarter = round($value/25);
            array_push($change_array, $quarter);
            $remainder = ($value % 25);

            $dimes = round($remainder/10);
            array_push($change_array, $dimes);
            return $change_array;
        }
    }
?>
