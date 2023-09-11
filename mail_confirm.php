<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
<title>お問合せフォームを作る</title>
<!-- cssへのリンク -->
  <link rel="stylesheet" type="text/css" href="style2.css">
</head>

<body>
  <!-- タイトル名 -->
  <h1>お問合せ内容確認</h1>

  <!-- 内容 -->
  <div class="confirm">
    <p>お問い合わせ内容はこちらで宜しいでしょうか？
      <br>よろしければ「送信する」ボタンを押して下さい。
    </p>
    <p>名前
      <br>
      <!-- 「index.html」から引き渡された「name」という箱を表示するという意味 -->
      <?php echo $_POST['name'];?>
    </p>
    
    <p>メールアドレス
      <br>
      <!-- 「index.html」から引き渡された「mail」という箱を表示するという意味 -->
      <?php echo $_POST['mail'];?>
    </p>
    
    <p>年齢
      <br>
      <!-- 「index.html」から引き渡された「age」という箱を表示するという意味 -->
      <?php echo $_POST['age']."歳";?>
    </p>
    
    <p>コメント
      <br>
      <!-- 「index.html」から引き渡された「comments」という箱を表示するという意味 -->
      <?php echo $_POST['comments'];?>
    </p>

    <!-- 「戻って修正する」ボタン -->
    <form action="index.html">
      <!-- ↑action="○○○"は、リンク先のURL(ファイル名)のこと。 -->
      <input type="submit" class="button1" value="戻って修正する"/>
      <!-- ↑value="○○○"は、ボタン上に表示されるテキストのこと。 -->
    </form>

    <!-- 「登録」ボタン -->
    <form action="insert.php" method="post">
      <!-- ↑「index.html」から引き渡されたpostをここで、再度箱の中に格納し、「insert.php」へ引き渡す。 -->
      <input type="submit" class="button2" value="登録する"/>
      <!-- ↓type="hidden"にすることで、代入した内容を隠す(web上に表示しない)ことができる。 -->
      <input type="hidden" value="<?php echo $_POST['name'];?>" name="name">
      <input type="hidden" value="<?php echo $_POST['mail'];?>" name="mail">
      <input type="hidden" value="<?php echo $_POST['age'];?>" name="age">
      <input type="hidden" value="<?php echo $_POST['comments'];?>" name="comments">
    </form>
  </div>
</body>
</html>