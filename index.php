<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../style.css">

</head>
<body>

<table border="1" cellspacing="0" cellpadding="0">
<?php
	//九九の表の縦方向に出力するためのループ
	for( $i = 1 ; $i <= 9 ; $i++ ){

		//テーブルの縦方向のタグを出力
		echo "<tr>";

		//九九の表の横方向に出力するためのループ
		for( $j = 1 ; $j <= 9 ; $j++ ){
			
      // テーブルの縦方向のタグを出力
			echo "<td>";
			
			//計算結果を出力する
			echo $i * $j;
			echo "</td>";
		}
	}

?>
</table>

</body>
</html>
