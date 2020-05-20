<?php
include('dbconnection.php');
include('managefeedback.php');

$ManageFeedback= new ManageFeedback();

$ticketnumber = ($_POST['ticketnumber']);
$prefix       = ($_POST['prefix']);

if($db){
    $answer = $ManageFeedback->checkTicket($ticketnumber,$prefix);
    if(!$answer)
    {	
    	echo json_encode(['code'=>400,'message'=>'The specified ticket number is not available.']);  
    }
}
else{
	echo "disconnected";
}
?>
