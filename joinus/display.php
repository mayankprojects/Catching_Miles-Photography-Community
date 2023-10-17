<html>

<head>
    <title>Display</title>
    <link rel="stylesheet" href="display.css">
</head>

<?php
include("connection.php");
error_reporting(0);

$query = "SELECT * FROM form";
$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);


if ($total != 0) {
    ?>
    <div class="container">
        <h2 class = "heading">Records Of All The Registered Users</h2>
        <table class = "table" border="1" cellspacing="3" width = "70%">
            <tr>
                <th width="15%">Image</th>
                <th width="10%">First Name</th>
                <th width="10%">Last Name</th>
                <th width="10%">Email</th>
                <th width="10%">Phone</th>
                <th width="10%">State</th>
                <th width="10%">District</th>
            </tr>
    </div>

        <?php
        while ($result = mysqli_fetch_assoc($data)) {
            echo "<tr>
                    <td><img src = '".$result['image']."' height = '100px' width = '150px'></td>
                    <td>" . $result['first'] . "</td>
                    <td>" . $result['last'] . "</td>
                    <td>" . $result['email'] . "</td>
                    <td>" . $result['phone'] . "</td>
                    <td>" . $result['state'] . "</td>
                    <td>" . $result['district'] . "</td> 
            </tr>";
        }
} else {
    echo "No records found";
}
?>
</table>