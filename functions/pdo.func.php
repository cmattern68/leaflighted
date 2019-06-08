<?php
class SQL {
    static function createSecureDataConnection() {
        $dbh = NULL;
        try {
            $dbh = new PDO('mysql:host=localhost;dbname=leaflighted', 'root', '');
        } catch (PDOException $e) {
            print "Error: " . $e->getMessage() . "<br/>";
            die();
        }
        return $dbh;
    }
}
