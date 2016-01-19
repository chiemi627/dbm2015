<html>
<head><title>Listing All Data</title>
  <?php echo Asset::css("courseMngr.css");?>
  <meta http-equiv="Content-Type" content="text/htmll charset=utf8"/>
</head>
<body>
<div id="main">
<h1>データベース設計論<br/>DBアプリケーションサンプル<br/>（検索)</h1>
<div id="description">
簡単な検索アプリケーションです。プルダウンメニューから授業名を選択すると
履修者一覧が表示されます。
</div>

<form action="http://localhost/~chiemi/courseMngr/enrollment/index" method="post">
  <select name="course">授業名： 

<?php
  foreach ($courses as $c):
    print "<option value=$c[csid]>$c[name]";
  endforeach;
?>
 </select>
<input type="submit" value="選択">
</form>

<?php 
  if($selected_csid){
     print "選択された授業名：$course_name";
  }
?>

<table border=1>
   <tr><th>学籍番号</th><th>学科</th><th>氏名</th><th>成績</th></tr>
   <?php
     if($selected_csid){
       foreach($students as $s):
         print "<tr>";
         print "<td>$s[stid]</td>";
         print "<td>$s[major]</td>";
         print "<td>$s[name]</td>";
         print "<td>$s[grade]</td>";
         print "</tr>";
       endforeach;
     }
    ?>
</table>
<?php
   if($selected_csid == null){
     print "授業名を選択してください";
   }
?>
</div>
</body>
</html>
