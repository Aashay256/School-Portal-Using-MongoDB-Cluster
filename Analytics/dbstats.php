<?php
$count = 0;
$c = [];
$cm = 0;
$cf = 0;
try {

    $mng = new MongoDB\Driver\Manager("mongodb+srv://root:root@cluster0-wlg43.mongodb.net/test?retryWrites=true&w=majority");
    $query = new MongoDB\Driver\Query([]); 
    $rows = $mng->executeQuery("school.Class_1", $query);
    
    foreach ($rows as $row) {
        $count++;
        if($row->Gender == 'Male'){
            $cm++;
        }
    }
    $cf = $count - $cm;
    $c['c1m'] = $cm;
    $c['c1f'] = $cf;

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

