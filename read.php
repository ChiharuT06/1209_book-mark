

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>letter</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="text-all">

<?php
// ファイルを開く。モードは'r' = 読み込みのみでオープン。
$openFile = fopen('./data/data.txt', 'r');

// ファイル内容を1行ずつ読み込んで出力
while ($str = fgets($openFile)) {
                                    //while ⇒ ①関数
                                    //( ②whileの為に必要な材料)
                                    //$str ⇒ string 文字列の略
    
    echo '<div class="comment">';                                //(③fgetsの為に必要な材料)
    echo nl2br($str);
    echo '</div>';  
                                    //{ ④行う処理 }
                                    //nl2brで改行
};

fclose($openFile);

?>
</div>
</body>
</html>
