<!DOCTYPE html>
<?php
$pc= mt_rand(0,2);
$you= 0;
if (isset($_POST['ppt'])) {
		if($_POST['ppt']=="jo"){
			$you=0;
		}elseif ($_POST['ppt']=="ken"){
			$you=1;
		}else{
			$you=2;
		}
}
?>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<title>Título</title>
	<link rel="stylesheet" href="css/jkp.css">
</head>
<body>
<center>
<div class="main">
	<h4>JO-KEN-PO</h4>
		<form action="" method="post">
			Pedra -<input type="radio" name="ppt" value="jo"><br>
			Papel -<input type="radio" name="ppt" value="ken"><br>
			Tesoura -<input type="radio" name="ppt" value="po"><br>
			<input type="submit" name="" value="send">
		</form>
</div>
</center>
<?php
$win="você venceu!";
$lost="você perdeu :C";
$draw="empateee!";

if($you==0){
	switch ($pc) {
		case 0:
			echo "<center><h4>".$draw."</h4><br>";
			echo "<img src='img/ken.png' width='150'>";
			echo "<img src='img/vsus.png' width='50' align='middle'>";
			echo "<img src='img/ken.png' width='150'></center";
			break;
		case 1:
			echo "<center><h4>".$lost."</h4><br>";
			echo "<img src='img/ken.png' width='150'>";
			echo "<img src='img/vsus.png' width='50' align='middle'>";
			echo "<img src='img/po.png' width='150'></center>";
			break;
		case 2:
			echo "<center><h4>".$win."</h4><br>";
			echo "<img src='img/ken.png' width='150'>";
			echo "<img src='img/vsus.png' width='50' align='middle'>";
			echo "<img src='img/jo.png' width='150'></center>";
			break;
		default:
			echo "erro<br>";
			break;
	}
}
elseif ($you==1){
	switch ($pc) {
		case 0:
			echo "<center><h4>".$win."</h4><br>";
			echo "<img src='img/po.png' width='150'>";
			echo "<img src='img/vsus.png' width='50'>";
			echo "<img src='img/ken.png' width='150'></center>";
			break;
		case 1:
			echo "<center><h4>".$draw."</h4><br>";
			echo "<img src='img/po.png' width='150'>";
			echo "<img src='img/vsus.png' width='50'>";
			echo "<img src='img/po.png' width='150'></center>";
			break;
		case 2:
			echo "<center><h4>".$lost."</h4><br>";
			echo "<img src='img/po.png' width='150'>";
			echo "<img src='img/vsus.png' width='50'>";
			echo "<img src='img/jo.png' width='150'></center>";
			break;
		default:
			echo "erro<br>";
			break;
	}
}
elseif ($you==2){
	switch ($pc) {
		case 0:
			echo "<center><h4>".$lost."</h4><br>";
			echo "<img src='img/jo.png' width='150'>";
			echo "<img src='img/vsus.png' width='50'>";
			echo "<img src='img/ken.png' width='150'></center>";
			break;
		case 1:
			echo "<center><h4>".$win."</h4><br>";
			echo "<img src='img/jo.png' width='150'>";
			echo "<img src='img/vsus.png' width='50'>";
			echo "<img src='img/po.png' width='150'></center>";
			break;
		case 2:
			echo "<center><h4>".$draw."</h4><br>";
			echo "<img src='img/jo.png' width='150'>";
			echo "<img src='img/vsus.png' width='50'>";
			echo "<img src='img/jo.png' width='150'></center>";
			break;
		default:
			echo "erro<br>";
			break;
	}
}
else {
	echo "Anything went wrong, try again :P";
}
?>
</body>
</html>
