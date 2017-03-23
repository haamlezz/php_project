<?php
include 'config.php';

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Page</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="main">
      <h1>ເພີ່ມສິນຄ້າ</h1>
      <div class="menu">
        <ul>
          <li>
            <a href="index.php">ໜ້າຫຼັກ</a>
          </li>
          <li>
            <a href="add_product.php">ເພີ່ມສິນຄ້າ</a>
          </li>
          <li>
            <a href="add_bill.php">ເພີ່ມບິນໃໝ່</a>
          </li>
          <li>
            <a href="bill.php">ໃບບິນທັງໝົດ</a>
          </li>
        </ul>
      </div><!-- class menu -->
      <div class="content">
        <h2>ຟອມເພີ່ມລາຍການປຶ້ມ</h2>
        <?php
          if(isset($_GET['status']))
          {
            echo '<p class="status-ok">
              ເພີ່ມໄດ້ສຳເລັດ
            </p>';
          }
         ?>
        <form action="add_process.php" method="post">
          <p>
          <label>ຊື່ປຶ້ມ</label>
          <input type="text" name="book_name" class="form-input" />
          </p>
          <p>
          <label>ປະເພດ</label>
          <select name="type_id" class="form-input">
            <option value="0">
              ກະລຸນາເລືອກ
            </option>
            <?php
            $qry = "SELECT * FROM book_type";
            $rs = mysqli_query($con,$qry);
            while($row = mysqli_fetch_array($rs))
            {
              echo '<option value="'.$row['type_id'].'">
                '.$row['type_name'].'
              </option>';
            }
            ?>
          </select>
          <a href="add_type.php">ເພີ່ມປະເພດໃໝ່</a>
          </p>
          <p>
            <label>ລາຄາ</label>
            <input type="text" name="price" class="form-input" />
          </p>
          <p>
            <label>ຈຳນວນ</label>
            <input type="text" name="quantity" class="form-input" />
          </p>
          <p>

            <input type="submit" value="ບັນທຶກ" class="" />
          </p>
        </form>
      </div>
    </div><!-- class main -->
  </body>
</html>
