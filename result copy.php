<?php
mysql_connect('localhost','root','');
mysql_select_db('AntidoteDB');

if(isset($_POST['submit'])) {
    $firstName = $_POST['fname'];
    $query = "SELECT * FROM customer WHERE firstName LIKE '%$firstName%' OR lastName LIKE '%$firstName%' OR phoneNumber LIKE '%$firstName%' OR eMail LIKE '%$firstName%' OR delAddress LIKE '%$firstName%' ";
    $result = mysql_query($query);
}

echo "<div>
<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Phone Number</th>
<th>Email</th>
<th>Del Address</th>
<th>Delete</th>
</tr>";

while($row = mysql_fetch_array($result))
{

    echo "<tr>"."<td>".$row['firstName']."</td>";
    echo "<td>".$row['lastName']."</td>";
    echo "<td>".$row['phoneNumber']."</td>";
    echo "<td contenteditable>".$row['eMail']."</td>";
    echo "<td>".$row['delAddress']."</td>";
    echo "<td><a href=\"delete.php?id=".$row['id']."\">DELETE</a>&nbsp <a href=\"edit.php?id=".$row['id']."\">EDIT</a></td>"."</tr>";
};
echo "</table>
</div>"
?>

<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script type="text/javascript" src="dist/jquery.tabledit.js"></script>
        <script type="text/javascript" src="custom_table_edit.js"></script>
        <script>
            $(document).ready(function()
                              {
                $("tr:odd").css({
                    "background-color":"#F5D547",
                    "border": "0px",
                    "border-collapse":"collapse",
                    "width": "280px",
                    "height": "50px",
                    "text-align":"center"
                });
                    
            });
        </script>
        <style>
            @import url('https://fonts.googleapis.com/css?family=Chakra+Petch:700|Roboto:700');
            @import url('https://fonts.googleapis.com/css?family=Roboto');


            table {
                position: relative;
                top: 50px;
                border-collapse:collapse;
                border: 0px;
                
            }
            
            td {
                font-family: 'Roboto', sans-serif;
                width: 280px;
                height: 50px;
                border-left: 2px solid black;
                border-right: 2px solid black;
            }
            
            tr:nth-child(odd) {
                position: relative;
                background-color: #292F36;
                color: lightgray;
                border: 0px;
                border-collapse: collapse;
                width: 280px;
                height: 50px;
                text-align: center;
            }
            th {
                
                font-family: 'Roboto', sans-serif;
                font-weight: 400;
                background-color: #3F3047;
                position: relative;
                border: 4px solid black;
                border-collapse: collapse;
                width: 280px;
                height: 50px;
                text-align: center; 
                color: #E7ECEF;
                
            }
            
            #buttn {
                text-align: center;
                position: absolute;
                top: 620px;
                left: 400px;
                padding: 0;
                height: 100px;
               
            }
            
            .hm {
                position: relative;
                width: 150px;
                height: 30px; 
                border-radius: 5px;
                
            }
            
            #hm1 {
                position: relative;
                vertical-align: bottom;
            }
            
            a {
                color: azure;
                text-decoration: none;
                font-weight: bolder;
            }
            
        </style>
    </head>

    <body>
        <div id="buttn">
        <button  type="button" class="hm" id="hm1" onclick="onclick=location.href='http://localhost/Antidote-Dash/Index.html'">
            Go Home
        </button>
            
        <button  type="button" class="hm" onclick="onclick=location.href='http://localhost/Antidote-Dash/search.html'">
            Search Another Customer
        </button>
        
        <button  type="button" class="hm" id="hm1" onclick="onclick=location.href='http://localhost/Antidote-Dash/Dash.html'">
            Add a Customer
        </button>
        </div>
        
    </body>
</html>