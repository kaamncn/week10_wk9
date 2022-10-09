<?php include "errordb.php" ?>
<?php
$stmt = $pdo->prepare("select * from member where username=?");
$stmt->bindParam(1, $_GET["username"]);
$stmt->execute();
$row = $stmt->fetch();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
</head>

<body>
    <form action="workshop9Update.php" method="post">
        <input type="hidden" name="username" value="<?=$row["username"]?>">
        password : <input type="text" name="password" value="<?=$row["password"]?>"><br><br>
        name : <input type="text" name="name" value="<?=$row["name"]?>"><br><br>
        address : <input type="text" name="address" value="<?=$row["address"]?>"><br><br>
        mobile : <input type="text" name="mobile" value="<?=$row["mobile"]?>"><br><br>
        email : <input type="text" name="email" value="<?=$row["email"]?>"><br><br>
        <input type="submit" value="EDIT">
    </form>
</body>

</html>