<?php include "errordb.php" ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
</head>

<body>
    <?php
    $stmt = $pdo->prepare("SELECT * FROM member");
    $stmt->execute();
    while ($row = $stmt->fetch()) :
    ?>
        ชื่อสมาชิก : <?= $row["name"] ?><br>
        ที่อยู่ : <?= $row["address"] ?><br>
        อีเมล์ :<?= $row["email"] ?><br>
        <br>
        <a href="workshop9Edit.php?username=<?=$row["username"]?>")>Edit</a>
        <hr><br>
    <?php endwhile; ?>
</body>

</html>