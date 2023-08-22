<?php
$servername = "localhost";
$username = "root";
$password = "";
$database= "student_record";
$conn = mysqli_connect($servername,$username,$password,$database);
$name = $_POST["name"];
echo $name;
$regno = $_POST["regno"];
echo $regno;
$dept = $_POST["dept"];
echo $dept;
$dob = $_POST["dob"];
echo $dob;
$address = $_POST["address"];
echo $address;
$mobno = $_POST["mobno"];
echo $mobno;
$sql = "insert into student 
values ('$name','$regno','$dept','$dob','$address','$mobno')";
mysqli_query($conn,$sql);
echo "inserted successfully";
?>
