<!DOCTYPE html>
<html>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password, "kvas1");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, name, email, message FROM first";
$result = $conn->query($sql);

?><table border="1" style="padding:25px 15px; background:#bf8be8; width:100%; border-color: black; border-collapse: collapse;">
   <thead>
   <tr>
   <th>id</th>
   <th>name</th>
   <th>email</th>
   <th>message</th>

   </tr>
   </thead>
   <tbody>

<? if ($result->num_rows > 0) {
    // output data of each row
    while($row= $result->fetch_assoc()) {
       echo '<tr>';
    echo '<td style="padding:10px">' . $row['id'] . '</td>';
    echo '<td>' . $row['name'] . '</td>';
    echo '<td>' . $row['email'] . '</td>';
    echo '<td>' . $row['message'] . '</td>';
    echo '</tr>';
	}
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>