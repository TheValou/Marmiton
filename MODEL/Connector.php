<?php

class Connector
{

    private $PDO_HOST = 'eu-cdbr-west-01.cleardb.com';
    private $PDO_DBBASE = 'heroku_2c626774a6f246b';
    private $PDO_USER = 'bacb1bfb30a150';
    private $PDO_PW = '3a84ccab';
    private static $_instance = NULL;    

//user name - password - HOST - database
//mysql://bacb1bfb30a150:3a84ccab@eu-cdbr-west-01.cleardb.com/heroku_2c626774a6f246b?reconnect=true

    private function __construct()
    {
        try
        {
            //self::$_instance = new PDO('mysql:dbname=marmiton;host=localhost', 'root', 'root');
            self::$_instance = new PDO("mysql:dbname='".$PDO_DBBASE."';host='".$PDO_HOST."', '".$PDO_USER."', '".$PDO_PW.")";

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