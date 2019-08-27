<?php
namespace wap;
use wap\Post;
include 'post.php';

class Comment{
   public static function seed(){
      $posts = [];
      $posts[] = new Post("111111111"); 
      $posts[] = new Post("2222222222");
      $posts[] = new Post("3333333"); 
      return $posts;
   }
   
}
?>