<?php
mysql_connect('localhost','root','');
mysql_select_db('AntidoteDB');

if(isset($_POST['submit'])) {
     $firstName = $_POST['fName'];
     $lastName = $_POST['lName'];
     $phoneNumber = $_POST['mNum'];
     $eMail = $_POST['eMail'];
     $delAddress  = $_POST['dAddress'];
     $area51 = $_POST['area51'];

     $query = "INSERT INTO customer (firstName, lastName, phoneNumber, eMail, delAddress, area)
               VALUES('$firstName', '$lastName' , '$phoneNumber' , '$eMail', '$delAddress', '$area51')";
     mysql_query($query);
     header("Location:http://localhost/Antidote-Dash/successul.html");
};

    


?>