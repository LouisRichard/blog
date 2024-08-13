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

 require "controler/controler.php";

 if(!isset($_GET['page'])){
    home();
 }
 else {

   $page = $_GET['page'];

   switch($page){
   case 'home' :
      home();
      break;
   case 'post' :
      if(!isset($_GET['id'])){
         home();
      }
      else {
         $post = $_GET['id'];
         getPost($post);
      }
      break;
   default :
      home();
      break;
   }
}