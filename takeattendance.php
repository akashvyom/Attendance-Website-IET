<html>
<head><link rel="stylesheet" type="text/css" href="css/takeattendance.css" />
<script src="js/takeattendance.js"></script>
<body>
<?php
$day = @$_GET['day'];
$month = @$_GET['month'];
$monthvalue = $month;
$username = @$_GET['username'];
$classes = @$_GET['classes'];
$subject = @$_GET['subject'];
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

$table = "student";
$con = mysql_connect("localhost","root","tiger");
if (!$con) {
die("Could not connect: " . mysql_error());
}
mysql_select_db("1117106_vistar", $con);
$query = "SELECT * FROM student";
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
echo '<td class="nameofstudent" onclick="changeattendance('."'".$row['sid']."'".')" id="'.$row['sid'].'">' . $row['name'] . "</td>";
echo '<td class="att" id="att'.$row['sid'].'">P';
}

echo "</td></tr>";


echo '</table>';
echo '<br /><br />';
echo '<button id="attsubmit" onclick="buildlink()">Generate Link</button>';
echo '<a class="hide" id="linksubmit"  href="appattendance.php?uid='.$_GET['username'].'&class='.$_GET['classes'].'&subject='.$_GET['subject'].'&day='.$_GET['day'].'&month='.$_GET['month'].'&att=">SubmitAttendance</a>';

?>
</body>
</head>
</html>

