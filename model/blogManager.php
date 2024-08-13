<?php
/**
 * This php file is designed to manage the reception of blog posts
 * Author   : louis.richard@tutanota.com
 * Project  : blog
 * Created  : Aug 13. 2024
 * Info     : blog.richard486.ch
 *
 * Source       :   https://github.com/LouisRichard/Blog
 */


 /**
  * Gets the latest blog posts titles and URL
  * @param int $amount maximum amount to get at once (default 20)
  * @return array X amount of blog posts titles and URL 
  */
 function getLatest($amount=20){
    $query = "SELECT title, id, date FROM posts LIMIT ".$amount;
    require_once "model/dbconnector.php";
    return executeQuerySelect($query);
 }