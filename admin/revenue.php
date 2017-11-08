<?php include 'header.html';?>
<?php
//index.php
$connect = mysqli_connect("localhost", "root", "", "pos");
$query = "SELECT * FROM revenue";
$result = mysqli_query($connect, $query);
$chart_data = '';
while($row = mysqli_fetch_array($result))
{
 $chart_data .= "{ day:'".$row["day"]."', profit:".$row["profit"].", purchase:".$row["purchase"].", sale:".$row["sale"]."}, ";
}
$chart_data = substr($chart_data, 0, -2);
?>

<!DOCTYPE html>
<html>
<head>
	<title>POS| Admin</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="morris.css">
  	<script src="js/jquery.min.js"></script>
  	<script src="js/raphael-min.js"></script>
  	<script src="js/morris.min.js"></script>
</head>

<body>
	<br><br><br><br>
	<div class="container" style="width: 90%">
   <h2 align="center">D' Leonor`s Daily Revenue</h2>   
   <br /><br />
   <div id="chart"></div>
  </div>
  
</body>
</html>
<script>
	Morris.Line({
	 element : 'chart',
	 data:[<?php echo $chart_data; ?>],
	 xkey:'day',
	 ykeys:['profit', 'purchase', 'sale'],
	 labels:['Profit', 'Purchase', 'Sale'],
	 hideHover:'auto',
	 stacked:true
});
</script>