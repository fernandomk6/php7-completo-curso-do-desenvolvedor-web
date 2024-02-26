<?php

function is_polindrome ($word) {
    $letters = explode("", $word);
    $letters_reverse = [];
    // 8, 
    for ($i = count($letters) - 1; $i > 0; $i--) {
        mb_split()
        $letters_reverse = $letters[$i];
    }

    print_r($letters_reverse);
}

is_polindrome("fernando");

