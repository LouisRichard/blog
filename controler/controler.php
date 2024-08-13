<?php
/**
 * This php file is designed to load the correct page and charge the correct values
 * Author   : louis.richard@tutanota.com
 * Project  : blog
 * Created  : Aug. 13 2024
 *
 * Source       :   https://github.com/blog
 */

include 'vendor/Parsedown.php';

/**
 * Loads the home page view
 */
function home(){
    $latest = getLastBlogs();
    require "view/home.php";
}

/**
 * Get the latest blog posts' titles, ID and date of publication
 * @param int amount of posts (default : 20)
 * @return array Title, Article ID and Date of puiblication
 */
function getLastBlogs($amount = 20){
    require_once "model/blogManager.php";
    return getLatest($amount);
}

/**
 * Returns the content of a single post
 * @param int post ID
 * @return string content of the MD file
 */
function getPost($postID){
    if(is_numeric($postID)){
        require_once "model/blogManager.php";
        $postContent = getPostContent($postID);
        $Parsedown = new Parsedown();
        $postContentHtml = $Parsedown->text($postContent);
        require "view/post.php";
    } else {
        home();
    }

}