<?php
$userid = @$_GET['uid'];
$classes = @$_GET['class'];
$subject = @$_GET['subject'];
$attendance = @$_GET['att'];
$day = @$_GET['day'];
$month = @$_GET['month'];
//transforming month
switch($month)
{
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
$database = "school";
$table = $userid."ar".$subject.$month;
$attendancereturn = "";
$numberofstudents = strlen($attendance);
$attendancebyrno = str_split($attendance);
$rollno = $classes."000";
$database ="1117106_vistar";
$con = mysql_connect("fdb2.biz.nf","1117106_vistar","tiger");
if(!$con)
{
    die("Could not connect: " .mysql_error());
}
mysql_select_db($database,$con);
echo '{"attendance":[{"userid":"'.$userid.'","date":"'.$day.'","attendance":"';
for($i = 0;$i<$numberofstudents;$i++)
{
    $rollno = $rollno+1;
	
    $attendanceofstudent = $attendancebyrno[$i];
    $query = "UPDATE `".$table."` SET `".$day."`= ".$attendanceofstudent." WHERE `sid` = ".$rollno;
    if(!mysql_query($query,$con))
    {
        die("Could not write data: ".mysql_error());
    }
    $query1 = "SELECT `".$day."` FROM `".$table."` WHERE `sid`='".$rollno."'";
    $result = mysql_query($query1,$con);
    while($row = mysql_fetch_array($result))
    {
        $dayrow = "'".$day."'";
        if($day ==1){echo $row['1'];}
        else if($day ==2){echo $row['2'];}
        else if($day ==3){echo $row['3'];}
        else if($day ==4){echo $row['4'];}
        else if($day ==5){echo $row['5'];}
        else if($day ==6){echo $row['6'];}
        else if($day ==7){echo $row['7'];}
        else if($day ==8){echo $row['8'];}
        else if($day ==9){echo $row['9'];}
        else if($day ==10){echo $row['10'];}
        else if($day ==11){echo $row['11'];}
        else if($day ==12){echo $row['12'];}
        else if($day ==13){echo $row['13'];}
        else if($day ==14){echo $row['14'];}
        else if($day ==15){echo $row['15'];}
        else if($day ==16){echo $row['16'];}
        else if($day ==17){echo $row['17'];}
        else if($day ==18){echo $row['18'];}
        else if($day ==19){echo $row['19'];}
        else if($day ==20){echo $row['20'];}
        else if($day ==21){echo $row['21'];}
        else if($day ==22){echo $row['22'];}
        else if($day ==23){echo $row['23'];}
        else if($day ==24){echo $row['24'];}
        else if($day ==25){echo $row['25'];}
        else if($day ==26){echo $row['26'];}
        else if($day ==27){echo $row['27'];}
        else if($day ==28){echo $row['28'];}
        else if($day ==29){echo $row['29'];}
        else if($day ==30){echo $row['30'];}
        else if($day ==31){echo $row['31'];}
        
        

        
    }    
}
mysql_close($con);
echo '"}]}';
?>