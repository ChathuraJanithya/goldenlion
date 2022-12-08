
<?php
  $username = $_POST['username'];
  $password = $_POST['password'];
  
  //Database connection 
  $con = new mysqli("localhost","root","","Goldenlions");

    if($con->connect_error){
        die("Failed to connect : ".$con->connect_error);
    }
    

    else{
        $stmt = $con->prepare("select * from Registration_details where username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        
        if($stmt_result->num_rows > 0){
              $data = $stmt_result->fetch_assoc();
              if($data['password'] === $password){
                echo ("<script>
   			 window.alert('Login successful....');
    		window.location.href='profile.html';
   			 </script>");
                 }
        }
        
    else {
        echo ("<script LANGUAGE='JavaScript'>
                window.alert('Password or username invalid....');
                window.location.href='login.html';
        </script>");
        }
    }
?>