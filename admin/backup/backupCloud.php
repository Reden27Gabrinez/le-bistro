<?php

include('../../connection/connect.php');
include_once('Mysqldump/Mysqldump.php');
include('smtp/PHPMailerAutoload.php');
$dump = new Ifsnop\Mysqldump\Mysqldump('mysql:host=sql110.epizy.com;dbname=epiz_32694579_lebistro', 'epiz_32694579', 'yciHafTyW6Y');
$f=date('d-m-Y');
$dump->start("sql_dump/$f.sql");


$mail=new PHPMailer(true);
$mail->isSMTP();
$mail->Host="smtp.gmail.com";
$mail->Port=587;
$mail->SMTPSecure="tls";
$mail->SMTPAuth=true;
$mail->Username="lebistroims@gmail.com";
$mail->Password="hauoboihdjgxcvix";
$mail->SetFrom("lebistroims@gmail.com");
$mail->addAddress('lebistroims@gmail.com');
$mail->IsHTML(true);
$mail->Subject="Le Bistro Backup ".$f;
$mail->Body="Backup";
$mail->AddAttachment("sql_dump/$f.sql");
$mail->SMTPOptions=array('ssl'=>array(
	'verify_peer'=>false,
	'verify_peer_name'=>false,
	'allow_self_signed'=>false
));
if($mail->send()){
	echo '<script type="text/javascript">';
	echo ' alert("Successfully Backup to your Email")';  //not showing an alert box.
	echo '</script>';


}else{
	echo "Error occur";
}
header('location:../dashboard.php');
?>