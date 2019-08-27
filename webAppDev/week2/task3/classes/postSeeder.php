<?php
namespace wap;
use wap\Post;
include 'post.php';

class PostSeeder{
   public static function seed(){
      $posts = [];
      $posts[] = new Post("Rita","HI","1/11/11"); 
      $posts[] = new Post("Woo","Hello","2/12/19");
      $posts[] = new Post("Zhu","Miss u","12/2/15"); 
      return $posts;
   }
   
}
?>