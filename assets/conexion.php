<?php

/**
 * modal en PHP y MySQL
 
 * 
 */
 $servername = "mysql.hostinger.com.";
 $database = "id21090567_energyandpower";
 $dataname = "root"
 $username = "";
 $password = "";
 // Create connection
 $conn = mysqli_connect($servername, $username, $password, $database);
 // Check connection
 if (!$conn) {
       die("Connection failed: " . mysqli_connect_error());
 } 
 echo "Connected successfully";

 $Nombre=$_POST['Nombre'];
 $Apellido=$_POST['Apellido'];
 $Celular=$_POST['Celular'];
 $Ciudad=$_POST['Ciudad'];
 $Direccion=$_POST['Direccion'];

 $sql = "INSERT INTO id21090567_energyandpower (Nombre, Apellido,Celular,Ciudad) VALUES ('$Nombre','$Apellido','$Celular','$Ciudad','$Direccion')";
 if (mysqli_query($conn, $sql)) {
       echo "New record created successfully";
 } else {
       echo "Error: " . $sql . "<br>" . mysqli_error($conn);
 }
 mysqli_close($conn);
 ?>
