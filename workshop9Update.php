<?php include "errordb.php" ?>
<?php
$stmt = $pdo->prepare("update member set password=?,name=?,address=?,mobile=?,email=? where username=?");
$stmt->bindParam(1, $_POST["password"]);
$stmt->bindParam(2, $_POST["name"]);
$stmt->bindParam(3, $_POST["address"]);
$stmt->bindParam(4, $_POST["mobile"]);
$stmt->bindParam(5, $_POST["email"]);
$stmt->bindParam(6, $_POST["username"]);
if($stmt->execute())
{
    echo"แก้ไขข้อมูลของ Name : ".$_POST["name"]." นี้สำเร็จ";
}
?>