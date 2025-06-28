<?php
require '../../config/config.php';
if($_SERVER['REQUEST_METHOD']==='POST'){
  $item=$_POST['item'] ?? '';
  $qty =(int)($_POST['qty'] ?? 0);
  $stmt=$conn->prepare("UPDATE inventory SET quantity=? WHERE item=?");
  $stmt->bind_param('is',$qty,$item);
  $stmt->execute();
  echo 'Stock updated';
}
?>

