<?php
mysql_connect('localhost','root','');
mysql_select_db('AntidoteDB');

if(isset($_POST['submit'])) {
     $firstName = $_POST['fName'];
     $lastName = $_POST['lName'];
     $phoneNumber = $_POST['mNum'];
     $eMail = $_POST['eMail'];
     $delAddress  = $_POST['dAddress'];
     $id = $_POST['id'];

     $query = "UPDATE customer 
                SET firstName= '$firstName', lastName='$lastName', phoneNumber ='$phoneNumber', eMail=            '$eMail', delAddress ='$delAddress' WHERE id = $id";
     mysql_query($query);
     header("Location:http://localhost/Antidote-Dash/successul2.html");
};

    


?>