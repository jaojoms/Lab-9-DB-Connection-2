<?php include "cn_nect.php" ?>
<?php
    $stmt = $pdo->prepare("SELECT * FROM member WHERE username=?");
    $stmt->bindParam(1,$_GET["username"]);
    $stmt->execute();
    $row = $stmt->fetch();
?>
<html>
<head><meta charset="UTF-8"></head>
<body>
    <form action="editdb.php" method="post">
        <input type="hidden" name="username" value="<?=$row["username"]?>"><br>
        ชื่อ-นามสกุล : <input type="text" name="name" value="<?=$row["name"]?>"><br>
        ที่อยู่ : <br>
        <textarea name="address" rows="3" cols="40" value="<?=$row["address"]?>"></textarea><br>
        <label>ตัวอย่างการกรอกเบอร์โทรศัพท์ -> 09-9999-9999</label><br>
        เบอร์โทรศัพท์ : <input type="text" name="mobile" value="<?=$row["mobile"]?>"><br>
        อีเมลล์ : <input type="text" name="email" value="<?=$row["email"]?>"><br>
        <input type="submit" value="แก้ไข">
    </form>

</body>
</html>
