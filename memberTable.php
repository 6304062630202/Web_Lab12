<?php
$keyword = $_GET["keyword"];
$conn = mysqli_connect("localhost", "root", "", "blueshop");

if($conn){
    // mysqli_select_db("blueshop");
    mysqli_query($conn, "SET NAMES utf8");
} else{
    echo mysql_errno();
}

$sql = "SELECT * FROM member WHERE username LIKE '%$keyword'";
$objQuery = mysqli_query($conn, $sql);
?>

<table border="1">
    <?php while($row = mysqli_fetch_array($objQuery)): ?>
    <br>
    <tr>
    <td>
    <div style="padding: 15px">
        ชื่อสมาชิก : <?=$row ["username"]?><br>
        รหัสผ่าน : <?=$row ["password"]?><br>
        ชื่อ-นามสกุล : <?=$row ["name"]?><br>
        ที่อยู่ : <?=$row ["address"]?><br>
        เบอร์โทร : <?=$row ["mobile"]?><br>
        อีเมล์ : <?=$row ["email"]?><br>
    </div>
    </td>
    
    </tr>
    <?php endwhile;?>
</table>