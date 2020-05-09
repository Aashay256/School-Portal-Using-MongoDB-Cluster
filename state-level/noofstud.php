<?php

$count = 0;

$schoolid = $_POST['schoolid'];
try {

    $mng = new MongoDB\Driver\Manager("mongodb+srv://root:root@cluster0-wlg43.mongodb.net/test?retryWrites=true&w=majority");
    $query = new MongoDB\Driver\Query([]); 
    $rows = $mng->executeQuery("school.Class_1", $query);
    $rows1 = $mng->executeQuery("school.Class_2", $query);
    $rows2 = $mng->executeQuery("school.Class_3", $query);
    
    foreach ($rows as $row) {
        if($row->School_Id == $schoolid){
            $count++;
        }
    }
    foreach ($rows1 as $row) {
        if($row->School_Id == $schoolid){
            $count++;
        }
    }
    foreach ($rows2 as $row) {
        if($row->School_Id == $schoolid){
            $count++;
        }
    }

} catch (MongoDB\Driver\Exception\Exception $e) {

    $filename = basename(__FILE__);
    
    echo "The $filename script has experienced an error.\n"; 
    echo "It failed with the following exception:\n";
    
    echo "Exception:", $e->getMessage(), "\n";
    echo "In file:", $e->getFile(), "\n";
    echo "On line:", $e->getLine(), "\n";       
}
header("location:studschool.html"); 
?>

