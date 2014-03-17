<?php
	require_once 'meekrodb.2.1.class.php';
	
	if($_POST['id'] == null){
		DB::insert('asset', array(
			'company' => $_POST['company'],
			'user' => $_POST['user'],
			'cpu' => $_POST['cpu'],
			'mobo' => $_POST['mobo'],
			'ram' => $_POST['ram'],
			'hdd' => $_POST['hdd'],
			'prt' => $_POST['prt'],
			'mon' => $_POST['mon'],
			'os' => $_POST['os'],
			'sta' => $_POST['sta'],
			'note' => $_POST['note'],
			'tanggal' => $_POST['tanggal']
		));
	} else {
		DB::update('asset', array(
			'company' => $_POST['company'],
			'user' => $_POST['user'],
			'cpu' => $_POST['cpu'],
			'mobo' => $_POST['mobo'],
			'ram' => $_POST['ram'],
			'hdd' => $_POST['hdd'],
			'prt' => $_POST['prt'],
			'mon' => $_POST['mon'],
			'os' => $_POST['os'],
			'sta' => $_POST['sta'],
			'note' => $_POST['note'],
			'tanggal' => $_POST['tanggal']
		),'id=%i', $_POST['id']);
	}
?>
<html>
<head>
<title>Asset</title>
<meta http-equiv="refresh" content="0;url=assetRead.php" />
</head>
<body>
<a href="assetRead.php">Updating...</a>
</body>
</html>