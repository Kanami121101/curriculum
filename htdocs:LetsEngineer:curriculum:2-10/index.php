<?php

function rectangular($y,$x,$height){
    $area =$y*$x*$height;
    print "立方体の体積は".$area."だよ";
}

rectangular(5,10,8);
 echo '<br>';

$f ="ハッシュ化は、ハッシュ関数によってデータを不規則な文字列に変換する手法";
echo $f;
echo '<br>';

$test ="総合テストとは、ソフトウェアおよびシステムの検証手法の１つで,構築したシステムが全体で予定通りの機能を満たしているか、また機能や性能が仕様書通りに構築できているかを検証すること。";
echo $test;
echo '<br>';

$bag ="デバッグとは、コンピュータプログラムに潜む欠陥を探し出して取り除くこと。";
echo $bag;

?>