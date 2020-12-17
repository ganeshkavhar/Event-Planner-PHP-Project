<?php
class Connection {
    
    private static $connect = NULL;
    
    public static function getInstance() {
        if (Connection::$connect === NULL) {
            // connect to the database
            $host = "localhost";
			$database = "year2project";
			$username = "root";
			$password = "";

            $dsn = "mysql:host=" . $host . ";dbname=" . $database;
            Connection::$connect = new PDO($dsn, $username, $password);
            if (!Connection::$connect) {
                die("Could not connect to database");
            }
        }
        
        return Connection::$connect;
    }
    
    public static function getMySQLDate($date) {
        $date_arr  = explode('-', $date);
        return $date_arr[2] . '-' . $date_arr[1] . '-' . $date_arr[0];
    }
}
