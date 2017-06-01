<?php
    
$connection = new mysqli("localhost","root","8745",'my_bd');
$query = "select * from my_table";
$result = $connection->query($query) or die("Ошибка " . mysqli_error($connection));
$color = "red";

while($row = mysqli_fetch_array($result))
{
    echo "<div><font color=$color>"." | ".$row['id']." | ".$row['text']." | ".$row['discription']." | ".$row['data']."</font></div>";
}
