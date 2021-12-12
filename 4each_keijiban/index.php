<!DOCTYPE html> 
<html lang="ja">

<head>
<meta charset="UTF-8">
<title>4each 掲示板</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>

<body>
<?php
mb_internal_encoding("utf8");
$pdo=new PDO("mysql:dbname=Lesson1;host=localhost;","root","root");
$stmt=$pdo->query("select * from 4each_keijiban");
 ?> 

  <div class="logo"><img src="4eachblog_logo.jpg"></div>

  <header>
    <ul>
      <li>トップ</li>
      <li>プロフィール</li>
      <li>4eachについて</li>
      <li>登録フォーム</li>
      <li>お問い合わせ</li>
      <li>その他</li>
    </ul>
  </header>

  <main>
  <div class="main-content">
  <div class="left">
    <h1>プログラミングに役立つ掲示板</h1>
  
    
   
  <form method="post" action="insert.php">
   <h2>入力フォーム</h2>
     <div>
      <label>ハンドルネーム</label>
      <br>
      <input type="text" class="text" size="35" name="handlename">
      
     </div>
     <div>
      <label>タイトル</label>
      <br>
      <input type="text" class="text" size="35" name="title">
     
     </div>
     <div>
       <label>コメント</label>
       <br>
       <textarea  cols="70" rows="7" name="comments"></textarea>
       
     </div>
       <input type="submit" class="button1" value="投稿する"/>     
     </form>
     
     <?php
     while ($row=$stmt->fetch()){

      echo "<div class='content1'>";
      echo "<h3>".$row['title']."</h3>";
      echo "<div class='content'>";
      echo $row['comments'];
      echo "<div class='handlename'>posted by".$row['handlename']."</div>";
      echo "</div>";
      echo "</div>";
       }
       ?>

    </div>
  </div>
  <div class="right">
      <h2>人気の記事</h2>
      <ul>
        <li>PHPオススメ本</li>
        <li>PHP MyAdminの使い方</li>
        <li>今人気のエディタ Top5</li>
        <li>HTMLの基礎</li>
      </ul>
      <h2>オススメリンク</h2>
      <ul>
        <li>インターノウス株式会社</li>
        <li>XAMAPPのダウンロード</li>
        <li>Eclipseのダウンロード</li>
        <li>Bracketsのダウンロード</li>
      </ul>
      <h2>カテゴリ</h2>
      <ul>
        <li>HTML</li>
        <li>PHP</li>
        <li>MySQL</li>
        <li>javaScript</li>
      </ul>
  </div>
  </div>
  </main>

  <footer>
    copyright©️©️internous | 4each blog the which provides A to Z about programming.</p>    
  </footer> 
</body>
