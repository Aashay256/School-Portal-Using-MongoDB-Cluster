<?php

$rno = $_POST['rollnumber'];
$name = $_POST['sname'];
$attend = $_POST['attendence'];
$tc = $_POST['tc'];
$maths = $_POST['math'];
$sst = $_POST['sst'];
$science = $_POST['science'];

try {
     
    $mng = new MongoDB\Driver\Manager("mongodb+srv://root:root@cluster0-wlg43.mongodb.net/test?retryWrites=true&w=majority");
    
    $bulk = new MongoDB\Driver\BulkWrite;
    
    $bulk->update(['Name' => $name] , ['$set' => ['Attendance' => $attend, 'TC_Issue_Date' => $tc, 'FM_Maths' => $maths, 'FM_SST' => $sst, 'FM_Science' => $science]]);

    $filter = [
    'RollNo' => (int)$rno,
    'Name' => $name
    ];
    $query = new MongoDB\Driver\Query($filter); 
    $rows = $mng->executeQuery("school.Class_1", $query);
    $rows1 = $mng->executeQuery("school.Class_2", $query);
    $rows2 = $mng->executeQuery("school.Class_3", $query);
    
    foreach ($rows as $row) {
        if ($row != null)
            $class = '1';
        }
    foreach ($rows1 as $row) {
        if ($row != null)
            $class = '2';
        }
    foreach ($rows2 as $row) {
        if ($row != null)
            $class = '3';
        }

    $path = "school.Class_".$class.""; 
    
    $mng->executeBulkWrite($path, $bulk);
    print_r($class);
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