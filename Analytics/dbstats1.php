<?php
$leave = 0;
$nleave = 0;
$count1 = 0;
$leave1 = 0;
$nleave1 = 0;
$count2 = 0;
$leave2 = 0;
$nleave2 = 0;
$count = 0;
$c = [];
$c['l'] = 0;
$c['nl'] = 0;
try {

    $mng = new MongoDB\Driver\Manager("mongodb+srv://root:root@cluster0-wlg43.mongodb.net/test?retryWrites=true&w=majority");
    $query = new MongoDB\Driver\Query([]); 
    $rows = $mng->executeQuery("school.Class_1", $query);
    
    foreach ($rows as $row) {
        $count++;
        if($row->TC_Issue_Date != null){
            $leave++;
        }
    }
    $nleave = $count - $leave;
    $c['l'] = $c['l'] + $leave;
    $c['nl'] = $c['nl'] + $nleave;

} catch (MongoDB\Driver\Exception\Exception $e) {

    $filename = basename(__FILE__);
    
    echo "The $filename script has experienced an error.\n"; 
    echo "It failed with the following exception:\n";
    
    echo "Exception:", $e->getMessage(), "\n";
    echo "In file:", $e->getFile(), "\n";
    echo "On line:", $e->getLine(), "\n";       
}
try {

    $mng = new MongoDB\Driver\Manager("mongodb+srv://root:root@cluster0-wlg43.mongodb.net/test?retryWrites=true&w=majority");
    $query = new MongoDB\Driver\Query([]); 
    $rows = $mng->executeQuery("school.Class_2", $query);
    
    foreach ($rows as $row) {
        $count1++;
        if($row->TC_Issue_Date != null){
            $leave1++;
        }
    }
    $nleave1 = $count1 - $leave1;
    $c['l'] = $c['l'] + $leave1;
    $c['nl'] = $c['nl'] + $nleave1;

} catch (MongoDB\Driver\Exception\Exception $e) {

    $filename = basename(__FILE__);
    
    echo "The $filename script has experienced an error.\n"; 
    echo "It failed with the following exception:\n";
    
    echo "Exception:", $e->getMessage(), "\n";
    echo "In file:", $e->getFile(), "\n";
    echo "On line:", $e->getLine(), "\n";       
}
try {

    $mng = new MongoDB\Driver\Manager("mongodb+srv://root:root@cluster0-wlg43.mongodb.net/test?retryWrites=true&w=majority");
    $query = new MongoDB\Driver\Query([]); 
    $rows = $mng->executeQuery("school.Class_3", $query);
    
    foreach ($rows as $row) {
        $count2++;
        if($row->TC_Issue_Date != null){
            $leave2++;
        }
    }
    $nleave = $count2 - $leave2;
    $c['l'] = $c['l'] + $leave2;
    $c['nl'] = $c['nl'] + $nleave2;

} catch (MongoDB\Driver\Exception\Exception $e) {

    $filename = basename(__FILE__);
    
    echo "The $filename script has experienced an error.\n"; 
    echo "It failed with the following exception:\n";
    
    echo "Exception:", $e->getMessage(), "\n";
    echo "In file:", $e->getFile(), "\n";
    echo "On line:", $e->getLine(), "\n";       
}
echo json_encode($c);
    
?>

