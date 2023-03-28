<?php
require('config.php');

  $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);


$sql="select * from phone_numbers";
$res=mysqli_query($conn,$sql);
$html='<table><tr><td>Phone Number</td></tr>';
while($row=mysqli_fetch_assoc($res)){
	$html.='<tr><td>'.$row['number'].'</td></tr>';
}
$html.='</table>';
header('Content-Type:application/xls');
header('Content-Disposition:attachment;filename=Phone Number Report.xls');
echo $html;
?>
