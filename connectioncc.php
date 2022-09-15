<?php

    $link = mysqli_connect("localhost", "root", "", "car_cool");
        
        if (mysqli_connect_error()) {
            
            die ("Database Connection Error");
            
        }

?>
