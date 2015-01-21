
<?php
if(@$_GET['print']=='1'){echo '<html><body onload="print()"></body></html>';}
if(@$_GET['app']=='1'){}
$day = @$_GET['day'];
$month = @$_GET['month'];
$monthvalue = $month;
$username = @$_GET['username'];
$classes = @$_GET['classes'];
switch ($month) {
    case 01:
        $month = "jan";
        break;
    case 02:
        $month = "feb";
        break;
    case 03:
        $month = "mar";
        break;
    case 04:
        $month = "apr";
        break;
    case 05:
        $month = "may";
        break;
    case 06:
        $month = "jun";
        break;
    case 07:
        $month = "jul";
        break;
    case 08:
        $month = "aug";
        break;
    case 09:
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

$table = $username . "ar" . $classes . $month;
$con = mysql_connect("localhost","root","tiger");
if (!$con) {
die("Could not connect: " . mysql_error());
}
mysql_select_db("1117106_vistar", $con);
$query = "SELECT * FROM `".$table."`";
$result = mysql_query($query, $con);
echo "<table border='1'>
<tr>
<th>Roll No</th>
<th>Name</th>
<th>" . $day . "/".$monthvalue."/2013</th>
</tr>";

if (!$result) {
die("Error fetching data" . mysql_error());
}

while ($row = mysql_fetch_array($result)) {
echo "<tr>";
echo "<td>" . $row['rollno'] . "</td>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>";
if($day == '1'){
if ($row['1'] == 1) {
    echo "Present";
} else if($row['1'] == 0) {
    echo "Absent";
}
else if($row['1'] == 2) {
    echo "No class";
}
}
else if($day == '2'){
if ($row['2'] == 1) {
    echo "Present";
} else if($row['2'] == 0) {
    echo "Absent";
}
else if($row['2'] == 2) {
    echo "No class";
}
}
else if($day == '3'){
if ($row['3'] == 1) {
    echo "Present";
} else if($row['3'] == 0) {
    echo "Absent";
}
else if($row['3'] == 2) {
    echo "No class";
}
}
else if($day == '4'){
if ($row['4'] == 1) {
    echo "Present";
} else if($row['4'] == 0) {
    echo "Absent";
}
else if($row['4'] == 2) {
    echo "No class";
}
}
else if($day == '5'){
if ($row['5'] == 1) {
    echo "Present";
} else if($row['5'] == 0) {
    echo "Absent";
}
else if($row['5'] == 2) {
    echo "No class";
}
}
else if($day == '6'){
if ($row['6'] == 1) {
    echo "Present";
} else if($row['6'] == 0) {
    echo "Absent";
}
else if($row['6'] == 2) {
    echo "No class";
}
}
else if($day == '7'){
if ($row['7'] == 1) {
    echo "Present";
} else if($row['7'] == 0) {
    echo "Absent";
}
else if($row['7'] == 2) {
    echo "No class";
}
}
else if($day == '8'){
if ($row['8'] == 1) {
    echo "Present";
} else if($row['8'] == 0) {
    echo "Absent";
}
else if($row['8'] == 2) {
    echo "No class";
}
}
else if($day == '9'){
if ($row['9'] == 1) {
    echo "Present";
} else if($row['9'] == 0) {
    echo "Absent";
}
else if($row['9'] == 2) {
    echo "No class";
}
}
else if($day == '10'){
if ($row['10'] == 1) {
    echo "Present";
} else if($row['10'] == 0) {
    echo "Absent";
}
else if($row['10'] == 2) {
    echo "No class";
}
}
else if($day == '11'){
if ($row['11'] == 1) {
    echo "Present";
} else if($row['11'] == 0) {
    echo "Absent";
}
else if($row['11'] == 2) {
    echo "No class";
}
}
else if($day == '12'){
if ($row['12'] == 1) {
    echo "Present";
} else if($row['12'] == 0) {
    echo "Absent";
}
else if($row['12'] == 2) {
    echo "No class";
}
}
else if($day == '13'){
if ($row['13'] == 1) {
    echo "Present";
} else if($row['13'] == 0) {
    echo "Absent";
}
else if($row['13'] == 2) {
    echo "No class";
}
}
else if($day == '14'){
if ($row['14'] == 1) {
    echo "Present";
} else if($row['14'] == 0) {
    echo "Absent";
}
else if($row['14'] == 2) {
    echo "No class";
}
}
else if($day == '15'){
if ($row['15'] == 1) {
    echo "Present";
} else if($row['15'] == 0) {
    echo "Absent";
}
else if($row['15'] == 2) {
    echo "No class";
}
}
else if($day == '16'){
if ($row['16'] == 1) {
    echo "Present";
} else if($row['16'] == 0) {
    echo "Absent";
}
else if($row['16'] == 2) {
    echo "No class";
}
}
else if($day == '17'){
if ($row['17'] == 1) {
    echo "Present";
} else if($row['17'] == 0) {
    echo "Absent";
}
else if($row['17'] == 2) {
    echo "No class";
}
}
else if($day == '18'){
if ($row['18'] == 1) {
    echo "Present";
} else if($row['18'] == 0) {
    echo "Absent";
}
else if($row['18'] == 2) {
    echo "No class";
}
}
else if($day == '19'){
if ($row['19'] == 1) {
    echo "Present";
} else if($row['19'] == 0) {
    echo "Absent";
}
else if($row['19'] == 2) {
    echo "No class";
}
}
else if($day == '20'){
if ($row['20'] == 1) {
    echo "Present";
} else if($row['20'] == 0) {
    echo "Absent";
}
else if($row['20'] == 2) {
    echo "No class";
}
}
else if($day == '21'){
if ($row['21'] == 1) {
    echo "Present";
} else if($row['21'] == 0) {
    echo "Absent";
}
else if($row['21'] == 2) {
    echo "No class";
}
}
else if($day == '22'){
if ($row['22'] == 1) {
    echo "Present";
} else if($row['22'] == 0) {
    echo "Absent";
}
else if($row['22'] == 2) {
    echo "No class";
}
}
else if($day == '23'){
if ($row['23'] == 1) {
    echo "Present";
} else if($row['23'] == 0) {
    echo "Absent";
}
else if($row['23'] == 2) {
    echo "No class";
}
}
else if($day == '24'){
if ($row['24'] == 1) {
    echo "Present";
} else if($row['24'] == 0) {
    echo "Absent";
}
else if($row['24'] == 2) {
    echo "No class";
}
}
else if($day == '25'){
if ($row['25'] == 1) {
    echo "Present";
} else if($row['25'] == 0) {
    echo "Absent";
}
else if($row['25'] == 2) {
    echo "No class";
}
}
else if($day == '26'){
if ($row['26'] == 1) {
    echo "Present";
} else if($row['26'] == 0) {
    echo "Absent";
}
else if($row['26'] == 2) {
    echo "No class";
}
}
else if($day == '27'){
if ($row['27'] == 1) {
    echo "Present";
} else if($row['27'] == 0) {
    echo "Absent";
}
else if($row['27'] == 2) {
    echo "No class";
}
}
else if($day == '28'){
if ($row['28'] == 1) {
    echo "Present";
} else if($row['28'] == 0) {
    echo "Absent";
}
else if($row['28'] == 2) {
    echo "No class";
}
}
else if($day == '29'){
if ($row['29'] == 1) {
    echo "Present";
} else if($row['29'] == 0) {
    echo "Absent";
}
else if($row['29'] == 2) {
    echo "No class";
}
}
else if($day == '30'){
if ($row['30'] == 1) {
    echo "Present";
} else if($row['30'] == 0) {
    echo "Absent";
}
else if($row['30'] == 2) {
    echo "No class";
}
}
else if($day == '31'){
if ($row['31'] == 1) {
    echo "Present";
} else if($row['31'] == 0) {
    echo "Absent";
}
else if($row['31'] == 2) {
    echo "No class";
}
}


echo "</td></tr>";

}
echo '</table>';
?>


