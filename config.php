<?php
$con = mysqli_connect('localhost','root','') or die ('Error Connection');
$db = mysqli_select_db($con, 'test');
mysqli_set_charset($con,'utf8');
