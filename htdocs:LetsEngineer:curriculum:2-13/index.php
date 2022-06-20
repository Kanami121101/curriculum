<?php
$a =5.8;
echo ceil($a);
echo '<br>';

$b = 8.9;
echo floor($b);
echo '<br>';
$c =-6.7;
echo floor($c);
echo '<br>';

echo round(9.9999999999, 2);
echo '<br>';

echo pi();
echo '<br>';

echo mt_rand(1,50);
echo '<br>';

$d ="wakamatsu";
echo strlen($d);
echo '<br>';

$e ="wakamatsu";
echo strpos($e,"a");
echo '<br>';

$f ="wakamatsu";
echo substr($f, -4, 2);
echo '<br>';

$g ="wakamatsu";
echo str_replace("waka","WAKA",$g);
echo '<br>';

$h="若松さん";
$limit_time =10;
printf("%sの残り時間はあと%s時間です",$h, $limit_time);
echo '<br>';

$limit_hour =5;
$limit_minute =6;
$limit_limit =sprintf("残り%02d時間%02d分",$limit_hour,$limit_minute);
echo $limit_limit;
echo '<br>';

$sql ="PostgreSQL（ポストグレスキューエル）はオープンソースのリレーショナルデータベース管理システム（RDBMS）です。Linux、macOSといったUNIX系OSはもちろんのこと、Windowsにも対応しています。すべてのソースは公開されており、用途を問わず無料で利用できます。またBSDライセンスという、オープンソースのライセンスの中でも非常に緩やかなライセンスを採用しているので、独自に機能の改変や追加を行っても公開義務はありません。";
echo $sql;
echo '<br>';

$ora ="Oracle SQLとは、Oracle社が開発・販売しているリレーショナル・データベース管理システムです";
echo $ora;
echo '<br>';

$git ="TortoiseGitとは、Gitをより扱いやすくするために開発されたWindows用ソフトウェアです。無料で扱うことができ、コマンドを打ち込んで実行するという少し初心者にはハードルの高い状態をこのTortoiseGitが解消してくれます。";
echo $git;
echo '<br>';

$svn="TortoiseSVN（トータスエスブイエヌ）はSubversionのクライアントフロントエンド（各種入力をユーザーから受け取り、バックエンドが使える仕様に合うようにそれを加工する役目を担う）となるソフトウェアです。";
echo $svn;
echo '<br>';

$l ="外部設計は、実際にシステムの仕様を決定する段階です。要件定義で決定したシステムの機能要件や非機能要件、制約条件、外部とのやり取りなどをより具体的な仕様にすることで、実際にプログラム可能な形にします。";
echo $l;
echo '<br>';

$n ="内部設計では、外部設計の結果を実際にプログラミングできるように、システム内部に特化した詳細な設計を行います。";
echo $n;
echo '<br>';

?>