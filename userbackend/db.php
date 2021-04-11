<?php
try {
  $conn = new PDO("mysql:host=localhost;dbname=phongtro;charset=utf8", "root", "");
} catch (PDOException $e) {
  echo "lỗi";
}