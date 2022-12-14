<!DOCTYPE html>
<html>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/variable-pie.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<style>
#container {
  height: 500px;
}

.highcharts-figure,
.highcharts-data-table table {
  min-width: 320px;
  max-width: 700px;
  margin: 1em auto;
}

.highcharts-data-table table {
  font-family: Verdana, sans-serif;
  border-collapse: collapse;
  border: 1px solid #ebebeb;
  margin: 10px auto;
  text-align: center;
  width: 100%;
  max-width: 500px;
}

.highcharts-data-table caption {
  padding: 1em 0;
  font-size: 1.2em;
  color: #555;
}

.highcharts-data-table th {
  font-weight: 600;
  padding: 0.5em;
}

.highcharts-data-table td,
.highcharts-data-table th,
.highcharts-data-table caption {
  padding: 0.5em;
}

.highcharts-data-table thead tr,
.highcharts-data-table tr:nth-child(even) {
  background: #f8f8f8;
}

.highcharts-data-table tr:hover {
  background: #f1f7ff;
}
.chart.a {
	background-color: #faf5f5; border-radius:10px;
}
.tabel-a {
	background-color: #faf5f5; border-radius:10px;
}
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
<h2 style="margin-left: 15px;">DATA DEMOGRAFI BERDASARKAN UMUR</h2>
<hr style="border: 15px solid gray;border-radius: 15%">
<div class="chart-a">
<figure class="highcharts-figure">
  <div id="container"></div>
  <p class="highcharts-description">
    Variable radius pie charts can be used to visualize a
    second dimension in a pie chart. In this chart, the more
    densely populated countries are drawn further out, while the
    slice width is determined by the size of the country.
  </p>
</figure>
</div>
<div class="tabel-a">
<h2>TABEL UMUR</h2>
<table>
	<tr>
		<th>Kode</th>
		<th>Kelompok</th>
		<th>Jumlah (Jiwa)</th>
		<th>Persentase</th>
	</tr>
	<tr>
		<td>1</td>
		<td>0-3 Tahun</td>
		<td>510</td>
		<td>91%</td>
	</tr>
	<tr>
		<td>2</td>
		<td>3-9 Tahun</td>
		<td>510</td>
		<td>91%</td>
	</tr>
	<tr>
		<td>3</td>
		<td>9-15 Tahun</td>
		<td>510</td>
		<td>91%</td>
	</tr>
	<tr>
		<td>4</td>
		<td>15-20 Tahun</td>
		<td>510</td>
		<td>91%</td>
	</tr>
	<tr>
		<td>5</td>
		<td>21 Tahun</td>
		<td>510</td>
		<td>91%</td>
	</tr>
	<tr>
		<td>6</td>
		<td>22 Tahun</td>
		<td>510</td>
		<td>91%</td>
	</tr>

</table>
</div>
<script type="text/javascript">
	// Data retrieved from https://worldpopulationreview.com/country-rankings/countries-by-density
Highcharts.chart('container', {
  chart: {
    type: 'variablepie'
  },
  title: {
    text: 'Data Statistik Terkini Penduduk Berdasarkan laporan tahun 2021.'
  },
  tooltip: {
    headerFormat: '',
    pointFormat: '<span style="color:{point.color}">\u25CF</span> <b> {point.name}</b><br/>' +
      'Area (square km): <b>{point.y}</b><br/>' +
      'Population density (people per square km): <b>{point.z}</b><br/>'
  },
  series: [{
    minPointSize: 10,
    innerSize: '20%',
    zMin: 0,
    name: 'countries',
    data: [{
      name: '0-3 Tahun',
      y: 505992,
      z: 92
    }, {
      name: 'France',
      y: 551695,
      z: 119
    }, {
      name: 'Poland',
      y: 312679,
      z: 121
    }, {
      name: 'Czech Republic',
      y: 78865,
      z: 136
    }, {
      name: 'Italy',
      y: 301336,
      z: 200
    }, {
      name: 'Switzerland',
      y: 41284,
      z: 213
    }, {
      name: 'Germany',
      y: 357114,
      z: 235
    }]
  }]
});
</script>
</body>
</html>



