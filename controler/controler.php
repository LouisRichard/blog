<?php
/**
 * This php file is designed to load the correct page and charge the correct values
 * Author   : louis.richard@tutanota.com
 * Project  : blog
 * Created  : Aug. 13 2024
 *
 * Source       :   https://github.com/blog
 */

/**
 * Loads the home page view
 */
function home(){
    $latest = getLastBlogs();
    require "view/home.php";
}


function getLastBlogs(){
    require_once "model/blogManager.php";
    return getLatest();
}