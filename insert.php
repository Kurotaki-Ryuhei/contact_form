  <?php
  // ↓DBへ情報を格納する際に、文字化けしないようにするための決まり文句
  mb_internal_encoding("utf8");

                                            // ↓通常は、DB用のサーバー名
  //  ↓DBと接続する為の決まり文句           を記述するが、今回は自分のPC(ローカル環境)のMAMPを使用しているので、このような記述になる。  
  $pdo = new PDO("mysql:dbname=lesson1;host=localhost;","root","root");
                    //  ↑MySQLに接続し、                         ↑サーバー接続する際のIDとpasswordを記述。  
                    //  データベース「lesson1」を利用すという意味    MAMPの初期状態でのIDとpasswordは
                                                                    // ID : root  ,  PS : なし  なので、このような記述になる。
  // DBへ格納する際に記述するSQL文(insert文)の前に記述
  // ※CRUDのうち、select文のみ「exec」でなく、「query」を利用します。
    // ↓              ↓通常のSQL文(insert文)と同じ記述の仕方
  $pdo->exec("insert into contactform(name, mail, age, comments)values  
  ('".$_POST['name']."', '".$_POST['mail']."', '".$_POST['age']."', '".$_POST['comments']."');");
        // ↑DBへ送る為の情報
        // 「'」「"」「.」$_POST['name']「.」「"」「'」記述の間違いには注意！！Javaでも同じ記述をする。
        // 複数の情報を送る場合は、カンマ区切り「,」にすること。
  ?>

  <!DOCTYPE html>
  <html lang="ja"> 

  <head>
  <meta charset = "utf-8">
    <title>お問合わせフォームを作る</title>
  <link rel = "stylesheet" type= "text/css" href= "style2.css">
  </head>

  <body>
    <h1>お問合わせフォーム</h1>

    <div class = "confirm">
      <p>お問い合わせありがとうございました。<br>3営業日以内に担当者よりご連絡差し上げます。
    </p>

    </div>
  </body>