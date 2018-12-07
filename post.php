<?php
mysql_connect('localhost','root','');
mysql_select_db('AntidoteDB');

if(isset($_POST['submit'])) {
     $firstName = $_POST['fName'];
     $lastName = $_POST['lName'];
     $phoneNumber = $_POST['mNum'];
     $eMail = $_POST['eMail'];
     $delAddress  = $_POST['dAddress'];

     $query = "INSERT INTO customer (firstName, lastName, phoneNumber, eMail, delAddress)
               VALUES('$firstName', '$lastName' , '$phoneNumber' , '$eMail', '$delAddress')";
     mysql_query($query);
     header("Location:http://localhost/Antidote-Dash/successul.html");
};

    


?>
