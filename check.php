<?php
  //データを受け取る
    $nickname= htmlspecialchars($_POST['nickname']);
    $email= htmlspecialchars($_POST['email']);
    $content= htmlspecialchars($_POST['content']);

    //ニックネーム
    if($nickname == ''){
      $nickname= 'ニックネームが入力されていません。';
    }else{
    echo 'ようこそ' . $nickname . '様';
    }

    //メールアドレス
    if($email==''){
      $email = 'メールアドレスが入力されていません。';

    }else{
      echo 'メールアドレス：' . $email;

    }
    //お問い合わせ内容
    if($content ==''){
      $content= 'お問い合わせ内容が入力されていません。';
    }else{
      echo 'お問い合わせ内容：' . $content;
    }
  ?>

<!DOCTYPE html>
<html lang = "ja">
<head>
  <title>入力内容確認</title>
  <meta charset="utf-8"> 
</head>
<body>
  <h1>入力内容確認</h1>
  <p><?php echo $nickname; ?></p>
  <p><?php  echo $email; ?></p>
  <p><?php  echo $content; ?></p>  
  <form method="post" action="thanks.php">
  <input type="hidden" name="nickname" value="<?php echo $_POST['nickname']; ?>">
  <input type="hidden" name="email" value="<?php echo $_POST['email']; ?>">
  <input type="hidden" name="content" value="<?php echo $_POST['content']; ?>">


    <input type="button" onclick="history.back()" value="戻る">
    <?php if ($_POST['nickname'] != '' && $_POST['email'] != '' && $_POST['content'] !='') { ?>
  <input type="submit" value="OK">
  <?php } ?>
  </form>

</body>
</html>