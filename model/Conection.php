<?php

    require_once('DataConection.php');

    class Conection extends DataConection
    {
        static private $connect;
        static private $response;

        function connectDB()
        {
            self::$connect = new mysqli(parent::server, parent::user, parent::password, parent::database);
            mysqli_query(self::$connect, 'SET NAMES"'.parent::charset.'"');
            self::$response = "La conexión ha sido exitosa";
            if(self::$connect->connect_error)
            {
                self::$response = "La conexión NO ha sido exitosa".self::$connect->connect_error;
            }
            echo self::$response;
        }
    }
   
    $objeto = new Conection();
    $objeto->connectDB();
?>