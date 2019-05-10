<?php
class Games {
    function getGames() {
        $dbh = SQL::createSecureDataConnection();
        if (!$dbh)
            return NULL;
        $gameRequest = $dbh->query("SELECT href, path, name FROM games");
        if (!$gameRequest)
            return NULL;
        $gameResult = $gameRequest->fetchAll();
        $dbh = NULL;
        return $gameResult;
    }
}
