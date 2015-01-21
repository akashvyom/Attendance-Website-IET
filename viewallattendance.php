
<?php
if(@$_GET['print']=='1'){echo '<html><body onload="print()"></body></html>';}
$i;
$day;
$username = $_GET['username'];
$classes = $_GET['subject'];
$month = $_GET['month'];
$monthvalue = $month;
switch ($month) {
    case 1:
        $month = "jan";
        break;
    case 2:
        $month = "feb";
        break;
    case 3:
        $month = "mar";
        break;
    case 4:
        $month = "apr";
        break;
    case 5:
        $month = "may";
        break;
    case 6:
        $month = "jun";
        break;
    case 7:
        $month = "jul";
        break;
    case 8:
        $month = "aug";
        break;
    case 9:
        $month = "sep";
        break;
    case 10:
        $month = "oct";
        break;
    case 11:
        $month = "nov";
        break;
    case 12:
        $month = "dec";
        break;
}

echo "<table border='1'>

<th>Roll No</th>
<th>Name</th>";

$table = $username . "ar" . $classes . $month;
$dayofclass;
$atten;
$nameofstudent;

$con = mysql_connect("localhost","root","tiger");
if (!$con) {
die("Could not connect: " . mysql_error());
}
mysql_select_db("1117106_vistar", $con);
$query = "SELECT * FROM `".$table."`";
$result = mysql_query($query, $con);
if (!$result) {
die("ghujhjk:".mysql_error());
}
$owntime = '1';
while ($row = mysql_fetch_array($result)) {
  if($owntime=='1'){
if($row['1']!='2'){echo "<th>1/".$monthvalue."</th>";}

if($row['2']!='2'){echo "<th>2/".$monthvalue."</th>";}

if($row['3']!='2'){echo "<th>3/".$monthvalue."</th>";}

if($row['4']!='2'){echo "<th>4/".$monthvalue."</th>";}

if($row['5']!='2'){echo "<th>5/".$monthvalue."</th>";}

if($row['6']!='2'){echo "<th>6/".$monthvalue."</th>";}

if($row['7']!='2'){echo "<th>7/".$monthvalue."</th>";}

if($row['8']!='2'){echo "<th>8/".$monthvalue."</th>";}

if($row['9']!='2'){echo "<th>9/".$monthvalue."</th>";}

if($row['10']!='2'){echo "<th>10/".$monthvalue."</th>";}

if($row['11']!='2'){echo "<th>11/".$monthvalue."</th>";}

if($row['12']!='2'){echo "<th>12/".$monthvalue."</th>";}

if($row['13']!='2'){echo "<th>13/".$monthvalue."</th>";}

if($row['14']!='2'){echo "<th>14/".$monthvalue."</th>";}

if($row['15']!='2'){echo "<th>15/".$monthvalue."</th>";}

if($row['16']!='2'){echo "<th>16/".$monthvalue."</th>";}

if($row['17']!='2'){echo "<th>17/".$monthvalue."</th>";}

if($row['18']!='2'){echo "<th>18/".$monthvalue."</th>";}

if($row['19']!='2'){echo "<th>19/".$monthvalue."</th>";}

if($row['20']!='2'){echo "<th>20/".$monthvalue."</th>";}

if($row['21']!='2'){echo "<th>21/".$monthvalue."</th>";}

if($row['22']!='2'){echo "<th>22/".$monthvalue."</th>";}

if($row['23']!='2'){echo "<th>23/".$monthvalue."</th>";}

if($row['24']!='2'){echo "<th>24/".$monthvalue."</th>";}

if($row['25']!='2'){echo "<th>25/".$monthvalue."</th>";}

if($row['26']!='2'){echo "<th>26/".$monthvalue."</th>";}

if($row['27']!='2'){echo "<th>27/".$monthvalue."</th>";}

if($row['28']!='2'){echo "<th>28/".$monthvalue."</th>";}

if($row['29']!='2'){echo "<th>29/".$monthvalue."</th>";}

if($row['30']!='2'){echo "<th>30/".$monthvalue."</th>";}

if($row['31']!='2'){echo "<th>31/".$monthvalue."</th>";}

}
$owntime = 'AKash';
}
$query1 = "SELECT * FROM `".$table."`";
$result1 = mysql_query($query1, $con);
if (!$result1) {
die("ghujhjk:".mysql_error());
}
while ($row = mysql_fetch_array($result1)) {
  
   echo "<tr><td>".$row['rollno']."</td>";
   echo "<td>".$row['name']."</td>";
if($row['1']!='2'){
    if($row['1']=='1'){echo "<td>P</td>";}
    else{
    echo "<td>A</td>";}}
if($row['2']!='2'){
    if($row['2']=='1'){echo "<td>P</td>";}
    else{
    echo "<td>A</td>";}}
if($row['3']!='2'){
    if($row['3']=='1'){echo "<td>P</td>";}
    else{
    echo "<td>A</td>";}}
if($row['4']!='2'){
    if($row['4']=='1'){echo "<td>P</td>";}
    else{
    echo "<td>A</td>";}}
if($row['5']!='2'){
    if($row['5']=='1'){echo "<td>P</td>";}
    else{
    echo "<td>A</td>";}}
if($row['6']!='2'){
    if($row['6']=='1'){echo "<td>P</td>";}
    else{
    echo "<td>A</td>";}}
if($row['7']!='2'){
    if($row['7']=='1'){echo "<td>P</td>";}
    else{
    echo "<td>A</td>";}}
if($row['8']!='2'){
    if($row['8']=='1'){echo "<td>P</td>";}
    else{
    echo "<td>A</td>";}}
if($row['9']!='2'){
    if($row['9']=='1'){echo "<td>P</td>";}
    else{
    echo "<td>A</td>";}}
if($row['10']!='2'){
    if($row['10']=='1'){echo "<td>P</td>";}
    else{
    echo "<td>A</td>";}}
if($row['11']!='2'){
    if($row['11']=='1'){echo "<td>P</td>";}
    else{
    echo "<td>A</td>";}}
if($row['12']!='2'){
    if($row['12']=='1'){echo "<td>P</td>";}
    else{
    echo "<td>A</td>";}}
if($row['13']!='2'){
    if($row['13']=='1'){echo "<td>P</td>";}
    else{
    echo "<td>A</td>";}}
if($row['14']!='2'){
    if($row['14']=='1'){echo "<td>P</td>";}
    else{
    echo "<td>A</td>";}}
if($row['15']!='2'){
    if($row['15']=='1'){echo "<td>P</td>";}
    else{
    echo "<td>A</td>";}}
if($row['16']!='2'){
    if($row['16']=='1'){echo "<td>P</td>";}
    else{
    echo "<td>A</td>";}}
if($row['17']!='2'){
    if($row['17']=='1'){echo "<td>P</td>";}
    else{
    echo "<td>A</td>";}}
if($row['18']!='2'){
    if($row['18']=='1'){echo "<td>P</td>";}
    else{
    echo "<td>A</td>";}}
if($row['19']!='2'){
    if($row['19']=='1'){echo "<td>P</td>";}
    else{
    echo "<td>A</td>";}}
if($row['20']!='2'){
    if($row['20']=='1'){echo "<td>P</td>";}
    else{
    echo "<td>A</td>";}}
if($row['21']!='2'){
    if($row['21']=='1'){echo "<td>P</td>";}
    else{
    echo "<td>A</td>";}}
if($row['22']!='2'){
    if($row['22']=='1'){echo "<td>P</td>";}
    else{
    echo "<td>A</td>";}}
if($row['23']!='2'){
    if($row['23']=='1'){echo "<td>P</td>";}
    else{
    echo "<td>A</td>";}}
if($row['24']!='2'){
    if($row['24']=='1'){echo "<td>P</td>";}
    else{
    echo "<td>A</td>";}}
if($row['25']!='2'){
    if($row['25']=='1'){echo "<td>P</td>";}
    else{
    echo "<td>A</td>";}}
if($row['26']!='2'){
    if($row['26']=='1'){echo "<td>P</td>";}
    else{
    echo "<td>A</td>";}}
if($row['27']!='2'){
    if($row['27']=='1'){echo "<td>P</td>";}
    else{
    echo "<td>A</td>";}}
if($row['28']!='2'){
    if($row['28']=='1'){echo "<td>P</td>";}
    else{
    echo "<td>A</td>";}}
if($row['29']!='2'){
    if($row['29']=='1'){echo "<td>P</td>";}
    else{
    echo "<td>A</td>";}}
if($row['30']!='2'){
    if($row['30']=='1'){echo "<td>P</td>";}
    else{
    echo "<td>A</td>";}}
if($row['31']!='2'){
    if($row['31']=='1'){echo "<td>P</td>";}
    else{
    echo "<td>A</td>";}}
echo "</tr>";

}


echo '</table>';
?>


