<?php

/*_ EXERCISE_ 03 (3PTS)
**File to hand in: pool_php_d08/ex_03/db_pdo.php
**Restrictions: You need to manage PDO exceptions. You will display the error content in the following way:
**“PDO ERROR: <$error> storage in <error_log_file>\n”.
**<error_log_file> is a constant called ERROR_LOG_FILE which will represent the path to your log file (it can
**be whatever you want). You must write this error in the <error_log_file>.
**Create a function that enables a connection to a MySQL database and returns the connection resource.
**Prototype: mixed connect_db($host, $username, $passwd, $port, $db);
**Prototype: mixed connect_db($host, $username, $passwd, $port, $db);
*/


//-------------------------------------------------------------


/*
**TESTER L’EXTENSION PDO
**Tester l’extension PDO pour s’assurer que celle-ci est bien fonctionnelle sur le serveur.
**La plupart des serveurs web l’ont installés par défaut, mais il vaut mieux s’en assurer afin d’éviter une erreur inutile.
*/

function test_PDO()  
{
    if (extension_loaded ('PDO'))
    {
        echo 'PDO OK' . PHP_EOL; 
    } 
    else 
    {
        echo 'PDO KO' . PHP_EOL; 
    }
}

const ERROR_LOG_FILE ="error.log";

function connect_db($host, $username,$passwd,$port,$db)
{
   try
    {
        $connexion = new PDO("mysql:host=$host;dbname=$db;port=$port",$username,$passwd);
        echo "Connection succes\n";
        return $connexion;       
    }

    catch (PDOException $exception)
    {
        $error = "PDO ERROR: ".$exception->getMessage()." storage in".ERROR_LOG_FILE."\n";
        file_put_contents ("error.log",$error,FILE_APPEND);
        mail('christian.villeger@epitech.eu', 'PDOException', $exception->getMessage());
        exit('Erreur de connexion à la base de données' . PHP_EOL);
    }
}
/*
**test_PDO();
**connect_db("localhost",'chris','1235793111111111111111111111111111111111',"3306","gecko");
*/
