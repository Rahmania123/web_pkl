<!DOCTYPE html>

<?php

//host, user, password, grafik
// '127.0.0.1, root, '', grafik
$link = mysql_connect('localhost', 'root','', 'grafik');

//menguji error
if( !$link ){
	die('ada error'. mysqli_connect_error());
	
}
mysql_close($link);
?>
<html lang="en-US">
<body>

<h1>My Web Page</h1>

<div id="piechart"></div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Task', 'Hours per Day'],
  ['Target', 8],
  ['Terkumpul', 2],
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'My Average Day', 'width':550, 'height':400};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>

</body>
</html>
