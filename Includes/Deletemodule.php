<?php



if (isset($_POST["id"])) {
        
    $del = $_POST['id'];    
    $query=mysqli_query($conn,"delete from tbllecture where id='$del'");
}



?>