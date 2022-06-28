<link rel="stylesheet" href="css/answer.css">
<?php
   $name =$_POST['name'];
   $number=$_POST['number'];
   $language=$_POST['language'];
   $my_sql=$_POST['my_sql'];
   $answer =$_POST['answer'];
   $answer2= $_POST['answer2'];
   $answer3=$_POST['answer3'];
  function  get_answer($queation,$answer){
     if($queation==$answer){
         echo '正解！';
     } else {
         echo '失敗...';
     }
  }
?>
<body>
    <p><?php echo $name;?>さんの結果は・・・？</p>
    <p>①の答え</p>
    <span><?php get_answer($number,$answer);?></span>
    <p>②の答え</p>
    <span><?php get_answer($language,$answer2); ?></span>
    <p>③の答え</p>
    <span><?php get_answer($my_sql,$answer3); ?></span>
</body>
