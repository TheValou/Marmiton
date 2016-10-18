<?php

class Connector
{

    private $PDO_HOST = 'localhost';
    private $PDO_DBBASE = 'marmiton';
    private $PDO_USER = 'root';
    private $PDO_PW = '';
    private static $_instance = NULL;    

//mysql://bacb1bfb30a150:3a84ccab@eu-cdbr-west-01.cleardb.com/heroku_2c626774a6f246b?reconnect=true

    private function __construct()
    {
        try
        {
            self::$_instance = new PDO('mysql:dbname=marmiton;host=localhost', 'root', 'root');
        } catch (PDOException $e){;
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }
    }
    
    public static function getInstance()
    { 
        if(self::$_instance == NULL)
            new Connector();  
        return self::$_instance;
    }

}

?>