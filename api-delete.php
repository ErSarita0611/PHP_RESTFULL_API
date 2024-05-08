<?php

header('Content_Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access_Control_Allow_Method: DELETE');
header('Access_Control_Allow_Headers: Access_Control_Allow_Headers,Content_Type,Access_Control_Allow_Methods,Authorization,X-Requested-Width');



$data = json_decode(file_get_contents("php://input"), true);
$student_id = $data['sid'];

include "config.php";

$sql = "DELETE FROM student WHERE id = {$student_id}";

if (mysqli_query($conn, $sql)) {

    echo json_encode(array('massage' => 'Recode Deleted.', 'status' => true));
     
}else{
    echo json_encode(array('massage' => 'No Recode Found.', 'status' => false));

}

?>