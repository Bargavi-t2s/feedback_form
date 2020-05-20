<?php
include('dbconnection.php');
include('managefeedback.php');

$ManageFeedback= new ManageFeedback();

session_start();
$prefix = $ticketnumber = $rating = $status = $reason = $comments = array();

    $prefix             = ($_POST['prefix']);
    $ticketnumber       = ($_POST['ticketnumber']);
    $rating             = ($_POST['rating']);
    $status             = ($_POST['status']);
    $reason             = ($_POST['reason']);
    $comments           = ($_POST['comments']);
 
$length = sizeof($ticketnumber); 

if ($db) 
{
    $success=0;
    
 for ($i=0; $i < $length ; $i++) 
 {   
    // $form_fields= array(
    //                         'ticket_number' => $ticketnumber,
    //                         'prefix' => $prefix,
    //                         'star_rating' => $rating,
    //                         'status' => $status,
    //                         'reason' => $reason,
    //                         'comments' => $comments);
                $form_fields= array(
                            'ticket_number' => $ticketnumber[$i],
                            'prefix' => $prefix[$i],
                            'star_rating' => $rating[$i],
                            'status' => $status[$i],
                            'reason' => $reason[$i],
                            'comments' => $comments[$i]);
                if($ManageFeedback->insert($form_fields))
                {
                    $success = 1;
                }

    }
if($success === 1){
    echo json_encode([
       'code' => 200,
    'message'=> 'You have successfully submitted your end of the day report'
         ]);
}
}
else 
{
    echo json_encode([
       'code' => 404,
    'message'=> 'Database connection failure'
]);
    
}
//     $prefix             = ($_POST['prefix']);
//     $ticketnumber       = ($_POST['ticketnumber']);
//     $rating             = ($_POST['rating']);
//     $status             = ($_POST['status']);
//     $reason             = ($_POST['reason']);
//     $comments           = ($_POST['comments']);
//     if($db){
//         $form_fields= array(
//                             'ticket_number' => $ticketnumber,
//                             'prefix' => $prefix,
//                             'star_rating' => $rating,
//                             'status' => $status,
//                             'reason' => $reason,
//                             'comments' => $comments);
//     if($ManageFeedback->insert($form_fields))
//     {   
//         echo json_encode(['code'=>200,'message'=>'data inserted.']);  
//     }
// }
// else{
//     echo "disconnected";
// }
?>






