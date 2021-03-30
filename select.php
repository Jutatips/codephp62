<?php
$dbhost =  'localhost';
$dbuser =  'root';
$dbpass =  '';
$dbname =  'codephp62';

$myconn = new  mysqli($dbhost, $dbuser, $dbpass, $dbname);
if ($myconn->connect_errno) {
    print("Connect failed: %s\n ,$myconn->connect_error ");
    exit();
}
$strSQL = "SELECT ID, username, password_hash, status FROM user";
$result = $myconn->query($strSQL);


?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <table border="3" width="100%">
            <tr>
                <td> ลำดับ</td>
                <td> ชื่อผู้ใช้</td>
                <td> สถานะ</td>
                <td> แก้ไข</td>
                <td> ลบ</td>
            </tr>
            <?php
            while ($row = $result->fetch_array()) {
            ?>
                <tr>
                    <td><?php echo $row["ID"];?></td>
                    <td><?php echo $row["username"]; ?></td>
                    <td><?php echo $row["status"]; ?></td>
                    <td>edit</td> 
                    <td><a href="delete.php?id  " delete</td>
                </tr>
            <?php
            }
            ?>
        </table>
    </body>