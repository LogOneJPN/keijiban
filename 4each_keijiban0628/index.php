<!DOCTYPE HTML>

<html lang ="ja">

<head>
  <meta charset = "UTF-8">
  <title>4each 掲示板</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    
  <?php 
    
    mb_internal_encoding("utf8");
    $pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","mysql");
    
    $stmt = $pdo->query("select * from 4each_keijiban");
    
  ?>

<header>
  <div id = "logo">
    <img src = "4eachblog_logo.jpg">
  </div>

  <ul id = "menu">
	  <li>トップ</li>
	  <li>プロフィール</li>
	  <li>4eachについて</li>
	  <li>登録フォーム</li>
	  <li>問合せ</li>
	  <li>その他</li>
	</ul>
</header>

<main>
  <left>
      
    <div id = "left-container">
      <h1 id = h1left>プログラミングに役立つ掲示板</h1>

      <form method = "post" action = "insert.php">
        <h2 id = "h2left">入力フォーム</h2>

        <div class = "left">
          <label>ハンドルネーム</label>
          <br>
          <input type = "text" size = "40" name = "handlename">
        </div>

        <div class = "left">
          <label>タイトル</label>
          <br>
          <input type = "text" size = "40" name = "title">
        </div>

        <div class = "left">
          <label>コメント</label>
          <br>
            <textarea cols = "60" rows = "7" name = "comments"></textarea>
        </div>

        <div class = "left">
          <input type = "submit" class = "submit" value = "送信する">
        </div>
      </form>
    </div>
      
  <?php
      
  while($row = $stmt->fetch()){
      
    echo "<div id = 'left-container2'>";
    echo "<h3>".$row['title']."</h3>";
    echo "<div class = 'contents'>";
    echo $row['comments'];
    echo "<div class = 'handlename'>posted by ".$row['handlename']."</div>";
    echo "</div>";
    echo "</div>";
  }
   
  ?>
      
  </left>

  <div id = "right-container">
    <h2 class = "h2right">人気の記事</h2>
      <ul class = "rightMenu">
        <li>PHP オススメ本</li>
        <li>PHP MyAdminの使い方</li>
        <li>今人気のエディタ Top5</li>
        <li>HTMLの基礎</li>
      </ul>
    <h2 class = "h2right">オススメリンク</h2>
      <ul class = "rightMenu">
        <li>インターノウス株式会社</li>
        <li>XAMPPのダウンロード</li>
        <li>Eclipseのダウンロード</li>
        <li>Bracketsのダウンロード</li>
      </ul>
    <h2 class = "h2right">カテゴリ</h2>
      <ul class = rightMenu>
        <li>HTML</li>
        <li>PHP</li>
        <li>MySQL</li>
        <li>JavaScript</li>
      </ul>
  </div>

</main>

<footer>
  copyright © internous | 4each blog is the one which provides A to Z about programming.
</footer>

</body>

</html>
