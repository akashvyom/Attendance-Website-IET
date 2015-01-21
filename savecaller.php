<?php
$name = @$_GET['name'];
$contact = @$_GET['number'];
$con = mysql_connect("fdb2.biz.nf","1117106_vistar","tiger");
mysql_select_db("vistar", $con);
$query = "INSERT INTO `1117106_vistar`.`callthem` (`name`, `number`) VALUES ('" . $name .
    "', '" . $contact . "')";
if (!mysql_query($query, $con)) {
    echo "Try later " . $name;
} else {
    echo "We will contact you soon " . $name;
}
?>