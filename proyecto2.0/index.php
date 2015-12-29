<?php
    
    session_start();
    session_destroy();  
    include 'lib/formularios.php';
    
?>

<!DOCTYPE html>
<html>
<head>
</head>
    <body>
        <?=formInicial()?>
</body>
</html>