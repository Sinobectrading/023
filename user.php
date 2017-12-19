<?php 
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods:POST,GET');
header('Access-Control-Allow-Credentials:true'); 
header("Content-Type: application/json;charset=utf-8"); 

define('DB_SERVER','localhost');
define('DB_NAME', 'sinobectrading');
define('DB_USER', 'root');
define('DB_PASSWORD', '#9jc>Cn6');
	//Database connection
		try{
			$pdoconn = new pdo("mysql:host=".DB_SERVER."; dbname=".DB_NAME,DB_USER,DB_PASSWORD);
			$pdoconn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
		catch(PDOException $e){
			die("Connection failed".$e->getMessage);
		}

//prepare
$obju = "";	

if (isset($_POST["signupname"])) {
	$obju = $_POST["signupname"];
}
 

$query = "SELECT * FROM client WHERE client=:name";
$stmt = $pdoconn->prepare($query);
$stmt->bindParam(':name', $obju, PDO::PARAM_STR);
 $stmt->execute();
// $result = $stmt->fetchAll();

if($stmt->rowCount() > 0){
	echo '{"success":true, "message":"'.$obju.$obje.' has been taken"}';
}
if($stmt->rowCount() == 0){
	echo '{"success":false, "message":""}';
}




?>