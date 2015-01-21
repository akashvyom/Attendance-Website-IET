<?php
$username = @$_POST['username'];
$password = @$_POST['password'];
$success = "";
$name = "";
$classes = "";
$con = mysql_connect("localhost","root","tiger") or die(mysql_error());
if (!mysql_select_db("1117106_vistar", $con)) {
    die("Unable to select database:" . mysql_error());
}
$query = "SELECT * from `teacher` WHERE `t_id` =" . $username;

$result = mysql_query($query, $con);
if (!$result) {
    die("Error executing query:" . mysql_error());
}
while ($row = mysql_fetch_array($result)) {
    if ($row['t_id'] == $username && $row['t_password'] == $password) {
        $name = $row['t_name'];
        $classes = $row['t_av'];

        session_start();
        
        $_SESSION['tid'] = $username;
        $_SESSION['tclass'] = $classes;
        
        echo '<div class="hide" id="username">' . $username . '</div>';
        echo '<div class="hide" id="classes">' . $classes . '</div>';
    } else {
        $success = 0;
    }
}

?>
<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>
</head>
<body>
<link rel="stylesheet" type="text/css" href="css/layout.css" />
<script src="js/callersend.js"></script>
<?php include 'header.php'; ?>
<br /><br /><br />
<div class="nameofuser">
<?php echo "Welcome " . $name; ?>
</div>
<div class="mybutton"  id="takeattendance" onclick="loadclass('1')"><a class="taker" href="choosedateforattendance.php">Take Attendance</a></div>
<div class="mybutton" id="viewattendance" onclick="loadclass('2')">View Attendance</div>
<br /><br /><br /><br /><br /><br /><br />
<div class="afterva" id="afterva">

Please select a date: <input type="date" id="todaydate" />
<button type="button" onclick="loadattendance('1')" id="datesubmit">Ok</button>
<a id="printit" href="" target="_blank">Print</a>
<div class="showdata" id="showdata"></div>
</div>

</div>
</div>

<?php include 'footer.php'; ?>
</body>
</html>