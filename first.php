<?


$error= false;
$errorText = "";
if (empty($_POST["name"])==true) {
	$error=true;
	$errorText = "У вас неправильно заполнено поле Имя";

}

if  (empty($_POST["email"])==true){
	$error=true;
	$errorText = "У вас неправильно записан e-mail";

}
if  (empty($_POST["message"])==true){
	$error=true;
	$errorText = "У вас не написано сообщение";

}

if($error==true){
	$response = [
		"error" => true,
		"message" =>$errorText
	];
 echo json_encode($response);
 die();
}



$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password, "kvas1");


$sql = "INSERT INTO first (name, email, message)
VALUES ('".$_POST["name"]."', '".$_POST["email"]."', '".$_POST["message"]."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>