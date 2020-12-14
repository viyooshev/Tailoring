<?php
$name=$_POST['name'];
$address=$_POST['address'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$gender=$_POST['gender'];
$course=$_POST['course'];

$conn = new mysqli('localhost','root','','tailoring');
if($conn->connect_error){
    die('Conncetion Failed : '.$conn->connect_error);
}else{
$stmt = $conn->prepare("insert into register_student(name,address,email,phone,gender,course)values(?,?,?,?,?,?)");
$stmt->bind_param("sssiss",$name,$address,$email,$phone,$gender,$course);
$stmt->execute();
echo "Regsitration Successfully";
$stmt->close();
$conn->close();
}
?>