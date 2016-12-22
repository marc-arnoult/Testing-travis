<?php

class Connection
{
    public static function make()
    {
        try {
            return new PDO('mysql:host=localhost;dbname=jeux', 'root', 'root');
        } catch (PDOException $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }
}