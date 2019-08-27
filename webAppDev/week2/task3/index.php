<?php
    include 'classes/postSeeder.php';

    $posts = wap\PostSeeder::seed();

    $posts[0]->addComment("BOB","NICE");
    $posts[0]->addComment("Zhu","Good");
    $posts[1]->addComment("BOB","NICE Nice");
    //var_dump($posts);
    //exit;
?>

<!DOCTYPE html>
<html lang="en"> 
  <head>
    <meta charset="utf-8">
    <title>title</title>
    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
    <div id="content">
    
      <h1>Social Media</h1>
      <?php foreach($posts as $post) {?>
        <div id="post">
          <?= $post ->getUser() ?>
          <?= $post ->getMessage() ?>
          <?= $post ->getDate() ?><br>

          <b>Comments:</b><br>
          <?php $comments =$post->getComment(); 
          foreach($comments as $comment){ ?>
            <?= $comment["user"] ?> said <? $comment["comment"] ?><br>
          <?php } ?>
        </div>
      <?php }?>
    </div>
  </body>
</html>