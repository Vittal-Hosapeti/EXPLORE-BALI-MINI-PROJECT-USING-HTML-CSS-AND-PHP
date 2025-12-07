<?php
$yourName= $_POST['yourName'];
$yournum= $_POST['yournum'];
$email= $_POST['email'];
$requestt= $_POST['requestt'];

$conn = new mysqli('localhost','root','','test');
if($conn->connect_error){
    die('connection failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into pending1(NAME,PHONE,EMAIL,REQUEST) values(?,?,?,?)");
    $stmt->bind_param("siss",$yourName,$yournum,$email,$requestt);
    $stmt->execute();
    echo "REQUEST SUBMITTED SUCCESSFULLY ! WE WILL CONTACT YOU BACK VERY SOON .<br> THANK YOU FOR YOUR GREAT TIME ";
    $stmt->close();
    $conn->close();
}
?>