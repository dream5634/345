<?php
namespace wap;

class Comment{
   protected $user;
   protected $message;
//    protected $Date;
//    protected $comment;

   function __construct($user,$message){
       $this->user =$user;
       $this->message =$message;
    //    $this->user =$Date;
    //    $this->comments =[];
   } 

   function getUser(){
    return $this->user;
   }

   function getMessage(){
    return $this->message;
   }

//    function getDate(){
//     return $this->Date;
//    }


//    function getComment(){
//     return $this->comments;

//    }

   
  

}
?>