<?php
$con = mysqli_connect("localhost:3306","root","","Goldenlions");

     $fname=$_POST['Fname'];
     $lname=$_POST['Lname'];
     $country=$_POST['country'];
     $phone=$_POST['phone'];
     $email=$_POST['email']; 
     
if(!$con){
     die('Could not connect');
 }else{

     $sql = "INSERT INTO booking_details(f_name ,l_name , country, phone, email)
     VALUES ('$fname', '$lname', '$country', '$phone', '$email')";
}
 if(!mysqli_query($con, $sql)){
    die('Error 1');
}else{
    echo "
    <script>
        alert('Reservation Successful.....');
        window.location.href='rooms.html';
    </script>";
}
 mysqli_close($con);
?>