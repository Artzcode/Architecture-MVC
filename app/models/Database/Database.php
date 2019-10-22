<?php

namespace Database;

class Database
{
    private $host;
    private $hostname;
    private $user;
    private $password;

    protected function db()
    {
        $this->host = HOST;
        $this->hostname = HOST_NAME;
        $this->user = HOST_USER;
        $this->password = HOST_PASS;

        try 
        {
            $db = new \PDO('mysql:host=' . $this->host . ';dbname=' . $this->hostname . ';charset=utf8;', $this->user, $this->password);
            return $db;
        }
        catch(PDOExeption $e)
        {
            die('Bingo, database out of the game !');
            exit();
        }
    }
}