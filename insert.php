<?php 
session_start();
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'pos';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
$query = "SELECT * FROM history ORDER BY id ASC";
$result = mysqli_query($mysqli, $query);
$firstname = $_SESSION['firstname'];
$lastname = $_SESSION['lastname'];
$num = $_SESSION['num'];
$_SESSION['num'] = $num;
$_SESSION['firstname'] = $firstname;
$_SESSION['lastname'] = $lastname;

//entrance
$ekid = $_POST['ekid'];
$eadult = $_POST['eadult'];
$edisc = $_POST['edisc'];

if (empty($ekid) && empty($eadult) && empty($edisc)) {
	header("location: menu.php");
}

//pools
$wpkid = $_POST['wpkid'];
$wpadult = $_POST['wpadult'];
$wpdisc = $_POST['wpdisc'];
$gskid = $_POST['gskid'];
$gsadult = $_POST['gsadult'];
$gsdisc = $_POST['gsdisc'];
//rides
$akid = $_POST['akid'];
$aadult = $_POST['aadult'];
$adisc = $_POST['adisc'];
$bbkid = $_POST['bbkid'];
$bbadult = $_POST['bbadult'];
$bbdisc = $_POST['bbdisc'];
$bckid = $_POST['bckid'];
$bcadult = $_POST['bcadult'];
$bcdisc = $_POST['bcdisc'];
$bkkid = $_POST['bkkid'];
$bkadult = $_POST['bkadult'];
$bkdisc = $_POST['bkdisc'];
$cckid = $_POST['cckid'];
$ccadult = $_POST['ccadult'];
$ccdisc = $_POST['ccdisc'];
$gkkid = $_POST['gkkid'];
$gkadult = $_POST['gkadult'];
$gkdisc = $_POST['gkdisc'];
$skid = $_POST['skid'];
$sadults = $_POST['sadults'];
$sdisc = $_POST['sdisc'];
$zkid = $_POST['zkid'];
$zadult = $_POST['zadult'];
$zdisc = $_POST['zdisc'];

if ($ekid==""){
	$ekid="0";
}
if ($eadult==""){
	$eadult="0";
}
if ($edisc==""){
	$edisc="0";}
	
if ($gskid==""){
	$gskid="0";
}
if ($gsadult==""){
	$gsadult="0";
}
if ($gsdisc==""){
	$gsdisc="0";
}
if ($wpkid==""){
	$wpkid="0";
}	
if ($wpadult==""){
	$wpadult="0";
}
if ($wpdisc==""){
	$wpdisc="0";
}
if ($bckid==""){
	$bckid="0";
}
if ($bcadult==""){
	$bcadult="0";
}
if ($bcdisc==""){
	$bcdisc="0";
}
if ($bkkid==""){
	$bkkid="0";
}	
if ($bkadult==""){
	$bkadult="0";
}
if ($bkdisc==""){
	$bkdisc="0";
}
if ($zkid==""){
	$zkid="0";
}
if ($zadult==""){
	$zadult="0";
}
if ($zdisc==""){
	$zdisc="0";
}	
if ($cckid==""){
	$cckid="0";
}	
if ($ccadult==""){
	$ccadult="0";
}
if ($ccdisc==""){
	$ccdisc="0";
}
if ($akid==""){
	$akid="0";
}	
if ($aadult==""){
	$aadult="0";
}
if ($adisc==""){
	$adisc="0";
}	
if ($skid==""){
	$skid="0";
}
if ($sadults==""){
	$sadults="0";
}
if ($sdisc==""){
	$sdisc="0";
}	
if ($gkkid==""){
	$gkkid="0";
}	
if ($gkadult==""){
	$gkadult="0";
}
if ($gkdisc==""){
	$gkdisc="0";
}
if ($bbkid==""){
	$bbkid="0";
}	
if ($bbadult==""){
	$bbadult="0";
}
if ($bbdisc==""){
	$bbdisc="0";
}
$options="";
$temp="";
$sql = "INSERT INTO history (dat, username, ekid, eadult, edisc, gskid, gsadult, gsdisc, wpkid, wpadult, wpdisc, bckid, bcadult, bcdisc, bkkid, bkadult, bkdisc, zkid, zadult, zdisc, cckid, ccadult, ccdisc, akid, aadult, adisc, skid, sadult, sdisc, gkkid, gkadult, gkdisc, bbkid, bbadult, bbdisc) VALUES (NOW(),'$num', '$ekid','$eadult','$edisc','$gskid','$gsadult','$gsdisc','$wpkid','$wpadult','$wpdisc','$bckid','$bcadult','$bcdisc','$bkkid','$bkadult','$bkdisc','$zkid','$zadult','$zdisc','$cckid','$ccadult','$ccdisc','$akid','$aadult','$adisc','$skid','$sadults','$sdisc','$gkkid','$gkadult','$gkdisc','$bbkid','$bbadult','$bbdisc')";
if ( $mysqli->query($sql) ){
}

