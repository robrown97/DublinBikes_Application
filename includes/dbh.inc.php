<?php

//filename is a holdover from an awful folder system I started that caused more headeaches than it was worth.
$dbServername="localhost";  //accesses phpmyadmin
$dbUsername="x16741831";    //enters phpmyadmin username
$dbPassword="";             //enters phpmyadmin password
$dbName="login_system";     //acceses specific database

$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);