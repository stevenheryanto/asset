<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="http://ds.dibiakcom.net/jquery/jquery-latest.js"></script>
	<link type="text/css" rel="stylesheet" media="screen" href="http://ds.dibiakcom.net/reset.css" />
	<link type="text/css" rel="stylesheet" media="screen" href="http://ds.dibiakcom.net/font-awesome.css" />
	<link type="text/css" rel="stylesheet" media="screen" href="style.css" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Asset</title>
</head>
<body>
	<?php
		require_once 'meekrodb.2.1.class.php';
		
		$view = DB::query("SELECT * FROM asset, companies where company=cocode ORDER BY company ASC");
		echo "<ul id='fl_table'>";
			echo "<li>".
			"<div>Date</div>".
			"<div class='hi'>Company</div>".
			"<div>User</div>".
			"<div>CPU</div>".
			"<div>Mobo</div>".
			"<div class='lo'>RAM</div>".
			"<div class='lo'>HD</div>".
			"<div>Monitor</div>".
			"<div>Printer</div>".
			"<div class='lo'>OS</div>".
			"<div class='lo'>Status</div>".
			"<div>Note</div>";
			echo "</li>";
			foreach($view as $row ){
				echo "<li class='drag' draggable='true' id=".$row['id']." ondragstart=drag(event)>".
				 "<div>" . $row['tanggal'] . "</div>".
				 "<div class='hi'>" . $row['coname'] . "</div>".
				 "<div title='Edit'><a href='assetCreate.php?id=".$row['id']."'>" . $row['user'] . "</a></div>".
				 "<div>" . $row['cpu'] . "</div>".
				 "<div>" . $row['mobo'] . "</div>".
				 "<div class='lo'>" . $row['ram'] . "</div>".
				 "<div class='lo'>" . $row['hdd'] . "</div>".
				 "<div>" . $row['mon'] . "</div>".
				 "<div>" . $row['prt'] . "</div>".
				 "<div class='lo'>" . $row['os'] . "</div>".
				 "<div class='lo'>" . $row['sta'] . "</div>".
				 "<div>" . $row['note'] . "</div>";
				echo "</li>";
			}
		echo "</ul>";
	?>
</body>
</html>