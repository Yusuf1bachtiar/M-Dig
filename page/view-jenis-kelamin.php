<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/variable-pie.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<style>
  .header{
    padding-top: 2%;
  }
#container {
  height: 500px;
}

.highcharts-figure,
.highcharts-data-table table {
  min-width: 320px;
  max-width: 700px;
  margin: 1em auto;local
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
<!-- Example split danger button -->
<div style="max-width: 100%;">
<nav class="navbar navbar-light bg-light justify-content-between">
  <div style="padding-left: 40%;">
  <select>  
    <option>Statistik Data Jenis Kelamin Masyarakat Desa</option>
    <option>Statistik Data Agama Masyarakat Desa</option>
    <option>Statistik Data Pekerjaan Masyarakat Desa</option>
    <option>tatistik Data Usia Masyarakat Desa</option>
    <option>Statistik Data Pendidikan Masyarakat Desa</option>
  </select>
  </div>
  <div style="float: right;">
  <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
</nav>
</div>
</div>

<hr style="border: 1px solid gray;border-radius: 10%;">
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
<h2>TABEL JENIS KELAMIN</h2>
<table>
	<tr>
		<th>Kode</th>
		<th>Kelompok</th>
		<th>Jumlah (Jiwa)</th>
		<th>Persentase</th>
	</tr>
	<tr>
		<td>1</td>
		<td>Laki-Laki</td>
		<td>510</td>
		<td>91%</td>
	</tr>
	<tr>
		<td>2</td>
		<td>Perempuan</td>
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
      name: 'Laki-Laki',
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



