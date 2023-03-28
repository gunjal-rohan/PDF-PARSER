<?php
require('config.php');

  $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);


$sql="select * from 	email_addresses";
$res=mysqli_query($conn,$sql);
$html='<table><tr><td>Email</td></tr>';
while($row=mysqli_fetch_assoc($res)){
	$html.='<tr><td>'.$row['email'].'</td></tr>';
}
$html.='</table>';
header('Content-Type:application/xls');
header('Content-Disposition:attachment;filename=Email Report.xls');
echo $html;
?>
