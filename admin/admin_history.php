<?php include 'header.html';?>
<br><br>
<?php $db= new mysqli('localhost','root','','pos'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Enable Hover State on Bootstrap 3 Table Rows</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<style>
 
table caption {
  padding: .5em 0;
}

@media screen and (max-width: 767px) {
  table caption {
    border-bottom: 1px solid #ddd;
  }
}

</style>
<div class="container" style="margin-top: 10%;">
  <div class="row">
    <div class="col-xs-12">
      <div class="table-responsive">
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
             
              <th><center>Invoice No.</center></th>
              <th colspan="24"><center>Rides</center></th>
              <th><center>Total No. of Tickets</center></th>
              <th><center>Amount to Pay</center></th>
              <th><center>Username</center></th>
              <th><center>Date</center></th>

            </tr>
          </thead>
          <tbody>
            <tr>
              <th></th>
              <th colspan="3"><center>ZIPLINE</center></th>
              <th colspan="3"><center>C.CAR</center></th>
              <th colspan="3"><center>B.CAR</center></th>
              <th colspan="3"><center>ATV</center></th>
              <th colspan="3"><center>B.CART</center></th>
              <th colspan="3"><center>G.KART</center></th>
              <th colspan="3"><center>SEGWAY</center></th>
              <th colspan="3"><center>B.BOAT</center></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
            </tr>
            <tr>
            <th></th>
            <th>K</th>
            <th>A</th>
            <th>D</th>
            <th>K</th>
            <th>A</th>
            <th>D</th>
            <th>K</th>
            <th>A</th>
            <th>D</th>
            <th>K</th>
            <th>A</th>
            <th>D</th>
            <th>K</th>
            <th>A</th>
            <th>D</th>
            <th>K</th>
            <th>A</th>
            <th>D</th>
            <th>K</th>
            <th>A</th>
            <th>D</th>
            <th>K</th>
            <th>A</th>
            <th>D</th>
            <th></th>
            <th></th>
            <th></th>
              <th></th>
            </tr>
          </tbody>
        
        </table>
      </div><!--end of .table-responsive-->
    </div>
  </div>
</div>

