<?php
for($i=1; $i<=100; $i++){
    if($i%3==0 && $i%5==0){
     echo "FizzBuzz";
    } elseif($i%3==0){
        echo "Fizz";
    } elseif($i%5==0){
        echo "Buzz";
    } else {
        echo $i;
    }
     echo '<br>';
}

echo '<br>';
$paf="パフォーマンスとは、コンピュータなどの機器やソフトウェア、システムなどの処理性能や実行速度、通信回線・ネットワークなどの伝送速度・容量などのことを指す";
echo $paf;
echo '<br>';

$eri="データベースにおいて、時間のかかっているSQL(遅いSQL)のことをスロークエリと呼ぶ";
echo $eri;

echo '<br>';
$rog="クエリログとは、MySQL サーバが実行した全ての SQL クエリを出力するログで、 MySQL サーバに接続した時間、接続元ユーザ、実行したSQL を出力する";
echo $rog;

?>
