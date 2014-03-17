<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="http://ds.dibiakcom.net/jquery/jquery-latest.js"></script>
	<link type="text/css" rel="stylesheet" media="screen" href="http://ds.dibiakcom.net/reset.css" />
	<link type="text/css" rel="stylesheet" media="screen" href="http://ds.dibiakcom.net/font-awesome.css" />
	<link type="text/css" rel="stylesheet" media="screen" href="style.css" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Asset</title>
	<?php
		require_once 'meekrodb.2.1.class.php';
		$id = $_GET['id'];
		$row = DB::queryFirstRow("SELECT * FROM asset WHERE id=%i", $id);
	?>
</head>
<body>
	<form action="assetC.php" method="post" class="fform">
		<input type="hidden" name="id" value="<?= $id ?>">
		<p><label>Date: </label>
		<span><input type="date" name="tanggal" value="<?= $row['tanggal'] ?>">
		</span></p>
		
		<p><label>Company: </label>
		<span><select name="company" >
		<option value="10" <?php if($row['company']==10) echo 'selected' ?>>PT. Dimensi Infotek Biakcom</option>
		<option value="1" <?php if($row['company']==1) echo 'selected' ?>>PT. Fajar Lintasirja Lines</option>
		<option value="2" <?php if($row['company']==2) echo 'selected' ?>>PT. PBM. Bepondi Irja</option>
		<option value="3" <?php if($row['company']==3) echo 'selected' ?>>PT. EMKL. Bewani Irja</option>
		<option value="4" <?php if($row['company']==4) echo 'selected' ?>>PT. Bumi Wundi Irja</option>
		<option value="5" <?php if($row['company']==5) echo 'selected' ?>>PT. Gasirja Utama</option>
		<option value="6" <?php if($row['company']==6) echo 'selected' ?>>PT. Fajarirja Raya Mas</option>
		<option value="7" <?php if($row['company']==7) echo 'selected' ?>>CV. Manisaprop</option>
		<option value="8" <?php if($row['company']==8) echo 'selected' ?>>SPBU 84.981.01</option>
		<option value="9" <?php if($row['company']==9) echo 'selected' ?>>APMS 86.981.01</option>
		<option value="11" <?php if($row['company']==11) echo 'selected' ?>>PT. Viyata Kreasi Digital</option>
		<option value="12" <?php if($row['company']==12) echo 'selected' ?>>PT. Dibiak Farm</option>
		</select>
		</span></p>
		
		<p><label>User: </label>
		<span><input type="text" name="user" value="<?= $row['user'] ?>" required>
		</span></p>
		
		<p><label>Processor: </label>
		<span><input type="text" name="cpu" value="<?= $row['cpu'] ?>">
		</span></p>
		
		<p><label>Motherboard: </label>
		<span><input type="text" name="mobo" value="<?= $row['mobo'] ?>">
		</span></p>
		
		<p><label>RAM: </label>
		<span><input type="text" name="ram" value="<?= $row['ram'] ?>">
		</span></p>
		
		<p><label>Harddisk: </label>
		<span><input type="text" name="hdd" value="<?= $row['hdd'] ?>">
		</span></p>
		
		<p><label>Printer: </label>
		<span><input type="text" name="prt" value="<?= $row['prt'] ?>">
		</span></p>
		
		<p><label>Monitor: </label>
		<span><input type="text" name="mon" value="<?= $row['mon'] ?>">
		</span></p>
		
		<p><label>Operating System: </label>
		<span><input type="text" name="os" value="<?= $row['os'] ?>">
		</span></p>
		
		<p><label>Status: </label>
		<span><input type="text" name="sta" value="<?= $row['sta'] ?>">
		</span></p>
		
		<p><label>Note: </label>
		<span><input type="text" name="note" value="<?= $row['note'] ?>">
		</span></p>
		
		
		
		<p><label>&nbsp; </label>
		<span><input type="submit" class="button">
		</span></p>
	</form>
	
	<li id="bottom">
	<a href=assetRead.php><i class="icon-list icon-4x"></i></a>	
	</li>
</body>
</html>