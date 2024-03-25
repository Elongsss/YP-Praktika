<?php
if (isset($_POST["nickname"])&& isset($_POST["group"])){
   $conn = new mysqli("localhost", "root", "","ss1");
   if($conn->connect_error){
      die("Error");
   }


$privilege = $conn->real_escape_string($_POST["group"]);;

$nickname = $conn->real_escape_string($_POST["nickname"]);;

$sql="INSERT INTO data(nickname, id) VALUES ('$nickname', '1')";
if($conn->query($sql)){
   echo "Данные успешно добавлены";
} else{
   echo"Ошибка". $conn ->error;
}
$conn->close();
}
?>