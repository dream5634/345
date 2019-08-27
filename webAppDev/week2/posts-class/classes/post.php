<?php
namespace wap;

class Post{
   protected $user;
   protected $message;
   protected $Date;
   protected $comments;

   function __construct($user,$message,$Date){
       $this->user =$user;
       $this->message =$message;
       $this->user =$Date;
       $this->comments =[];
   } 

   function getUser(){
    return $this->user;
   }

   function getMessage(){
    return $this->message;
   }

   function getDate(){
    return $this->Date;
   }


   function getComment(){
    return $this->comments;

   }

   
   function addComment($user,$comment){
    $this->comments[] = array("user" => $user, "comment"=>$comment);

   }

}
?>