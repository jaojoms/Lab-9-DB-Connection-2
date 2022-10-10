<?php include "cn_nect.php"?>

<html>
    <head><meta charset="utf-8">
    <script>
       function confirmDelete(name){
                console.log(name);
                var user = confirm("ต้องการลบ username" + name);
                if(user=true)
                    document.location = "delete.php?name=" + name;
            }

    </script>
    </head>
    <body>
        <?php 
            $stmt = $pdo->prepare("SELECT *FROM member");
            $stmt->execute();

            while($row = $stmt->fetch()) {
                echo "ชื่อสมาชิก: " .$row["name"] . "<br>";
                echo "ที่อยู่: " .$row["address"] . "<br>";
                echo "อีเมล์: " .$row["email"] . "<br>";
                echo "<a href='editform.php?username=" . $row ["username"] . "'>แก ้ไข</a> | ";
                echo "<a href='delete.php?username=".$row["username"]."'>ลบ</a>";
                echo "<hr>\n";
            }
        ?>
    </body>
</html>