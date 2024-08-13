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
    $query = "SELECT title, id, date FROM posts ORDER BY date DESC LIMIT ".$amount;
    require_once "model/dbconnector.php";
    return executeQuerySelect($query);
 }

/**
 * Gets the content of the MD file from the post ID
 * @param int $postID
 * @return string content of the MD file
 */
 function getPostContent($postID){
   $fp = getPostFilepath($postID);
   if(file_exists("posts/".$fp[0][0])){
      return file_get_contents("posts/".$fp[0][0], true);
   } 
   return "Error : Invalid Post ID";
 }


 /**
  * Returns the path to the MD file for a given post ID
  * @param int postID
  * @return string path to the MD file stored in the database
  */
 function getPostFilepath($postID){
   $query = "SELECT mdfile FROM posts WHERE id = ".$postID;
   require_once "model/dbconnector.php";
   return executeQuerySelect($query);
 }