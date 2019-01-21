<?php
header('Content-Type: text/xml');
echo '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>';

echo '<response>';
    mysql_connect('localhost','root','');
    mysql_select_db('AntidoteDB');
    if(isset($_POST['sbmt'])){
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $phoneNumber = $_POST['phoneNumber'];
    $eMail = $_POST['eMail'];
    $delAddress = $_GET['delAddress'];
    
    $query = "INSERT INTO customer
             VALUES('$firstName', '$lastName' , '$phoneNumber' , '$eMail', '$delAddress')";
    
    mysql_query($query);
    echo 'Data Entered Successfully';
};
echo '<response>';
?>