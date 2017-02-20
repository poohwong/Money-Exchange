<?php
if (isset($_POST['exchange'])) {
	$money = $_POST['money'];
	$exchange = $_POST['exchange'];
	if($exchange == "KRW"){
		$moneyexch=$money*0.03;
	}
	else if($exchange == "RUB"){
		$moneyexch=$money*0.60;
	}
	else if($exchange == "EUR"){
		$moneyexch=$money*36.82;
	}
}
?>
<html>
<head>

	<title>Money Exchange</title>

	<style>
	.box {
		width: 500px;
		height: 70px;
		margin: 0 auto;
		margin-top: 400px;
	}
	body {
		background-color: #e5e5e5;
	}

	</style>
</head>
<body>
				<div class="box"> Exchange Money THB
<form method="POST" action="index.php">
	<input type="text" name="money" required>
	<select name="exchange" required>
		<option value="KRW">Korea</option>
		<option value="RUB">Russia</option>
		<option value="EUR">Euro</option>
	</select>
	<input type="submit"></button>
				
<?php
if (isset($_POST['exchange'])) {
?>
	<p><?=$moneyexch?></p>
<?php
}
?>
</div>


</form>
</body>
</html>