<?php 
require_once 'include/DbHandler.php';
$db = new DbHandler();
$count = $db->testPagination();
echo $count;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Test</title>
    </head>
    <body>
        <h1>Hello</h1>
    </body>
</html>
