<?php

    function endWith ($string, $string_end){
        $string_length = strlen($string_end);
        if ($string_length == 0){
            return true;
        }
        return (substr($string, -$string_length) === $string_end);
    }
