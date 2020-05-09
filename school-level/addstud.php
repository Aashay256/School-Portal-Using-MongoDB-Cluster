<?php

$rno = $_POST['rollnumber'];
$name = $_POST['name'];
$fathername = $_POST['fathername'];
$mothername = $_POST['mothername'];
$mobilenumber = $_POST['mobilenumber'];
$gender = $_POST['gender'];
$DOB = $_POST['DOB'];
$admission = $_POST['admission'];
$class = $_POST['class'];
$path = "school.Class_".$class."";

try {
     
    $mng = new MongoDB\Driver\Manager("mongodb+srv://root:root@cluster0-wlg43.mongodb.net/test?retryWrites=true&w=majority");
    
    $bulk = new MongoDB\Driver\BulkWrite;
    
    $doc = ['_id' => new MongoDB\BSON\ObjectID, 'Roll_No' => $rno, 'Name' => $name, 'Fathers_Name' => $fathername, 'Mothers_Name' => $mothername, 'Contact_No' => $mobilenumber, 'Gender' => $gender, 'DOB' => $DOB, 'Admission_Date' => $admission];
    $bulk->insert($doc);
    
    $mng->executeBulkWrite($path, $bulk);
    header("location:admin.php");
        
} catch (MongoDB\Driver\Exception\Exception $e) {

    $filename = basename(__FILE__);
    
    echo "The $filename script has experienced an error.\n"; 
    echo "It failed with the following exception:\n";
    
    echo "Exception:", $e->getMessage(), "\n";
    echo "In file:", $e->getFile(), "\n";
    echo "On line:", $e->getLine(), "\n";    
}

?>