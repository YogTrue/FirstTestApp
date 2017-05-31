<?php
    
$connection = new mysqli("localhost","root","8745",'my_bd');
$query = "select * from my_table";
$result = $connection->query($query) or die("Ошибка " . mysqli_error($connection));

while($row = mysqli_fetch_array($result))
{
    echo $row[]."<br>\n";
}
