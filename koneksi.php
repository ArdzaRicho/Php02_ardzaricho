<?php
  $conn = mysqli_connect("localhost", "root", "", "php02_ardzaricho");
  if($conn){
    echo "Database connected";
  }else{
    echo "Error";
  }


?>