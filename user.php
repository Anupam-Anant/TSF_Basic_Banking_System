<?php
session_start();
$server = "localhost";
$username = "root";
$password = "";
$db = "bank";

$con = mysqli_connect($server, $username, $password, $db);
if (!$con) {
    die("Connection Failed");
}
$name = $_POST['name'];
$q = "select * from bank.users where name='$name'";
$result = mysqli_query($con, $q);
$row_count = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);
$id = $row['id'];
$mail = $row['email'];
$amount = $row['amount'];

$_SESSION['name'] = $name;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $name ?></title>
    <link rel="stylesheet" href="table1.css">
</head>

<body>
    <img class="im" src="bank3.jpg">
    <a href="index.php">
        <input type="image" src="home3.png" class="home" style="width: 100px; margin-top:23px"></a>
    <br><br><br>

    <table class="row">
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Account</th>
        </thead>

        <tbody>
            <tr>
                <?php
                $row = mysqli_fetch_array($result);
                ?>

                <td><?php echo $id ?></td>
                <td><?php echo $name ?></td>
                <td><?php echo $mail ?></td>
                <td><?php echo $amount ?></td>
            </tr>
        </tbody>
    </table>

    <br><br><br>
    <div class="container">
        <div class="one">
            <a href="transferto.php">
                <button class="transferto" href="transferto.php">✔ Proceed</button></a>
        </div>

        <div class="two">
            <a href="personaldetails.php">
                <button class="transferto" href="personaldetails.php">❌ Cancel</button></a>
        </div>

    </div>
    <center></center>
    <center> </center>

    <br>

</body>

</html>