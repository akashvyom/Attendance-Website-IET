<?php
$userid = @$_GET['uid'];
$password = @$_GET['pwd'];
$con = mysql_connect("fdb2.biz.nf","1117106_vistar","tiger");
if(!$con)
{
    die("Could not connect: " .mysql_error());
}
$database = "";
$database ="1117106_vistar";
mysql_select_db($database,$con);
$query = "SELECT * FROM teacher WHERE t_id = "."'".$userid."'";
$result = mysql_query($query,$con);
if(!$result)
{
    
    die();
}
while($row = mysql_fetch_array($result))
{
$classes = $row['t_av'];
$sclasses = $classes.@str_split();
$classes = "".$sclasses[0].$sclasses[1].$sclasses[2];
    if($password==$row['t_password'])
    {
        echo '{"teacher":[{"fail":"1","userid":'.'"'.$row['t_id'].'","name":'.'"'.$row['t_name'].'","av":"'.$row['t_av'].'"';
    }
    else
    {
        echo '{"teacher":[{"fail":"0"}]}';
    }
}
$updatecheck = "SELECT * FROM updates WHERE class ='".$classes."'";

$updateresult = mysql_query($updatecheck,$con);
while($row = mysql_fetch_array($updateresult))
{
    $updatevar = $row['update'];
    echo ',"'.$classes.'":"'.$updatevar.'"}]}';
	}

mysql_close($con);
?>