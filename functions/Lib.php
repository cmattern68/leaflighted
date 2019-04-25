<?php

Class Lib {
    function Sanitize($str) {
        $sanitizeStr = trim($str);
        $sanitizeStr = strip_tags($sanitizeStr);
        $sanitizeStr = htmlentities($sanitizeStr, ENT_NOQUOTES);
        $sanitizeStr = filter_var($sanitizeStr, FILTER_SANITIZE_STRIPPED);
        return $sanitizeStr;
    }
}
