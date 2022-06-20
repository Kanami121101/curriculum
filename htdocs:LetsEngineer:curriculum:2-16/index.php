<?php
$test = "test.txt";
$contents = "こんばんは";

if (is_writable($test)) {
    $fp=fopen($test, "w");
    fwrite($fp,$contents);
    fclose($fp);
    echo "finish writing!!";
} else{
    echo "not writable!";
}


$testa ="test2.txt";

if(is_readable($testa)){
    $fp =fopen($testa, "r");
    while($line=fgets($fp)){
        echo $line.'<br>';
    }
    fclose($fp);
} else {
    echo "not readable!!!";
    exit;
}

$p ="CakePHPの2系・3系の違いは、CakePHP 2系
2系最後のメジャーバージョンでもあり、LTS(Long Term Support)が宣言されている 2.10.x がリリースされています
最新は 2.10.5
2.10.x は 4.0 がリリースされてから、1年間バグフィックスが行われ、18ヶ月間セキュリティフィックスがおこなわれます
CakePHP 3系
最新は 3.5.6
3系最後のメジャーバージョンになるのは 3.6.x であり、このバージョンが LTS される
3.6.x は 4.0 がリリースされてから、18ヶ月バグフィックスがおこなれ、3年間セキュリティフィックスがおこなわれます
3.6.0 までは積極的に新機能を盛り込んでいく
将来廃止予定の機能に関しては非推奨マークをつけ、将来に備えることができるようにする
";
echo $p;
echo '<br>';

$l="LAMPとは、オープンソースソフトウェアの組み合わせを指す言葉（略称）です。
具体的にはOSのLinux、WebサーバーのApache、データベースのMySQL、プログラミングのPerl、PHP、Pythonを指します。LAMPとはこれらの頭文字を取ったものです。いずれも、データベース連動型で動的なコンテンツを含むWebサイトの構築に適しており、かつ人気の高いものです。OSたるLinuxのディストリビューションにおいては、これらLAMPがセットとなって配布されているものもあります。";
echo $l;
echo '<br>';

$j="AWSとは、アマゾン ウェブ サービス (AWS)のことで、世界で最も包括的で広く採用されているクラウドプラットフォームです。世界中のデータセンターから 200 以上のフル機能のサービスを提供しています。急成長しているスタートアップ、大企業、主要な政府機関など、何百万ものお客様が AWS を使用してコストを削減し、俊敏性を高め、イノベーションを加速させています。";
echo $j;
echo '<br>';

?>