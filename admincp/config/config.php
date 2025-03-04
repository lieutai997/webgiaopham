<?php
$mysqli = new mysqli("localhost","root","","webgiaopham");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Kết nối cơ sở dữ liệu lỗi: " . $mysqli -> connect_error;
  exit();
}
?>
