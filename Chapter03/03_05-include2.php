<?php
    // this PHP code is to be included in another file
    function firstWord($string) {
        $offset = strpos($string," ");
        $r = substr($string,0,$offset);
        return($r);
    }
?>