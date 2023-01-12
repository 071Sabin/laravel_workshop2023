<?php
$conn = mysqli_connect("localhost", "root", "", "laravel") or die(mysql_error());
$query = "select * from laravel1";
$res = mysqli_query($conn, $query) or die(mysqli_error($conn));
?>
<!--changed by viewer-->
<html>

<head>
    <title>DisplayDB</title>
</head>

<body>
    <h1>DisplayDB</h1>

    <table width="600" border="1" align="center">
        <tr>
            <td widht="33%">Name</td>
            <td widht="33%">Email</td>
            <td widht="33%">Password</td>
        </tr>

        <?php
        while ($row = mysqli_fetch_assoc($res)) {
            echo '
                <tr>
                    <td>' . $row["namee"] . '</td>
                    <td>' . $row["email"] . '</td>
                    <td>' . $row["pwd"] . '</td>
                </tr>
            ';
        }
        ?>
    </table>

</html>
