<?php
$c1 = 0;
$c2 = 0;
$c3 = 0;
$c = [];
try {

    $mng = new MongoDB\Driver\Manager("mongodb+srv://root:root@cluster0-wlg43.mongodb.net/test?retryWrites=true&w=majority");
    $query = new MongoDB\Driver\Query([]); 
    $rows = $mng->executeQuery("school.Class_1", $query);
    $rows1 = $mng->executeQuery("school.Class_2", $query);
    $rows2 = $mng->executeQuery("school.Class_3", $query);
    
    foreach ($rows as $row) {
        $c1++;
        }
    foreach ($rows1 as $row) {
        $c2++;
        }
    foreach ($rows2 as $row) {
        $c3++;
        }
    $c['c1'] = $c1;
    $c['c2'] = $c2;
    $c['c3'] = $c3;

} catch (MongoDB\Driver\Exception\Exception $e) {

    $filename = basename(__FILE__);
    
    echo "The $filename script has experienced an error.\n"; 
    echo "It failed with the following exception:\n";
    
    echo "Exception:", $e->getMessage(), "\n";
    echo "In file:", $e->getFile(), "\n";
    echo "On line:", $e->getLine(), "\n";       
}
echo json_encode($c);

/*try {

    $mng = new MongoDB\Driver\Manager("mongodb+srv://root:root@cluster0-wlg43.mongodb.net/test?retryWrites=true&w=majority");
    $query = new MongoDB\Driver\Query([]); 
    $rows = $mng->executeQuery("block.school", $query);
    
    foreach ($rows as $row) {
        $count1++;
    }
    $c['count1'] = $count1;

} catch (MongoDB\Driver\Exception\Exception $e) {

    $filename = basename(__FILE__);
    
    echo "The $filename script has experienced an error.\n"; 
    echo "It failed with the following exception:\n";
    
    echo "Exception:", $e->getMessage(), "\n";
    echo "In file:", $e->getFile(), "\n";
    echo "On line:", $e->getLine(), "\n";       
}*/
    
?>

