<?php

$say ="といったら";
$fruites =["apple"=>"りんご","orange"=>"みかん","peach"=>"もも"];
 foreach($fruites as $key=>$value){
   echo $key;
   echo ($say.$value.'<br>');
 }

echo '<br>';
$tora ="トランザンクションとは、取引記録などの意味の他に、ソフトウェアの処理方式の一つで、互いに関連・依存する複数の処理をまとめ、一体不可分の処理単位として扱うこと。";
echo $tora;
echo '<br>';

$rock ="排他ロックとは、データベースシステムなどで記憶領域への同時アクセスを制限するロック機構の一つで、他の実行主体によるアクセスを完全に禁止するもの。";
echo $rock;

echo '<br>';

$chu ="チューニングとは、システムのハードウェアやソフトウェアを調整して、処理性能を向上させたり、利用効率の改善を図ったりすることを指す";
echo $chu;


?>