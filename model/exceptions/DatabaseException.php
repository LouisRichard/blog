<?php

/**
 * Contains every errors regarding the database connection.
 * Author   : louis.richard@tutanota.com
 * Project  : blog
 * Created  : Aug 13. 2024
 * Info     : blog.richard486.ch
 *
 * Source       :   https://github.com/LouisRichard/Blog
 */

class DatabaseException extends Exception
{
    protected $message = "Connection to the database failed. Please try again later.";
}

class FailedToReachDatabaseException extends DatabaseException
{
    protected $message = "Failed to reach the database. Try again later";
}