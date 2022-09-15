<?php

    session_start();
    //$diaryContent="";

    if (array_key_exists("id", $_COOKIE) && $_COOKIE ['id']) {
        
        $_SESSION['id'] = $_COOKIE['id'];
        
    }

    if (array_key_exists("id", $_SESSION)) {
              
      include("connectioncc.php");
      
      $query = "SELECT loc FROM `users` WHERE id = ".mysqli_real_escape_string($link, $_SESSION['id'])." LIMIT 1";
      $row = mysqli_fetch_array(mysqli_query($link, $query));
 
      $diaryContent = $row['diary'];
      
    } else {
        
        header("Location: indexcc.php");
        
    }

	include("headercc.php");

?>
<nav class="navbar navbar-light bg-faded navbar-fixed-top">
  

  <a class="navbar-brand" href="#">Car Cool</a>

    <div class="pull-xs-right">
      <a href ='indexcc.php?logout=1'>
        <button class="btn btn-success-outline" type="submit">Logout</button></a>
    </div>

</nav>



    <div class="container-fluid" id="containerLoggedInPage">

        <textarea id="location" class="form-control"><?php echo $locationContent; ?></textarea>
    </div>
<?php
    
    include("footercc.php");
?>