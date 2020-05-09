<?php
$maths = 0;
$sst = 0;
$science = 0;
$c = [];
try {

    $mng = new MongoDB\Driver\Manager("mongodb+srv://root:root@cluster0-wlg43.mongodb.net/test?retryWrites=true&w=majority");
    $query = new MongoDB\Driver\Query([]); 
    $rows = $mng->executeQuery("school.Teacher", $query);
    foreach ($rows as $row) {
        if ($row->Subject == 'Maths') {
                $maths++;
            } 
        if ($row->Subject == 'SST') {
                $sst++;
            }
        if ($row->Subject == 'Science') {
                $science++;
            }   
    }
    $c['maths'] = $maths;
    $c['sst'] = $sst;
    $c['science'] = $science;

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

