<?php
if(isset($_POST['name'])){
	
	$name = $_POST['name'];
	
	$post = 'name='.$name;
	
	$url = "http://localhost/rest/receiver.php";
	//$url = "";
	//echo $post;
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	
	$response = curl_exec($ch);
	curl_close($ch);
	echo $response;
}



?>

<html>
<body>
<form name="form1" method="post" action="sender.php">
Name:<input type="text" name="name">
<input type="submit" value="submit" name="submit">
</body>
</html>