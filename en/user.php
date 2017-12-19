<?php 
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods:POST,GET');
header('Access-Control-Allow-Credentials:true'); 
header("Content-Type: application/json;charset=utf-8"); 

include_once "db.php";
include_once "../func.php";

$query = "SELECT * FROM client WHERE client=:cid";
$stmt = $conn->prepare($query);
$stmt->bindParam(':cid', $clientname, PDO::PARAM_STR);

if( isset($_POST["username"])  && isset($_POST["password"]) ){
	$clientname = strtolower(filterName($_POST["username"]));
	$password = $_POST["password"];
}

$stmt->execute();
$result=$stmt->fetch(PDO::FETCH_ASSOC);

if($stmt->rowCount() > 0){
	$verify=password_verify($password,$result["password"]);
	if($verify) {
 		echo '{"success":"'.$clientname.'", "message":"Success!"}';
	}
	else{
		echo '{"success":false, "message":"Password error"}';
	}
}
if($stmt->rowCount() == 0){
	echo '{"success":false, "message":"customer ID not exists."}';
}

unset($conn);


?>