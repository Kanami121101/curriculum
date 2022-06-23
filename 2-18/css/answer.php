<?php
$name =$_POST['name'];
$number=$_POST['number'];
$language=$_POST['language'];
$my_sql=$_POST['my_sql'];
$answer =$_POST['answer'];
$answer2= $_POST['answer2'];
$answer3=$_POST['answer3'];
?>
<?php
if($number==$answer){
    $result1="正解！";
} else {
    $result1 ="残念...";
} 
?>
<?php
if($language==$answer2){
    $result2 ="正解！";
} else {
    $result2="残念...";
}
?>
<?php
if($my_sql==$answer3){
    $result3="正解！";
} else {
    $result3 ="残念...";
}
?>
<body>
<p><?php echo $name:?>さんの結果は・・・？</p>
<p>①の答え</p>
<?php echo $result1 ?>
<p>②の答え</p>
<?php echo $result2 ?>
<!--作成した関数を呼び出して結果を表示-->
<p>③の答え</p>
<?php echo $result3 ?>
<!--作成した関数を呼び出して結果を表示-->
</body>
<style>
    body {
        background-color: gray;
        text-align: center;
    }
    p{
        color: gray;
    }
</style>