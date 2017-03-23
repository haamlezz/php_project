<?php include 'config.php';?>
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
      <h1>Welcome to Book Shop</h1>
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
        <h2>ເພີ່ມປະເພດ</h2>
        <form action="add_type.php" method="post">
          <label>ຊື່ປະເພດ</label>
          <input type="text" name="type_name" class="form-input" />
          <input type="submit" value="ເພີ່ມປະເພດໃໝ່" />
        </form>
        <h2>ປະເພດທັງໝົດ</h2>
        <table class="table">
          <tr>
            <td>
              ລະຫັດປະເພດ
            </td>
            <td>
              ຊື່ປະເພດ
            </td>
            <?php
              $rs = mysqli_query($con,"SELECT * FROM book_type");
              while($row = mysqli_fetch_array($rs))
              {
                echo '<tr>
                <td>
                  '.$row['type_id'].'
                </td>
                <td>
                  '.$row['type_name'].'
                </td>
                </tr>';
              }
            ?>
          </tr>
        </table>
      </div><!-- content -->
    </div><!-- class main -->
  </body>
</html>
