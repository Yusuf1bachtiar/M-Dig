<!DOCTYPE html>
<html>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
<body>
<div class="card mb-4">
                    <div class="card-body">
                        <h2 class="card-title">Data Demografi Berdasarkan Agama</h2><hr>
                    </div>
                </div>
<div
id="myChart" style="width:100%; max-width:600px; height:500px;">
</div>
<div><h2>Table Agama</h2>
	<table>
		<tr>
			<th class="tbl-st-hd" style="width: 5%;">Kode</th>
			<th class="tbl-st-hd">Kelompok</th>
			<th class="tbl-st-hd">Jumlah</th>
			<th class="tbl-st-hd">Persentase</th>
		</tr>
		<tr>
			<td>1</td>
			<td>ISLAM</td>
			<td>500</td>
			<td>25%</td>
		</tr>
		<tr>
			<td>2</td>
			<td>ISLAM</td>
			<td>500</td>
			<td>25%</td>
		</tr>
		<tr>
			<td>3</td>
			<td>Kristen</td>
			<td>500</td>
			<td>25%</td>
		</tr>
		<tr>
			<td>4</td>
			<td>Khatolk</td>
			<td>500</td>
			<td>25%</td>
		</tr>
		<tr>
			<td>5</td>
			<td>Hindu</td>
			<td>500</td>
			<td>25%</td>
		</tr>
		<tr>
			<td>5</td>
			<td>Matahari</td>
			<td>500</td>
			<td>25%</td>
		</tr>
		<tr>
			<td>6</td>
			<td>ISLAM</td>
			<td>500</td>
			<td>25%</td>
		</tr>
		<tr>
			<td>7</td>
			<td>ISLAM</td>
			<td>500</td>
			<td>25%</td>
		</tr>
	</table>
</div>
<script>
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
var data = google.visualization.arrayToDataTable([
  ['Contry', 'Mhl'],
  ['Italy',54.8],
  ['France',48.6],
  ['Spain',44.4],
  ['USA',23.9],
  ['Argentina',14.5]
]);

var options = {
  title:'World Wide Wine Production',
  is3D:true
};

var chart = new google.visualization.PieChart(document.getElementById('myChart'));
  chart.draw(data, options);
}
</script>

</body>
</html>



