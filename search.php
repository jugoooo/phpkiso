<?php 
  //1 DBへ接続
  $dsn= 'mysql:dbname=phpkiso;host=localhost';
  $user= 'root';
  $password= '';
  $dbh= new PDO($dsn, $user, $password);
  $dbh->query('SET NAMES utf8');

  if (!empty($_POST)) {
$sql= 'SELECT * FROM `survey` WHERE `code`= ?';
$data[] = $_POST['code']; 

 echo $sql;

  //2 SQLを実行
  $stmt= $dbh->prepare($sql);
  $stmt->execute($data);

  
    //データ取得
    $rec= $stmt->fetch(PDO::FETCH_ASSOC);
    
    
     $code=$rec['code'];
     $nickname=$rec['nickname'];
     $email=$rec['email'];
     $content=$rec['content'];
  
  }
  //3 DB切断
  $dbh= null;

 ?>

 <!DOCTYPE html>
 <html lang="ja">
 <meta charset="utf-8">
 <head>
   <title>検索ページ</title>
 </head>
 <body>
  <form action="" method='post'>
    <p>検索したいコードを入力してください。</p>
    <input type="text" name="code">
    <input type="submit" value="検索">
  </form>
  <?php if (!empty($_POST)): ?>
  <div>
    <p>code: <?php echo $code; ?></p>
    <p>nickname: <?php echo $nickname; ?></p>
    <p>email<?php echo $email; ?></p>
    <p>content<?php echo $content; ?></p>
  </div>
  <?php endif; ?>
  
 </body>
 </html>