<?php
/**
 * Index file for the project. Redirects to the desired page.
 * Author   : louis.richard@tutanota.com
 * Project  : blog
 * Created  : Aug. 13 2024
 * Info     : This file has been adapted from another project : https://github.com/Havachi/ProjetWEB-DB-LJACorp
 *
 * Source       :   https://github.com/LouisRichard/blog
 */

 session_start();

 if(!isset($_GET['page'])){
    require_once "controler/controler.php";
    home();
 }