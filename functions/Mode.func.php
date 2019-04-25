<?php

function setModeCookie($mode)
{
    $value = 'LIGHT';
    if (strcmp($mode, 'LIGHT') == 0)
        $value = 'LIGHT';
    else if (strcmp($mode, 'DARK') == 0)
        $value = 'DARK';
    else
        $value = 'LIGHT';
    if (isset($_COOKIE['Mode']))
        unset($_COOKIE['Mode']);
    setcookie("Mode", $value, time() + 31556926);
    header("Location: index.php");
}

function getModeCookie()
{
    $default = 'LIGHT';
    if (isset($_COOKIE['Mode'])) {
        if (strcmp($_COOKIE['Mode'], 'LIGHT') == 0)
            return 'LIGHT';
        else if (strcmp($_COOKIE['Mode'], 'DARK') == 0)
            return 'DARK';
        else
            return $default;
    } else
        return $default;
}
