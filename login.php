<?php
// I watched this video link to help https://www.youtube.com/watch?v=0BoZc5oUioA
    $con = mysqli_connect("localhost", "root", "albertroad", "fypdatabase");
    
    if (!$con)
    {
        echo 'Not connected to Server';
    }
    
    if (!mysqli_select_db($con, 'fypdatabse'))
    {
        echo 'Database not selected';
    }
?>
