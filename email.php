<?php
   if(isset($_POST['submit'])) {
    $to = $_POST['email'];
    $subject = $_POST['firstName'];
    $comments = $_POST['lastName'];
    $date = $_POST['date'];
    $count = $_POST['count'];


    if ( mail($to,$subject,$comments,$date,$count) ){
      header("Location: http://urban.esy.es/index.php");
    }else{
      echo "We could not send the mail";
    }
  }
?>
