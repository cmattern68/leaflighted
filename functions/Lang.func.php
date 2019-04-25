<?php

function setLangCookie($lang)
{
    $value = 'EN';
    if (strcmp($lang, 'EN') == 0)
        $value = 'EN';
    else if (strcmp($lang, 'FR') == 0)
        $value = 'FR';
    else
        $value = 'EN';
    if (isset($_COOKIE['Lang']))
        unset($_COOKIE['Lang']);
    setcookie("Lang", $value, time() + 31556926);
    header("Location: index.php");
}

function changeLanguage()
{
    if (isset($_COOKIE['Lang'])) {
        if (strcmp($_COOKIE['Lang'], 'EN') == 0)
            return setLanguageEN();
        else if (strcmp($_COOKIE['Lang'], 'FR') == 0)
            return setLanguageFR();
        else
            return setLanguageEN();
    } else
        return setLanguageEN();
}

function setLanguageFr()
{
    $path = "/opt/lampp/htdocs/leaflighted/lang/fr-FR.json";
    $file = fopen($path, "r") or die("Unable to open file!");
    $content = fread($file, filesize($path));
    fclose($file);
    $json = json_decode($content, true);
    return $json;
}

function setLanguageEN()
{
    $path = "/opt/lampp/htdocs/leaflighted/lang/en-EN.json";
    $file = fopen($path, "r") or die("Unable to open file!");
    $content = fread($file, filesize($path));
    fclose($file);
    $json = json_decode($content, true);
    return $json;
}
