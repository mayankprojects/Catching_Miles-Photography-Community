<?php include("connection.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="title">Registration</div>
        <form action="#" method="POST" enctype="multipart/form-data">
            <div class="user-details">
                <div class="input-box">
                    <span class="details">First Name</span>
                    <input type="text" placeholder="Enter your name" required name="fname">
                </div>
                <div class="input-box">
                    <span class="details">Last Name</span>
                    <input type="text" placeholder="Enter your username" required name="lname">
                </div>
                <div class="input-box">
                    <span class="details">Email</span>
                    <input type="text" placeholder="Enter your email" required name="ename">
                </div>
                <div class="input-box">
                    <span class="details">Phone Number</span>
                    <input type="text" placeholder="Enter your number" required name="pnum">
                </div>
                <div class="input-box">
                    <span class="details">State</span>
                    <input type="text" placeholder="Enter your password" required name="state">
                </div>
                <div class="input-box">
                    <span class="details">District</span>
                    <input type="text" placeholder="Confirm your password" required name="district">
                </div>
            </div>

            <div class="gender-details">

                <span class="gender-title">Upload Image</span>
                <div class="category">
                    <input type="file" name="upload">
                </div>
            </div>

            <div class="button">
                <input type="submit" value="Register" name="btn">
            </div>
        </form>
    </div>
</body>

</html>

<?php

if ($_POST['btn']) {
    $filename = $_FILES["upload"]["name"];
    $tempname = $_FILES["upload"]["tmp_name"];
    $folder = "images/".$filename;
    // echo $folder;
    move_uploaded_file($tempname, $folder);

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $ename = $_POST['ename'];
    $pnum = $_POST['pnum'];
    $state = $_POST['state'];
    $district = $_POST['district'];

    $query = "INSERT INTO form values('$folder', '$fname', '$lname', '$ename', '$pnum', '$state', '$district')";

    $data = mysqli_query($conn, $query);
}
?>

<?php

?>



