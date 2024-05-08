<?php

header('Content_Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access_Control_Allow_Method: POST');
header('Access_Control_Allow_Headers: Access_Control_Allow_Headers,Content_Type,Access_Control_Allow_Methods,Authorization,X-Requested-Width');


$data = json_decode(file_get_contents("php://input"), true);

$sname = $data['sname'];
$age = $data['age'];
$city = $data['city'];

include "config.php";

$sql = "INSERT INTO student(student_name, age, city) VALUE ('{$sname}','{$age}','{$city}')";

if (mysqli_query($conn, $sql)){

    echo json_encode(array('massage' => 'Student Recode Inserted.', 'status' => true));
    
}else{
    echo json_encode(array('massage' => 'Student Recode Not Inserted.', 'status' => false));

}


?>