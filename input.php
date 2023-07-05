<?php
$First_Name = $_GET['First_Name'];
$Last_Name =$_GET['Last_Name'];
// if(isset($_GET['Middle_Name'])!=""){
//     $Middle
// }
$conn = new mysqli("localhost","192.168.173.68","","Pravesh_Database");
$sql = "INSERT INTO User_Information VALUES ('$First_Name','$Last_Name')";
$result = mysqli_query($conn,$sql);
if($result){
echo "Inserted Successfully";
}
else{
    echo "Not Inserted";
}
?>