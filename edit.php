<?php
require_once('init.php');

// idがない場合は404 Not Found
if (empty($_GET['id'])) {
  include_once('404.php');
  exit;
}

$postId = $_GET['id'];
$postData = null;
$comments = [];

// 記事の取得
if (!empty($postId)) {
  $postData = findPostById($postId);
}

// 記事データがない場合は404 Not Found
if (empty($postData)) {
  include_once('404.php');
  exit;
}



?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>編集</title>
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
  
<form action="./update_post.php" method="post">
    <input type="hidden" name="id" value="<?php  echo $postId?>">
    <div>
      <input type="text" name="post_title" placeholder="タイトル"  id="post_title" value="<?php  echo h($postData['post_title']); ?>">
    </div>
    <div>
      <textarea name="post_content" id="post_content" ><?php echo h($postData['post_content']); ?></textarea>
    </div>
    <div>
      <button type="submit">編集</button>
    </div>
  </form>

</div>
  
</body>

</html>