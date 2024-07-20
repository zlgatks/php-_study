<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>模写</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
  </head>
  <body>
    <form action="result.php" method="POST">
      <?php
        //グローバル変数(default)
        $calc = 1;
        $calc_item = ["*", "+", "-", "%", "-"];
      ?>
      <p>直径の計算</p>
      <h5>半径を入力してください</h5>
      <input type="text" name="user_set_calc" value=<?php echo $calc ?>>
      <br>
      <input type="submit" value="確認">
    <!--フォームの切り替え-->
      <p>電卓</p>
      <table border = 1>
        <tr>
          <td><input type="text" name="set_input1" value ="0"></td>
          <td><input type="text" name="set_input2" value ="0"></td>
          <td>
            <select name = "calc_item">
              <?php foreach($calc_item as $item): ?>
                <option value="<?php echo $item?>"><?php echo $item?></option>
              <?php endforeach; ?>
            </select>
          </td>
        </tr>
      </table>
    </form>
  </body>
</html>