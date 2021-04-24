<?php
//　記事の投稿
require_once('./init.php');

if (!empty($_POST)) {
  $id = createPost($_POST['post_title'], $_POST['post_content']);
  header('Location: post.php?id=' . $id);
  exit;
}
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>記事投稿</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div id="content">
    <div id="header">
      <a href="index.php">
        <h1>マイブログ</h1>
      </a>
      <div class="nav">
        <ul>
          <li><a href="./create_post.php">新規作成</a></li>
        </ul>

      </div>

    </div>
    <div id="top" class="main">
      <div class="center-title">
        <h1>マイブログ</h1>
      </div>
    </div>
  </div>
<div id="newpost">
  
<form action="./create_post.php" method="post">
    <div>
      <input type="text" name="post_title" placeholder="タイトル"  id="post_title">
    </div>
    <div>
      <textarea name="post_content" id="post_content" ></textarea>
    </div>
    <div>
      <button type="submit">作成</button>
    </div>
  </form>

</div>
  
</body>

</html>