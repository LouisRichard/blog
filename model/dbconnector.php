<?php
/**
 * This php file is designed to manage SQL connexion with the database
 * Author   : louis.richard@tutanota.com
 * Project  : blog
 * Created  : Aug 13. 2024
 * Info     : blog.richard486.ch
 *
 * Source       :   https://github.com/LouisRichard/Blog
 */

 /**
 * this function is design to open a database connexion with the SQL server
 * @return PDO open database connexion
 * @throws FailedToReachDatabaseException
 */
function openDBConnexion()
{
    $tempDbConnexion = null;

    $sqlDriver = 'mysql';
    $hostname = 'localhost';
    $port = 3306;
    $charset = 'utf8';
    $dbName = 'blog';
    $userName = 'root';
    $userPwd = '';
    $dsn = $sqlDriver . ':host=' . $hostname . ';dbname=' . $dbName . ';port=' . $port . ';charset=' . $charset;
    try {
        $tempDbConnexion = new PDO($dsn, $userName, $userPwd);
    } catch (PDOException $exception) {
        require_once "model/exceptions/DatabaseException.php";
        throw new FailedToReachDatabaseException();
    }

    return $tempDbConnexion;
}

/**
 * This function is designed to execute a query received as parameter
 * @param string $query : SQL command starting with SELECT
 * @return array|null : Query result (can be null)
 */
function executeQuerySelect($query)
{
    $queryResult = null;

    $dbConnexion = openDBConnexion(); //open database connexion
    if ($dbConnexion != null) {
        $statement = $dbConnexion->prepare($query);
        $statement->execute(); //execute query
        $queryResult = $statement->fetchAll(); //prepare result for client
    }
    $dbConnexion = null; //close database connexion
    return $queryResult;
}
?>