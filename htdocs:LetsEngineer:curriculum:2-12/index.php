<form action ="result.php" method ="post">
    お名前：<input type ="text" name ="my_name" />
    <br>
    ご希望商品：<input type ="radio" name ="product" value ="A賞">A賞
              <input type ="radio" name ="product" value ="B賞">B賞
              <input type ="radio" name="product" value="C賞">C賞
    <br>
    景品:
    <select name="number">
      <?php for ($i=1;$i<=10;$i++){ ?>
        <option value="<?php echo $i; ?>">
          <?php echo $i; ?>
        </option>
      <?php } ?>
    </select>
    <br>
       <input type ="submit" value ="申込" />
       <br>
      モジュールとは、機器やシステムの一部を構成するひとまとまりの機能を持った部品で、システム中核部や他の部品への接合部（インターフェース）の仕様が明確に定義され、容易に追加や交換ができるようなもののことを指す。
      <br>
      バージョン管理システムは、システム開発などで特に重要なバージョン管理を補助するためのソフトウェア
      <br>
      サブクエリは「副問い合わせ」とも呼ばれ、SQL文の中にSELECT文を埋め込み、抽出条件として利用することを可能としている。これまで、テーブルからデータを抽出するためにWHERE句による絞り込みやJOIN句による結合を利用してきたが、サブクエリはその応用といえる存在。
</form>