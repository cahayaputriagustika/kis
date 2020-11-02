<!DOCTYPE html>
<html>
<head>
	<title>Statkom</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Klasifikasi Penerima Kartu Indonesia Sehat</h1>
	<h4 align="center" >Algoritma Naive Bayes Classifier</h4>

<table class="table1" align="center" border="1">
		<tr>
			<th>Usia</th>
			<th>pedidikan terakhir</th>
			<th>pekerjaan</th>
			<th>pendapatan</th>
			<th>Tanggungan Anak</th>
			<th>Terima KIS (Y/T) ?</th>
		</tr>
		<tr>
			<td align="center">58</td>
			<td>TAMAT SD</td>
			<td>KARYAWAN SWASTA</td>
			<td>RENDAH</td>
			<td align="center">0</td>
			<td>YA</td>
		</tr>
				<tr>
			<td align="center">63</td>
			<td>SLTA</td>
			<td>PENSIUNAN</td>
			<td>TINGGI</td>
			<td align="center">1</td>
			<td>TIDAK</td>
		</tr>
				<tr>
			<td align="center">39</td>
			<td>SLTP</td>
			<td>WIRASWASTA</td>
			<td>RENDAH</td>
			<td align="center">2</td>
			<td>YA</td>
		</tr>
				<tr>
			<td align="center">58</td>
			<td>SLTP</td>
			<td>KARYAWAN SWASTA</td>
			<td>CUKUP</td>
			<td align="center">2</td>
			<td>YA</td>
		</tr>
				<tr>
			<td align="center">52</td>
			<td>DIPLOMA IV/STRATA I</td>
			<td>PNS</td>
			<td>SANGAT TINGGI</td>
			<td align="center">3</td>
			<td>TIDAK</td>
		</tr>
				<tr>
			<td align="center">69</td>
			<td>AKADEMI/DIPLOMA III</td>
			<td>PENSIUNAN</td>
			<td>TINGGI</td>
			<td align="center">0</td>
			<td>TIDAK</td>
		</tr>
				<tr>
			<td align="center">32</td>
			<td>SLTA</td>
			<td>BURUH HARIAN LEPAS</td>
			<td>RENDAH</td>
			<td align="center">1</td>
			<td>YA</td>
		</tr>
				<tr>
			<td align="center">39</td>
			<td>AKADEMI/DIPLOMA III</td>
			<td>KARYAWAN SWASTA</td>
			<td>CUKUP</td>
			<td align="center">0</td>
			<td>TIDAK</td>
		</tr>
				<tr>
			<td align="center">31</td>
			<td>DIPLOMA IV/ STRATA I</td>
			<td>PNS</td>
			<td>TINGGI</td>
			<td align="center">2</td>
			<td>TIDAK</td>
		</tr>
				<tr>
			<td align="center">50</td>
			<td>SLTP</td>
			<td>WIRASWASTA</td>
			<td>RENDAH</td>
			<td align="center">2</td>
			<td>YA</td>
		</tr>
</table>
<br>
<br>


<!-- Input data	 -->
<form method="post" action="bckend.php">
	
	<table align="center" border="1">
		<tr>
			<th>Usia</th>
			<th>Pedidikan Terakhir</th>
			<th>Pekerjaan</th>
			<th>Pendapatan</th>
			<th>TA</th>
			<th rowspan="2">Terima KIS (Y/T) ?</th>
		</tr>
		<tr>
			<td align="center"><input type="number" min="0" max="100" name="input1"></td>
			<td>
			<select name="input2">
				<optgroup label="Pendidikan terakhir">
				<option value="sd">Tamat SD</option>
				<option value="smp">SLTP</option>
				<option value="sma">SLTA</option>
				<option value="diploma">Akademi/Diploma III</option>
				<option value="s1">Diploma IV/Strata I</option>
				</optgroup>
			</select>
			</td>
			<td>
			<select name="input3">
				<optgroup label="Pekerjaan">
				<option value="ks">Karyawan Swasta</option>
				<option value="ww">Wiraswasta</option>
				<option value="pens">Pensiunan</option>
				<option value="pns">PNS</option>
				<option value="bhl">Buruh Harian Lepas</option>
				</optgroup>
			</select>
			</td>
			<td>
			<select name="input4">
				<optgroup label="pendapatan">
				<option value="r">Rendah</option>
				<option value="c">Cukup</option>
				<option value="t">Tinggi</option>
				<option value="st">Sangat Tinggi</option>
				</optgroup>
			</select>
			</td>
			<td><input type="number" min="0" max="10" name="input5"></td>
		</tr>
	</table>
	<br>
	<br>
	<table align="center">
		<tr>
	<td>
		<input align="center" type="reset" name="proses"
		style="
  background:#2C97DF;
  color:white;
  border-top:0;
  border-left:0;
  border-right:0;
  border-bottom:5px solid #2A80B9;
  padding:10px 20px;
  text-decoration:none;
  font-family:sans-serif;
  font-size:11pt;
		">
	</td>
	<td>
		<input align="center" type="submit" name="proses" value="Proses" style="
  background:#2C97DF;
  color:white;
  border-top:0;
  border-left:0;
  border-right:0;
  border-bottom:5px solid #2A80B9;
  padding:10px 20px;
  text-decoration:none;
  font-family:sans-serif;
  font-size:11pt;
		">
	</td>
	</tr>
	</table>

</form>
</body>
</html>