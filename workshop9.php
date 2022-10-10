<?php include "cn_nect.php"?>
<html>
    <head><meta charset="utf-8">
    </head>
    <body>
        <?php
            $stmt = $pdo->prepare("SELECT * FROM member");
            $stmt->execute();
            while($row = $stmt->fetch()) {
                echo "ชื่อ :".$row["name"]."<br>";
                echo "ที่อยู่ :".$row["address"]."<br>";
                echo "อีเมลล์ :".$row["email"]."<br>";
                echo "<a href='editform.php?username=".$row["username"]."'>แก้ไข</a>";
                echo "<hr>\n";
            }
        ?>
    </body>
</html>
