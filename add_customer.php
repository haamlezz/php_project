<?php include 'config.php'; ?>
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
        <h2>ໃບບິນ</h2>
        <?php
          $customer_name = mysqli_real_escape_string($con, $_POST['customer_name']);
          echo '<h3>ຊື່ລູກຄ້າ '.$customer_name.'</h3>';
          mysqli_query($con,"INSERT INTO bill VALUES('',CURRENT_TIMESTAMP, '$customer_name'");
          echo mysqli_error($con);
          echo "INSERT INTO bill VALUES('',CURRENT_TIMESTAMP, '$customer_name'";
          $rs = mysqli_query($con,"SELECT MAX(bill_id) FROM bill WHERE customer_name = '$customer_name'");
          $row = mysqli_fetch_array($rs);
        ?>
        <form action="add_customer.php" method="post">
          <input type="hidden" name="bill_id" value="<?php echo $row['bill_id']; ?>">
          <input type="hidden" name="customer_name" value="<?php echo $row['customer_name']; ?>">
          <p>
            <label>ຊື່ລູກຄ້າ</label>
            <input type="text" name="customer_name" class="form-input" />
          </p>
          <p>
            <input type="submit" value="ເພີ່ມລາຍການສິນຄ້າ" />
          </p>
        </form>

      </div>
    </div><!-- class main -->
  </body>
</html>
