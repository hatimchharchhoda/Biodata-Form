<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="hobby.css">
</head>
<body>
    <form action="" method="post" class="data">
        <center>
            <h1>Biodata Form</h1>
            <table class="table-form">
                <tr>
                    <td>Name</td>
                    <td>:</td>
                    <td><input type="text" id="name" name="name" placeholder="enter your name"></td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td>:</td>
                    <td><input type="text" class="address" name="address" id="address" rows="3"></td>
                </tr>
                <tr>
                    <td>Number</td>
                    <td>:</td>
                    <td><input type="number" id="no" name="no" pattern="\d{10}"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><input type="email" name="email" id="email"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><button value="submit" name="submit">submit</button></td>
                </tr>
            </table>
        </center>
        <a href="show.php">display data</a>
    </form>
</body>
</html>

<?php
    $conn=mysqli_connect('localhost','root','','user_db');
    $name=$_POST['name'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $no=$_POST['no'];
    $hobby=$_POST['hobby'];
    $sql="Insert into hobby(name,address,number,email,hobby) values('$name','$address',$no,'$email','$hobby')";
    if($name=="" || $email=="" || $address=="" ||$no=="")
    {
        echo'<script>alert("please enter data correctly")</script>';
    }
    else{
        $result=mysqli_query($conn,$sql);
        echo'<script>alert("your form has been submitted successfully")</script>';
    }
?>