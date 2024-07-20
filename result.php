<?php
  $set_calc =  $_POST['user_set_calc'];
  $input1 = $_POST['set_input1'];
  $input2 = $_POST['set_input2'];
  $cal_item = $_POST['calc_item'];

  if (!is_numeric($input1) or !is_numeric($input2)) {
    exit("計算できない値が含まれています");
  }


?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>模写</title>
  </head>
  <body>
    <table border = 1>
      <th>直径</th>
      <?php for ($i = 0; $i < $set_calc; $i++): ?>
        <td>
          <p><?php echo $i * 2 * 3.14 ?></p>
        </td>
      <?php endfor ?>
      <th>演算結果</th>
      <td>
      <?php
      $value = 0;

      switch($cal_item) {
        case "*":
          $value = $input1 * $input2;
          break;
        case "+":
          $value = $input1 + $input2;
          break;
        case "-":
          $value = $input1 - $input2;
          break;
        case "%":
          $value = $input1 % $input2;
          break;
        case "/":
          $value = $input1 / $input2;
          break;
        default:
          break;
      };
      ?>
      <p><?php echo $value ?></p>
      </td>
    </table>
    <p>
      <button id="back-btn" onclick="history.back();">戻る</button>
    </p>
  </body>
</html>