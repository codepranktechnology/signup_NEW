<?php
  $json 				= file_get_contents('php://input');
  $obj 				= json_decode($json);
        $conn = mysqli_connect("localhost", "root", "", "something_new");
          
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
          
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO `enquiry`(`email`) VALUES ('$obj->emailName')";
          
        if(mysqli_query($conn, $sql)){
            echo "We will get back to you"; 
        } else{
            echo "ERROR: Hush! Sorry";
        }
          
        // Close connection
        mysqli_close($conn);
        ?>