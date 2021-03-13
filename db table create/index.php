<?php

$connection = new mysqli('localhost','root','','structure');



$sql ="CREATE TABLE info(

id int AUTO_INCREMENT,
name varchar(100),
age int(4),
cell varchar(15),
PRIMARY KEY (id)



)";

$connection -> query($sql);

?>