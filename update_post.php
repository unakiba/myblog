<?php
//　記事の更新
require_once('./init.php');



if (!empty($_POST)) {

  $stmt = $dbh->prepare('UPDATE posts SET post_title = :post_title, post_content = :post_content WHERE id = :id');

  $stmt->execute(array(':post_title' => $_POST['post_title'], ':post_content' => $_POST['post_content'], ':id' => $_POST['id']));
  header('Location: index.php');
  exit;
}


?>

