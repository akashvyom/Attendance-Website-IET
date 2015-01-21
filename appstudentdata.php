<?php
$userid = @$_GET['uid'];
$college = @$_GET['college'];
$classes = @$_GET['class'];
$database = "college".$college;
$table = "student";
$database ="1117106_vistar";
$con = mysql_connect("fdb2.biz.nf","1117106_vistar","tiger");
if(!$con)
{
    die("Could not connect: " .mysql_error());
}

mysql_select_db($database,$con);
$query = "SELECT * FROM `".$table."` WHERE class ='".$classes."'";
$result = mysql_query($query,$con);
$rowcount = mysql_num_rows($result);
$inertia = 1;
if(!$result)
{
    die("Error fetching data".mysql_error());
}
echo '{"students":[';
while($row=mysql_fetch_array($result))
{
    echo '{"i":"'.$row['sid'].'","n":"'.$row['name'].'","r":"'.$row['rollno'].'","c":"'.$row['class'].'"}' ;
    if($inertia<$rowcount){echo ',';$inertia++;}
}
echo "]}";
    
?>