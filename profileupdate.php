<?php
$username = $_post['username'];
$password = $_post['password'];
$gender = $_post['gender'];
$email = $_post['email'];
$phonecode = $_post['phonecode'];
$phone = $_post['phone'];



if(!empty($username) || !empty($password ) || !empty($gender) || !empty($email) || !empty($phonecode ) ||!empty($phone)  ) 
  {
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword ="";
    $dbname ="Goldenlions";
 
    //create a connection
    $conn = new mysqli( $host, $dbUsername,$dbPassword, $dbname);
    if(mysqli_connect_error()){
        die('connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else{
     $SELECT ="SELECT email From Registration_details Where email = ? limit 1";
     $INSERT ="INSERT Into Registration_details ( username , password,gender , email , phoneCode,phone) value(?,?,?,?,?,?)";
 
     //prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $rnum= $stmt->num_rows;
 
     if($rnum==0){
         $stmt->close();
 
         $stmt= $conn->prepare($INSERT);
         $stmt->bind_param("ssssii", $username, $password, $gender, $email, $phonecode, $phone);
         $stmt->execute();
         echo "New record inserted sucessfuly";
 
     } else{
         echo "Some one already register using this email";
     }
     $stmt->close();
     $conn->close();
     
     }
  }

else{
    echo "All feild are required";
    die();
}

?>