<?php
session_start();
$server = "localhost";
$username = "root";
$password = "";
$db = "bank";

$con = mysqli_connect($server, $username, $password, $db);

if (!$con) {
    die("Connection failed due to" . mysqli_connect_error());
}

$q = "select * from bank.y";
$result = mysqli_query($con, $q);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction</title>
    <link rel="stylesheet" href="Table.css">
</head>

<body>
    <img class="im" src="bank11.png">
    <br>
    <a href="index.php">
        <input type="image" src="home3.png" class="home" style="width: 100px;" />
    </a>
    <u>
        <h1 style="color:black;">Transactions</h1>
    </u>
    <br> <br>

    <table>
        <thead>
            <th>ID</th>
            <th>Sender</th>
            <th>Receiver</th>
            <th>Amount</th>
        </thead>
        <tbody>
            <tr>

                <?php while ($row = mysqli_fetch_array($result)) { ?>
                    <td style="width: 70px;">
                        <?php echo $row['id'];
                        $q = "INSERT INTO bank.y (id) VALUES ($row[id]);";
                        ?>
                    </td>
                    <td>
                        <?php echo $row['sender'];
                        $q = "INSERT INTO bank.y (sender) VALUES ($row[sender]);";
                        ?>
                    </td>
                    <td>
                        <?php echo $row['receiver'];
                        $q = "INSERT INTO bank.y (receiver) VALUES ($row[receiver]);";
                        ?>
                    </td>
                    <td>
                        <?php echo $row['amount'];
                        $q = "INSERT INTO bank.y (amount) VALUES ($row[amount]);";
                        ?>
                    </td>


            </tr>
        <?php } ?>

        </tbody>
    </table>
</body>

</html>