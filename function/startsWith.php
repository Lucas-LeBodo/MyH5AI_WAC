<?php


    function startsWith($string, $string_start){
        $string_length = strlen($string_start);
        return (substr($string, 0, $string_length) === $string_start);
    }
