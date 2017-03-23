<?php
include 'config.php';
//ກຳນົດຈຸດເຊື່ອມຕໍ່ຖານຂໍ້ມູນ

//ຮັບຄ່າຈາກຟອມເພີ່ມ
$book_name = mysqli_real_escape_string($con, $_POST['book_name']);
$book_price = mysqli_real_escape_string($con, $_POST['price']);
$book_type = mysqli_real_escape_string($con, $_POST['type_id']);
$book_quantity = mysqli_real_escape_string($con, $_POST['quantity']);

//ສັ້ງຄິວຣີສະຕຣິງ
$qry = "INSERT INTO book VALUES('','$book_name',$book_price,$book_type,$book_quantity)";

//ສັ່ງຄິວຣີ
$rs = mysqli_query($con, $qry);

if($rs)
{
  header('Location: add_product.php?status=ok');
}else{
  echo mysqli_error($con);
}
