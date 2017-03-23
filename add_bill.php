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
        <form action="add_customer.php" method="post">
          <p>
            <label>ຊື່ລູກຄ້າ</label>
            <input type="text" name="customer_name" class="form-input" />
          </p>
          <p>
            <input type="submit" value="ເປີດບິນໃໝ່" />
          </p>
        </form>

      </div>
    </div><!-- class main -->
  </body>
</html>
