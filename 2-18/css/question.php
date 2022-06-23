<?php
$name =$_POST['name'];
?>
<p>お疲れ様です<?php echo $name; ?>さん</p>
<form action="answer.php" method="post">
<h2>①ネットワークのポート番号は何番？</h2>
<?php 
$number=["80","22","20","21"];
$answer="80";
foreach($number as $value):?>
<input type="radio" name="number" value="<?php echo $value?>"  /><?php echo $value?>
<?php endforeach?>
<input type="hidden" name="answer" value="<?php echo $answer ?>">
<h2>②Webページを作成するための言語は？</h2>
<?php 
$language=["PHP","Python","JAVA","HTML"];
$answer2="HTML";
foreach($language as $value):?>
<input type="radio" name="language" value="<?php echo $value?>"  /><?php echo $value?>
<?php endforeach?>
<input type="hidden" name="answer" value="<?php echo $answer2 ?>">
<h2>③MySQLで情報を取得するためのコマンドは？</h2>
<?php 
$my_sql=["join","select","insert","update"];
$answer3="select";
foreach($my_sql as $value):?>
<input type="radio" name="my_sql" value="<?php echo $value?>"  /><?php echo $value?>
<?php endforeach?>
<input type="hidden" name="answer2" value="<?php echo $answer3 ?>">
</form>
</body>
<style>
    body {
        background-color: gray;
        text-align: center;
    }
    p {
        color: white;
    }
    h2 {
        color: white;
    }
</style>