while ($row = mysqli_fetch_array($result)) {
	$options = $row[0];
	$temp = $row[1];
}
$options=($options+1);

if (!empty($ekid)||!empty($eadult)||!empty($edisc)) {
	$sql = "INSERT INTO entrance(ekid, eadult, edisc, transacid, username, dat) VALUES ('$ekid','$eadult','$edisc','$options','$num', NOW())";
	if ( $mysqli->query($sql) ){
	}
}
if (!empty($wpkid)||!empty($wpadult)||!empty($wpdisc)) {
	$sql = "INSERT INTO  wave_pool ( id ,  wpkid ,  wpadult ,  wpdisc ,  username, dat ) VALUES ('$options','$wpkid','$wpadult','$wpdisc','$num', NOW())";
	if ( $mysqli->query($sql) ){
	}
}
if (!empty($gskid)||!empty($gsadult)||!empty($gsdisc)) {
	$sql = "INSERT INTO  giant_slide ( id ,  gskid ,  gsadult ,  gsdisc ,  username, dat ) VALUES ('$options','$gskid','$gsadult','$gsdisc','$num', NOW())";
	if ( $mysqli->query($sql) ){
	}
}
if (!empty($zkid)||!empty($zadult)||!empty($zdisc)) {
	$sql = "INSERT INTO  zipline ( id ,  zkid ,  zadult ,  zdisc ,  username, dat ) VALUES ('$options','$zkid','$zadult','$zdisc','$num', NOW())";
	if ( $mysqli->query($sql) ){
	}
}
if (!empty($skid)||!empty($sadults)||!empty($sdisc)) {
	$sql = "INSERT INTO  segway ( id ,  skid ,  sadult ,  sdisc ,  username, dat ) VALUES ('$options','$skid','$sadults','$sdisc','$num', NOW())";
	if ( $mysqli->query($sql) ){
	}
}
if (!empty($cckid)||!empty($ccadult)||!empty($ccdisc)) {
	$sql = "INSERT INTO  cable_car ( id ,  cckid ,  ccadult ,  ccdisc ,  username, dat ) VALUES ('$options','$cckid','$ccadult','$ccdisc','$num', NOW())";
	if ( $mysqli->query($sql) ){
	}
}
if (!empty($bbkid)||!empty($bbadult)||!empty($bbdisc)) {
	$sql = "INSERT INTO  bumper_boat ( id ,  bbkid ,  bbadult ,  bbdisc ,  username, dat ) VALUES ('$options','$bbkid','$bbadult','$bbdisc','$num', NOW())";
	if ( $mysqli->query($sql) ){
	}
}
if (!empty($bckid)||!empty($bcadult)||!empty($bcdisc)) {
	$sql = "INSERT INTO  bump_car ( id ,  bckid ,  bcadult ,  bcdisc ,  username, dat ) VALUES ('$options','$bckid','$bcadult','$bcdisc','$num', NOW())";
	if ( $mysqli->query($sql) ){
	}
}
if (!empty($bkkid)||!empty($bkadult)||!empty($bkdisc)) {
	$sql = "INSERT INTO  buggy_kart ( id ,  bkkid ,  bkadult ,  bkdisc ,  username, dat ) VALUES ('$options','$bkkid','$bkadult','$bkadult','$num', NOW())";
	if ( $mysqli->query($sql) ){
	}
}
if (!empty($gkkid)||!empty($gkadult)||!empty($gkdisc)) {
	$sql = "INSERT INTO  go_kart ( id ,  gkkid ,  gkadult ,  gkdisc ,  username, dat ) VALUES ('$options','$gkkid','$gkadult','$gkdisc','$num', NOW())";
	if ( $mysqli->query($sql) ){
	}
}
if (!empty($akid)||!empty($aadult)||!empty($adisc)) {
	$sql = "INSERT INTO  atv_truck ( id ,  akid ,  aadult ,  adisc ,  username, dat ) VALUES ('$options','$akid','$aadult','$adisc','$num', NOW())";
	if ( $mysqli->query($sql) ){
	}
}
$ent=(($ekid*100) + ($eadult*100) + ($edisc*100));
$rides=(($akid*100) + ($aadult*100) + ($adisc*100) + ($bbkid*100) + ($bbadult*100) + ($bbdisc*100) + ($bckid*100) + ($bcadult*100) + ($bcdisc*100) + ($bkkid*100) + ($bkadult*100) + ($bkdisc*100) + ($cckid*100) + ($ccadult*100) + ($ccdisc*100) + ($gkkid*100) + ($gkadult*100) + ($gkdisc*100) + ($skid*100) + ($sadults*100) + ($sdisc*100) + ($zkid*100) + ($zadult*100) + ($zdisc*100));
$pool=(($wpkid*100) + ($wpadult*100) + ($wpdisc*100) + ($gskid*100) + ($gsadult*100) + ($gsdisc*100));
$sum=($ent+$rides+$pool);
$sqlr = "INSERT INTO  revenue ( entrance ,  pool ,  rides ,  total ,  transacid ,  dat ,  username ) VALUES ('$ent','$pool','$rides','$sum','$options',NOW(),'$num')";
if ( $mysqli->query($sqlr) ){
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/welcom.css">
	<title>Receipt</title>
</head>
<body>
	<div class="receipt">
	<table style="width: 100%; text-align: center;">
		<img src="Images/logoo.png" style="width: 10%; margin-left: 45%;">
		<p><center><strong>D'Leonor Inland Resort<br>
		Purok 5, Barangay Communal,<br>
		Davao City, Philippines, 8000<br><br>
		Official Receipt<br>
		</strong></center></p>
		<br>
		<p><strong>Date: <?php echo ($temp); ?><br>
		Cashier: <?php echo $firstname." ".$lastname  ;?><br>
		Transaction Number:<?php echo ($options); ?></strong></p>

		<tr>
			<th>QTY</th>
			<th>DESCRIPTION</th>
			<th>AMOUNT</P></th>	
		</tr>
			<p> <?php if(!empty($ekid)){echo "<tr><td>".$ekid."</td><td>Entrance(kid):</td>"."<td>".($ekid*100)."</td>"."</tr>"; }?></p>
			<p> <?php if(!empty($eadult)){ echo "<tr><td>".$eadult."</td><td>Entrance(Adult):</td>"."<td>".($eadult*100)."</td>"."</tr>";} ?></p>
			<p> <?php if(!empty($edisc)){ echo "<tr><td>".$edisc."</td><td>Entrance(Discounted):</td>"."<td>".($edisc*100)."</td>"."</tr>";} ?></p>

			<p> <?php if(!empty($wpkid)){echo "<tr><td>".$wpkid."</td><td>Wavepool(kid):</td>"."<td>".($wpkid*100)."</td>"."</tr>";} ?></p>
			<p> <?php if(!empty($wpadult)){echo "<tr><td>".$wpadult."</td><td>Wavepool(adult):</td>"."<td>".($wpadult*100)."</td>"."</tr>";} ?></p>
			<p> <?php if(!empty($wpdisc)){echo "<tr><td>".$wpdisc."</td><td>Wavepool(discount):</td>"."<td>".($wpdisc*100)."</td>"."</tr>";} ?></p>

			<p> <?php if(!empty($gskid)){echo "<tr><td>".$gskid."</td><td>Giant Slide(kid):</td>"."<td>".($gskid*100)."</td>"."</tr>";} ?></p>
			<p> <?php if(!empty($gsadult)){echo "<tr><td>".$gsadult."</td><td>Giant Slide(discount):</td>"."<td>".($gsadult*100)."</td>"."</tr>";} ?></p>
			<p> <?php if(!empty($gsdisc)){echo "<tr><td>".$gsdisc."</td><td>Giant Slide(discount):</td>"."<td>".($gsdisc*100)."</td>"."</tr>";} ?></p>

			<p> <?php if(!empty($akid)){echo "<tr><td>".$akid."</td><td>ATV Truck(kid):</td>"."<td>".($akid*100)."</td>"."</tr>";} ?></p>
			<p> <?php if(!empty($aadult)){echo "<tr><td>".$aadult."</td><td>ATV Truck(adult):</td>"."<td>".($aadult*100)."</td>"."</tr>";} ?></p>
			<p> <?php if(!empty($adisc)){echo "<tr><td>".$adisc."</td><td>ATV Truck(discount):</td>"."<td>".($adisc*100)."</td>"."</tr>";} ?></p>

			<p> <?php if(!empty($bbkid)){echo "<tr><td>".$bbkid."</td><td>Bump Boat(kid):</td>"."<td>".($bbkid*100)."</td>"."</tr>";} ?></p>
			<p> <?php if(!empty($bbadult)){echo "<tr><td>".$bbadult."</td><td>Bump Boat(adult):</td>"."<td>".($bbadult*100)."</td>"."</tr>";} ?></p>
			<p> <?php if(!empty($bbdisc)){echo "<tr><td>".$bbdisc."</td><td>Bump Boat(discount):</td>"."<td>".($bbdisc*100)."</td>"."</tr>";} ?></p>

			<p> <?php if(!empty($bckid)){echo "<tr><td>".$bckid."</td><td>Bump Car(kid):</td>"."<td>".($bckid*100)."</td>"."</tr>";} ?></p>
			<p> <?php if(!empty($bcadult)){echo "<tr><td>".$bcadult."</td><td>Bump Car(adult):</td>"."<td>".($bcadult*100)."</td>"."</tr>";} ?></p>
			<p> <?php if(!empty($bcdisc)){echo "<tr><td>".$bcdisc."</td><td>Bump Car(discount):</td>"."<td>".($bcdisc*100)."</td>"."</tr>";} ?></p>

			<p> <?php if(!empty($bkkid)){echo "<tr><td>".$bkkid."</td><td>Buggy Kart(kid):</td>"."<td>".($bkkid*100)."</td>"."</tr>";} ?></p>
			<p> <?php if(!empty($bkadult)){echo "<tr><td>".$bkadult."</td><td>Buggy Kart(adult):</td>"."<td>".($bkadult*100)."</td>"."</tr>";} ?></p>
			<p> <?php if(!empty($bkdisc)){echo "<tr><td>".$bkdisc."</td><td>Buggy Kart(discount):</td>"."<td>".($bkdisc*100)."</td>"."</tr>";} ?></p>

			<p> <?php if(!empty($cckid)){echo "<tr><td>".$cckid."</td><td>Cable Car(kid):</td>"."<td>".($cckid*100)."</td>"."</tr>";} ?></p>
			<p> <?php if(!empty($ccadult)){echo "<tr><td>".$ccadult."</td><td>Cable Car(adult):</td>"."<td>".($ccadult*100)."</td>"."</tr>";} ?></p>
			<p> <?php if(!empty($ccdisc)){echo "<tr><td>".$ccdisc."</td><td>Cable Car(discount):</td>"."<td>".($ccdisc*100)."</td>"."</tr>";} ?></p>

			<p> <?php if(!empty($gkkid)){echo "<tr><td>".$gkkid."</td><td>Go Kart(kid):</td>"."<td>".($gkkid*100)."</td>"."</tr>";} ?></p>
			<p> <?php if(!empty($gkadult)){echo "<tr><td>".$gkadult."</td><td>Go Kart(adult):</td>"."<td>".($gkadult*100)."</td>"."</tr>";} ?></p>
			<p> <?php if(!empty($gkdisc)){echo "<tr><td>".$gkdisc."</td><td>Go Kart(discount):</td>"."<td>".($gkdisc*100)."</td>"."</tr>";} ?></p>

			<p> <?php if(!empty($skid)){echo "<tr><td>".$skid."</td><td>Segway(kid):</td>"."<td>".($skid*100)."</td>"."</tr>";} ?></p>
			<p> <?php if(!empty($sadults)){echo "<tr><td>".$sadults."</td><td>Segway(adult):</td>"."<td>".($sadults*100)."</td>"."</tr>";} ?></p>
			<p> <?php if(!empty($sdisc)){echo "<tr><td>".$sdisc."</td><td>Segway(discount):</td>"."<td>".($sdisc*100)."</td>"."</tr>";} ?></p>

			<p> <?php if(!empty($zkid)){echo "<tr><td>".$zkid."</td><td>Zipline(kid):</td>"."<td>".($zkid*100)."</td>"."</tr>";} ?></p>
			<p> <?php if(!empty($zadult)){echo "<tr><td>".$zadult."</td><td>Zipline(adult):</td>"."<td>".($zadult*100)."</td>"."</tr>";} ?></p>
			<p> <?php if(!empty($zdisc)){echo "<tr><td>".$zdisc."</td><td>Zipline(discount):</td>"."<td>".($zdisc*100)."</td>"."</tr>";} ?></p>

			<p><tr><td></td><td><strong>Total:</strong></td><td><strong><?php echo $sum; ?></strong></td></tr></p>
			<br>
			</tr>
			</table>
			<div style="margin-bottom: 3%;">
				<p><center><strong>Email: dleonorinlandresort@gmail.com<br>
				Tel No: +211 112 121 212<br>
				Thank you. Come again.</strong></center></p>
			</div>
	</div>	
	
		<button onclick="myFunction()" style="float: right; margin-right: 30%; margin-top: 1%; width: 4%;" class="button"><img src="Images/print.png" alt="Print" style="width: 80%;"></button>
</body>
<script>
function myFunction() {
    window.print();
}
</script>
</html>