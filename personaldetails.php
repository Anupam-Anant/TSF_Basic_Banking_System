<?php
session_start();
$server = "localhost";
$username = "root";
$password = "";
$db = "bank";
$con = mysqli_connect($server, $username, $password, $db);
if (!$con) {
    die("connection to this database failed due to:" . mysqli_connect_error());
}
$q = "select * from bank.users";
$result = mysqli_query($con, $q);
$row_count = mysqli_num_rows($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Customers</title>
    <link rel="stylesheet" href="Table.css">
</head>

<body>
    <img class="im" src="bank3.jpg">
    <a href="index.php">
        <input type="image" src="home3.png" class="home" style="width: 100px; margin-top: 23px;" />
    </a>
    <br><br>
    <u style="color: black;">
        <h1 style="color:black;">Customers</h1>
    </u>
    <br>
    <table>
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Account</th>
            <th>View</th>
        </thead>
        <tbody>
            <tr>
                <?php
                $row = mysqli_fetch_array($result);
                ?>
                <td><?php echo $row["id"]; ?></td>
                <td><?php echo $row["name"]; ?></td>
                <td><?php echo $row["email"]; ?></td>
                <td><?php echo $row["amount"]; ?></td>
                <td>
                    <form action="user.php" method="post">
                        <button type="submit" name="name" value="Amit Kumar" class="viewbutton">Account Info</button>
                    </form>
                </td>
            </tr>

            <tr>
                <?php
                $row = mysqli_fetch_array($result);
                ?>
                <td><?php echo $row["id"]; ?></td>
                <td><?php echo $row["name"]; ?></td>
                <td><?php echo $row["email"]; ?></td>
                <td><?php echo $row["amount"]; ?></td>
                <td>
                    <form action="user.php" method="post">
                        <button type="submit" name="name" value="Raunak Agarwal" class="viewbutton">Account Info</button>
                    </form>
                </td>
            </tr>

            <tr>
                <?php
                $row = mysqli_fetch_array($result);
                ?>
                <td><?php echo $row["id"]; ?></td>
                <td><?php echo $row["name"]; ?></td>
                <td><?php echo $row["email"]; ?></td>
                <td><?php echo $row["amount"]; ?></td>
                <td>
                    <form action="user.php" method="post">
                        <button type="submit" name="name" value="Aakriti Ahuja" class="viewbutton">Account Info</button>
                    </form>
                </td>
            </tr>

            <tr>
                <?php
                $row = mysqli_fetch_array($result);
                ?>
                <td><?php echo $row["id"]; ?></td>
                <td><?php echo $row["name"]; ?></td>
                <td><?php echo $row["email"]; ?></td>
                <td><?php echo $row["amount"]; ?></td>
                <td>
                    <form action="user.php" method="post">
                        <button type="submit" name="name" value="Kshitij Kashyap" class="viewbutton">Account Info</button>
                    </form>
                </td>
            </tr>

            <tr>
                <?php
                $row = mysqli_fetch_array($result);
                ?>
                <td><?php echo $row["id"]; ?></td>
                <td><?php echo $row["name"]; ?></td>
                <td><?php echo $row["email"]; ?></td>
                <td><?php echo $row["amount"]; ?></td>
                <td>
                    <form action="user.php" method="post">
                        <button type="submit" name="name" value="Pushkar Singh" class="viewbutton">Account Info</button>
                    </form>
                </td>
            </tr>

            <tr>
                <?php
                $row = mysqli_fetch_array($result);
                ?>
                <td><?php echo $row["id"]; ?></td>
                <td><?php echo $row["name"]; ?></td>
                <td><?php echo $row["email"]; ?></td>
                <td><?php echo $row["amount"]; ?></td>
                <td>
                    <form action="user.php" method="post">
                        <button type="submit" name="name" value="Aakanksha Luthra" class="viewbutton">Account Info</button>
                    </form>
                </td>
            </tr>

            <tr>
                <?php
                $row = mysqli_fetch_array($result);
                ?>
                <td><?php echo $row["id"]; ?></td>
                <td><?php echo $row["name"]; ?></td>
                <td><?php echo $row["email"]; ?></td>
                <td><?php echo $row["amount"]; ?></td>
                <td>
                    <form action="user.php" method="post">
                        <button type="submit" name="name" value="Madhusudan Jha" class="viewbutton">Account Info</button>
                    </form>
                </td>
            </tr>

            <tr>
                <?php
                $row = mysqli_fetch_array($result);
                ?>
                <td><?php echo $row["id"]; ?></td>
                <td><?php echo $row["name"]; ?></td>
                <td><?php echo $row["email"]; ?></td>
                <td><?php echo $row["amount"]; ?></td>
                <td>
                    <form action="user.php" method="post">
                        <button type="submit" name="name" value="Nilesh Kumar" class="viewbutton">Account Info</button>
                    </form>
                </td>
            </tr>

            <tr>
                <?php
                $row = mysqli_fetch_array($result);
                ?>
                <td><?php echo $row["id"]; ?></td>
                <td><?php echo $row["name"]; ?></td>
                <td><?php echo $row["email"]; ?></td>
                <td><?php echo $row["amount"]; ?></td>
                <td>
                    <form action="user.php" method="post">
                        <button type="submit" name="name" value="Aayush Sharma" class="viewbutton">Account Info</button>
                    </form>
                </td>
            </tr>

            <tr>
                <?php
                $row = mysqli_fetch_array($result);
                ?>
                <td><?php echo $row["id"]; ?></td>
                <td><?php echo $row["name"]; ?></td>
                <td><?php echo $row["email"]; ?></td>
                <td><?php echo $row["amount"]; ?></td>
                <td>
                    <form action="user.php" method="post">
                        <button type="submit" name="name" value="Aditi Goenka" class="viewbutton">Account Info</button>
                    </form>
                </td>
            </tr>
</body>

</html>