<!DOCTYPE html>
<html lang="ja">
 <head>
  <meta charset="UTF-8">
  <title>4each掲示板</title>
  <link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body>
  
  <?php
  mb_internal_encoding("utf8");
  $pdo= new PDO("mysql:dbname=lesson01;host=localhost;","root","root");
  $stmt=$pdo->query("select*from 4each_keijiban");
  ?>
  
  <header>
   <h1><img src="4eachblog_logo.jpg"></h1>
   <ul class="menu">
     <li>トップ</li>
     <li>プロフィール</li>
     <li>4eachについて</li>
     <li>登録フォーム</li>
     <li>問い合わせ</li>
     <li>その他</li>
   </ul>
  </header>
  
  <main>
   <div class="contents_left">
    <h2>プログラミングに役立つ掲示板</h2>
    <div class="input">
     <h3>入力フォーム</h3>
     
     <form method="post" action="insert.php">
      
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
       <textarea name="comments" rows="7" cols="35"></textarea>
      </div>
      
      <div>
       <input type="submit" class="submit" value="投稿する">
      </div>
     </form>
    </div>
    
    <?php
    while($row = $stmt->fetch()){
     echo "<div class='output'>";
     echo "<h3>".$row['handlename']."</h3>";
     echo "<div class='contents'>";
     echo $row['comments'];
     echo "<div class='handlename'>posted by".$row['handlename']."</div>";
     echo "</div>";
     echo "</div>";
    }
     
    ?>
   </div>
   
   <div class="contents_right">
    <h3>人気の記事</h3>
     <ul>
       <li>PHPオススメの本</li>
       <li>PHP MyAdminの使い方</li>
       <li>今人気のエディタ Top5</li>
       <li>HTMLの基礎</li>
     </ul>
     <h3>オススメリンク</h3>
     <ul>
       <li>インターノウス株式会社</li>
       <li>XAMPPダウンロード</li>
       <li>Eclipseのダウンロード</li>
       <li>Bracketsのダウンロード</li>
     </ul>
     <h3>カテゴリ</h3>
     <ul>
       <li>HTML</li>
       <li>PHP</li>
       <li>My SQL</li>
       <li>JavaScript</li>
     </ul>
   </div>
  </main>
  <footer>
   <p>copyright&copy; | 4each blog the which provides A to Z about programming.</p>
  </footer>
 </body>
</html>