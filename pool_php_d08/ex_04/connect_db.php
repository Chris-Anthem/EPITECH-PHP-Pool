<?php

/*EXERCISE_ 04 (1PT)
**_____
**File to hand in: pool_php_d08/ex_04/connect_db.php
**Using the function of the previous exercise (you must copy your previous function in this file), create a
**script that retrieves the connection information in command line.
**You must define the constant ERROR_LOG_FILE to “errors.log”.
**Execution of the script: php connect_db.php host username password port db
**In case the connection is successful, your script will display on the standard output “Connection to DB
**successful” followed by a new line.
**In case of failure, it will display the error message “Error connection to DB” followed by a new line.
**In case of missing parameters, it displays “Bad params! Usage: php connect_db.php host username pass-
**word port db” followed by a new line.
**All errors must be displayed on the standard output and in the ERROR_LOG_FILE.
*/

const ERROR_LOG_FILE ="error.log";

    function connect_db($host,$username,$passwd,$port,$db)
    {
        $connexion = new PDO("mysql:host=$host;port=$port;dbname=$db", $username,$passwd);
        return $connexion;
    }

    try
    {
        if(($argc) == 6)
        {
            connect_db($argv[1],$argv[2],$argv[3],$argv[4],$argv[5]);
            echo "Connection to DB successful\n"; 
        }
        else
        {
            $error = "Bad params! Usage: php connect_db.php host username password port db\n";
            file_put_contents ("error.log",$error,FILE_APPEND);
            echo $error;
        }
    }

    catch(PDOException $e)
    {
        $error = "PDO ERROR: ".$e->getMessage()." storage in".ERROR_LOG_FILE."\n";
        file_put_contents ("error.log",$error,FILE_APPEND);
        echo "Error connection to db.\n";
    }


//connect_db("localhost",'chris','12357931',"3306","gecko");
