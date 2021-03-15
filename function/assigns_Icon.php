<?php
    require_once('endWith.php');
    require_once('startsWith.php');

    public function assignsIcon() {

        public $icon;
        if(is_dir($path)) {
            $icon = '..';
        } else if (is_file($path)){
            if(endWith($path, ".php")){
                $icon = 'o/';
            }
        }

        return $icon;
    }