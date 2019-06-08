<?php

Class Lib {
    static function Sanitize($str) {
        $sanitizeStr = trim($str);
        $sanitizeStr = strip_tags($sanitizeStr);
        $sanitizeStr = htmlentities($sanitizeStr, ENT_NOQUOTES);
        $sanitizeStr = filter_var($sanitizeStr, FILTER_SANITIZE_STRIPPED);
        return $sanitizeStr;
    }

    static function setStyleHref() {
        $styleHref = 'style-light';
        if (strcmp(getModeCookie(), 'LIGHT') == 0)
            $styleHref = 'style-light';
        else if (strcmp(getModeCookie(), 'DARK') == 0)
            $styleHref = 'style-dark';
        else
            $styleHref = 'style-light';
        return $styleHref;
    }
}
