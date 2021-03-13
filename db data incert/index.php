<?php


$connection = new mysqli('localhost','root','','structure');


$sql = "INSERT INTO info (name, age, cell) VALUES ('Traeq','28','01302535753')";


$connection -> query($sql);



?>