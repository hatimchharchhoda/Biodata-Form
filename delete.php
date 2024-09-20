<?php
$conn=mysqli_connect('localhost','root','','user_db');

$id = $_GET["id"];
$sql = "DELETE FROM hobby WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('$id deleted successfully')</script>;";
    header("Location: show.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>