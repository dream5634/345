<?php
    $posts = array();
    $posts[] =   array(
        'name' => 'Rita',
        'message' => 'hello',
        'image' => 'images/header.jpg',
        'date' => '1/1/11'
    );

   
    $posts[] =   array(
        'name' => 'wooo',
        'message' => "Miss u",
        'image' => 'images/header.jpg',
        'date' => '1/1/19'
    );

   
    $posts[] =   array(
        'name' => 'zhu',
        'message' => 'Sunny',
        'image' => 'images/header.jpg',
        'date' => '1/1/18'
    );

    //var_dump($posts);
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
      <?php foreach($posts as $posts) {?>
        <div id="post">
          <?= $posts['name'] ?>
          <?= $posts['message'] ?><br>
          <img src="<?= $posts['image'] ?>" alt="header">
          <?= $posts['date'] ?><br>
        </div>
      <?php }?>
    </div>
  </body>
</html>