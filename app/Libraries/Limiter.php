<?php
namespace Libraries;

class Limiter{
    
    function word_limiter($string, $word_limit) {
        $words = explode(" ",$string);
        return implode(" ",array_splice($words,0,$word_limit));
    }
}