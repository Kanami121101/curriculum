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
$morning ="03,04,05,06,07,08,09,10";
$noon = "12,13,14,15,16,17,18";
function today_time($today){
    $today = date('H');
    $aa = intval($today);
    if($aa == $morning){
        echo "今$aa.時台です<br>おはようございます";
    } elseif($aa== $noon){
        echo "今$aa.時台です<br>こんにちは";
    } else {
        echo "今$aa.時台です<br>こんばんは";
    }
}
echo today_time($today);
?>