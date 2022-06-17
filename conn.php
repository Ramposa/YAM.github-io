<?php      
        $servername = "localhost";  
        $username = "";  
        $password = '';  
        $dbname = "danieltang_YAMDB";  
          
        $con = mysqli_connect($servername, $username, $password, $dbname);  
        if(mysqli_connect_errno()) {  
            die("Failed to connect with MySQL: ". mysqli_connect_error());  
        }  
    ?>  
