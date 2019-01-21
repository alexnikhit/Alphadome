<?php
mysql_connect('localhost','root','');
mysql_select_db('AntidoteDB');

$id = $_GET['id']; // $id is now defined

$query = "SELECT * FROM customer WHERE id = '".$id."'";
$result = mysql_query($query);
?>

<html>
    <head>
        <style>
            @import url('https://fonts.googleapis.com/css?family=Chakra+Petch:700|Roboto:700');
            @import url('https://fonts.googleapis.com/css?family=Roboto');
            
            body {
                text-align: center;
            }
            
            input {
                width: 300px;
            }
            
            #updt {
                top: 200px;
                border-radius: 15px;
                background-color: lightgray;
                position: relative;
                display: inline-block;
                width: 500px;
                padding: 20px;
                padding-bottom: 60px;
            }
            
            table {
                position: relative;
                display: inline-block;
                font-family: 'Roboto', sans-serif;
            }
            
            #btn {
                position: relative;
                top:180px;
            }
            
            .hm {
                border: none;
                background-color: transparent;
            }
            
            input {
                font-size: 14px;
                border-radius: 5px;
                border: none;
                height: 25px;
            }
        </style>
    </head>
    <body>
        <div id="tool">
            <button type="button" class="hm" onclick="onclick=location.href='http://localhost/Antidote-Dash/Index.html'">
            <img src="home.png">
            </button>
            <button type="button" class="hm" onclick="onclick=location.href='http://localhost/Antidote-Dash/search.html'">
            <img src="left-arrow.png">
            </button>
        </div>
        <div id="updt">
            <table>
            <form id="myform" method="post" action="update.php">
                
                <tr>
                    <td>
                        First Name
                    </td>
                    <td>
                        <input type="text" name="fName" value="<?php while($row = mysql_fetch_array($result)) {
                        echo $row['firstName'];?>"readonly>
                    </td>
                </tr>
                <tr>
                    <td>
                        Last Name
                    </td>
                    <td> 
                        <input type="text" name="lName" value="<?php echo $row['lastName'];?>"readonly>
                    </td>
                </tr>
                <tr>
                    <td>
                        Mobile Number
                    </td>
                    <td> 
                        <input type="text" name="mNum" value="<?php echo $row['phoneNumber'];?>"readonly>
                    </td>
                </tr>
                <tr>
                    <td>
                        Email ID
                    </td>
                    <td> 
                        <input type="text" name="eMail" value="<?php echo $row['eMail'];?>" readonly>
                    </td>
                </tr>
                <tr>
                    <td>
                        Delivery Address &nbsp;&nbsp;&nbsp;
                    </td>
                    <td> 
                        <input type="text" name="dAddress" value="<?php echo $row['delAddress'];?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        Customer ID
                    </td>
                    <td> 
                        <input type="text" name="id" value="<?php echo $row['id'];}?>" readonly>
                    </td>
                </tr>
               
                    </form>
                </table>
            </div>
    </body>
</html>