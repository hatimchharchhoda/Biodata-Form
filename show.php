<?php
    $conn=mysqli_connect('localhost','root','','user_db');
    $sql="Select * from hobby";
    $result=mysqli_query($conn,$sql);
    echo "<center><table border=2><tr><td><h3>Index</h3></td><td><h3>Name</h3></td><td><h3>Address</h3></td><td><h3>No</h3></td><td><h3>Email</h3></td><td><h3>Delete</h3></td></tr>";
    while($row=mysqli_fetch_assoc($result))
    {
        echo "<tr><td>".$row['id']."</td><td>".$row['name']."</td><td>".$row['address']."</td><td>".$row['number']."</td><td>".$row['email']."</td>";
        echo "<td><a href='delete.php?id=".$row['id']."'>delete</a></td></tr>";
    }
    echo "</table><a href='database.php'>back to add</a>";
?>