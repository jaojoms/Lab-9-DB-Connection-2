<?php include "cn_nect.php" ?>
<?php
    $stmt = $pdo->prepare("INSERT INTO member VALUES (?,?,?,?,?,?)");
    $stmt->bindParam(1, $_POST["username"]);
    $stmt->bindParam(2, $_POST["password"]);
    $stmt->bindParam(3, $_POST["name"]);
    $stmt->bindParam(4, $_POST["address"]);
    $stmt->bindParam(5, $_POST["mobile"]);
    $stmt->bindParam(6, $_POST["email"]);
    $stmt->execute();

    $username = $stmt->bindParam(1,$_GET["username"]);
?>
<html>
    <head><meta charset="utf-8"></head>
    <body>
        <h2><?=$username?></h2>
    </body>
</html>

<!-- workshop7 อยู่ใน Insetdata.html  -->