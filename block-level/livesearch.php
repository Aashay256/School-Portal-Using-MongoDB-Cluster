<?php
try {

    $mng = new MongoDB\Driver\Manager("mongodb+srv://root:root@cluster0-wlg43.mongodb.net/test?retryWrites=true&w=majority");
    /*$filter = [
    "name": /.*m.*/
    //];
    $query = new MongoDB\Driver\Query([]); 
    $rows = $mng->executeQuery("school.student", $query);
    
    foreach ($rows as $row) {
            echo "<p>" . $row->Name . "</p>";
    }
    
} catch (MongoDB\Driver\Exception\Exception $e) {

    $filename = basename(__FILE__);
    
    echo "The $filename script has experienced an error.\n"; 
    echo "It failed with the following exception:\n";
    
    echo "Exception:", $e->getMessage(), "\n";
    echo "In file:", $e->getFile(), "\n";
    echo "On line:", $e->getLine(), "\n";       
}
?>