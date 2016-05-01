<?php
/**
 * Created by PhpStorm.
 * User: wacharapongnachiengmai
 * Date: 7/25/15 AD
 * Time: 12:15
 */
/**
 * A class file to connect to database
 */
class DB_CONNECT {

    // constructor
    function __construct() {
        // connecting to database
        $this->connect();
    }

    // destructor
    function __destruct() {
        // closing db connection
        $this->close();
    }

    /**
     * Function to connect with database
     */
    function connect() {
        // import database connection variables
        require_once 'db_config.php';

        // Connecting to mysql database
        $con = mysql_connect(DB_SERVER, DB_USER, DB_PASSWORD) or die(mysql_error());


        // Selecing database
        $db = mysql_select_db(DB_DATABASE) or die(mysql_error()) or die(mysql_error());
        mysql_query("SET NAMES 'utf8' COLLATE 'utf8_general_ci';");
        // returing connection cursor
        return $con;
    }

    /**
     * Function to close db connection
     */
    function close() {
        // closing db connection
        mysql_close();
    }

}

?>