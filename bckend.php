<head>
	<title>Statkom</title>
</head>
<table bgcolor="#F0FFFF" border="4" align="center" width="500">
	<td>
		<body background="bgfp.jpg">
			<h2 align="center">Hasil perhitungan</h2>
		</body>
	</td>
</table>
<table align="center" border="4" width="500">
	<td>
<?php  
$usiaA1 = [20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69];

function usiacari($Adata, $keyword){
	for ($i=0; $i <= count($Adata) ; $i++) { 
		if ($keyword == $Adata[$i]) {
			return $i;
		}
	}
	return null;
}

$input1 = $_POST['input1'];
$input2 = $_POST['input2'];
$input3 = $_POST['input3'];
$input4 = $_POST['input4'];
$input5 = $_POST['input5'];
$temp = $input1;

#Keputusan
$YA = 5/10;
$TIDAK = 5/10;


#INPUT1
$fungsi1 = usiacari($usiaA1, $temp);
if ($temp >= 20 && $temp < 40) {
	$ya1 = 2/5;
	$no1 = 2/5;
}
elseif ($temp >= 40 && $temp < 60) {
 	$ya1 = 3/5;
 	$no1 = 1/5;
}
elseif ($temp >= 60 && $temp < 70) {
 	$ya1 = 0/5;
 	$no1 = 2/5;
}
// // else{
// // echo "Masukkan data dengan lengkap".'<br/>';
// // }

#INPUT2
if($input2 == 'sd' ){
	$ya2 = 1/5;
	$no2 = 0/5;
}
elseif ($input2 == 'sma') {
	$ya2 = 1/5;
	$no2 = 1/5;
}
elseif ($input2 == 'smp') {
	$ya2 = 3/5;
	$no2 = 0/5;
}
elseif ($input2 == 's1' ) {
	$ya2 = 0/5;
	$no2 = 2/5;
}
elseif ($input2 == 'diploma') {
	$ya2 = 0/5;
	$no2 = 2/5;
}
// else{
// echo "Masukkan data dengan lengkap".'<br/>';
// }
#INPUT3
if($input3 == 'ks' ){
	$ya3 = 2/5;
	$no3 = 1/5;
}
elseif ($input3 == 'pens') {
	$ya3 = 0/5;
	$no3 = 2/5;
}
elseif ($input3 == 'ww') {
	$ya3 = 2/5;
	$no3 = 0/5;
}
elseif ($input3 == 'pns' ) {
	$ya3 = 0/5;
	$no3 = 2/5;
}
elseif ($input3 == 'bhl') {
	$ya3 = 1/5;
	$no3 = 0/5;
}
// else{
// echo "Masukkan data dengan lengkap".'<br/>';
// }

#INPUT4
if($input4 == 'r' ){
	$ya4 = 4/5;
	$no4 = 0/5;
}
elseif ($input4 == 'c') {
	$ya4 = 1/5;
	$no4 = 1/5;
}
elseif ($input4 == 't') {
	$ya4 = 0/5;
	$no4 = 3/5;
}
elseif ($input4 == 'st' ) {
	$ya4 = 0/5;
	$no4 = 1/5;
}
// else{
// echo "Masukkan data dengan lengkap".'<br/>';
// }

#INPUT5
if($input5 == '0' ){
	$ya5 = 1/5;
	$no5 = 2/5;
}
elseif ($input5 == '1') {
	$ya5 = 1/5;
	$no5 = 1/5;
}
elseif ($input5 == '2') {
	$ya5 = 3/5;
	$no5 = 1/5;
}
elseif ($input5 == '3' ) {
	$ya5 = 0/5;
	$no5 = 1/5;
}
// else{
// echo "Masukkan data dengan lengkap".'<br/>';
// }

$totalya = $ya1 * $ya2 * $ya3 * $ya4 * $ya5 * $YA;
$totalno = $no1 * $no2 * $no3 * $no4 * $no5 * $TIDAK;

echo "Presentasi mendapatkan KIS = $totalya".'</br>';
echo "Presentasi tidak mendapatkan KIS = $totalno".'</br>';

if ($totalya > $totalno) {
	echo "Orang tersebut berhak mendapat KIS";
}
else{
	echo "Orang tersebut tidak berhak mendapatkan KIS";
}

?>
</td>
</table>
<body>
		<a style="
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

		" href="index.php">Kembali ke Tabel Perhitungan</a>
</body>