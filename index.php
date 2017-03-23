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
        <?php
          $qry = "SELECT * FROM book ORDER BY book_id DESC LIMIT 10";
          //ສ້າງຄິວຣີດຶງຂໍ້ມູນຈາກຕາຕະລາງປຶ້ມລຽງຕາມໄອດີລ່າສຸດ ກຳນົດສິບລາຍການ

          $rs = mysqli_query($con,$qry);
          //ສັ່ງຄິວຣີ

          echo '<h2>'.mysqli_num_rows($rs).' ລາຍການສິນຄ້າມາໃໝ່</h2>'
        ?>
          <table class="table">
            <tr>
              <td>
                ລາການປຶ້ມ
              </td>
              <td>
                ຈຳນວນທີ່ມີ
              </td>
              <td>
                ລາຄາຂາຍ
              </td>
            </tr>
            <?php
              while ($row = mysqli_fetch_array($rs))
              {
                echo '<tr>
                  <td>
                    '.$row['book_name'].'
                  </td>
                  <td>
                    '.$row['book_quantity'].'
                  </td>
                  <td>
                    '.$row['book_price'].'
                  </td>
                </tr>';
              }
            ?>
          </table>
        <h2>5 ລາຍການສັ່ງຊື່ລ້າສຸດ</h2>
      </div>
    </div><!-- class main -->
  </body>
</html>
