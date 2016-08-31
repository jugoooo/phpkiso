<?php 
  //1 DBへ接続
  $dsn= 'mysql:dbname=phpkiso;host=localhost';
  $user= 'root';
  $password= '';
  $dbh= new PDO($dsn, $user, $password);
  $dbh->query('SET NAMES utf8');

  //2 SQL文を実行
$sql= 'SELECT * FROM `survey` WHERE 1';
  // SQLを実行
  $stmt= $dbh->prepare($sql);
  $stmt->execute();

  while (1) {
    //データ取得
    $rec= $stmt->fetch(PDO::FETCH_ASSOC);
    if ($rec== false){
    break;
    }
    echo $rec['code'];
    echo $rec['nickname'];
    echo $rec['email'];
    echo $rec['content'];
    echo '<br>';
  }
  //3 DB切断
  $dbh= null;

 ?>