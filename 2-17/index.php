<?php 
$ct = 0;
$sum = 0;
do {
$ct++;
$num = rand(1, 6);
printf("%d回目 = %d<br>", $ct, $num);
$sum += $num;
} while ($sum < 40);
printf("合計%d回でゴールしました。<br>", $ct);
?>
<br>
<?php
date_default_timezone_set('Asia/Tokyo');
    $today = date('H');
    $aa = intval($today);
    if($aa<=10){
        echo "今{$aa}時台です<br>おはようございます";
    } elseif($aa<=18){
        echo "今{$aa}時台です<br>こんにちは";
    }  else {
        echo  "今{$aa}時台です<br>こんばんは";
    }
?>




