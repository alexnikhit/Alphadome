<?php
mysql_connect('localhost','root','');
mysql_select_db('AntidoteDB');

if(isset($_POST['submit'])) {
    $firstName = $_POST['fname'];
    $query = "SELECT * FROM customer WHERE firstName LIKE '%$firstName%' OR lastName LIKE '%$firstName%' OR phoneNumber LIKE '%$firstName%' OR eMail LIKE '%$firstName%' OR delAddress LIKE '%$firstName%' ";
    $quer = mysql_query("SELECT count(*) as total FROM customer");
    $count = mysql_fetch_assoc($quer);
    $result = mysql_query($query);
}




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
                top: 0px;
                border-collapse:collapse;
                border: 0px;
                table-layout: fixed;
                overflow: scroll;
                border: 4px solid black;
                
            }
            
            td {
                font-family: 'Roboto', sans-serif;
                width: 280px;
                height: 50px;
                
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
                border-collapse: collapse;
                width: 280px;
                height: 50px;
                text-align: center; 
                color: #E7ECEF;
                
            }
            
            #buttn {
                text-align: center;
                position: absolute;
                top: 640px;
                left: 400px;
                padding: 0;
                height: auto;
               
            }
            
            .hm {
                font-size: 14px;
                font-stretch: ultra-condensed;
                font-weight:normal;
                background: linear-gradient(to right, rgba(73,155,234,1) 0%, rgba(32,227,195,1) 51%, rgba(34,227,134,1) 99%, rgba(34,227,134,1) 100%);
                color: #39393A;
                border-radius: 10px;
                width: 150px;
                height: 50px;
                padding: 0;
                border: none;
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
            
            #tbl{
                position: relative;
                top: 30px;
                overflow: scroll;
                height: auto;
                border: 4px solid black;
                max-height: 550px;
            }
            #num {
                font-family: 'Roboto', sans-serif;
                top: 20px;
                position: relative;
                font-weight: bolder;
            }
            
            
            
            .hm:hover {
                width: 155px;
                height: 52px;
                background: linear-gradient(45deg, rgba(252,234,187,1) 0%, rgba(252,205,77,1) 23%, rgba(248,181,0,1) 65%, rgba(251,223,147,1) 100%);
            }
            
            .hm:active {
                background-color:#39393A;
                color: #ffffff;
                border:none;
            }
            
        
            
        </style>
    </head>

    <body>
        
        <div id="tbl">
            <table>
                <tr>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Phone Number</th>
                    <th>Email</th>
                    <th>Del Address</th>
                    <th>Area</th>
                    <th>Delete</th>
                </tr>
                    <?php 
                        while($row = mysql_fetch_array($result))
                        {
                        echo "<tr><td>".$row['firstName']."</td>";
                        echo "<td>".$row['lastName']."</td>";
                        echo "<td>".$row['phoneNumber']."</td>";
                        echo "<td>".$row['eMail']."</td>";
                        echo "<td>".$row['delAddress']."</td>";
                        echo "<td>".$row['area']."</td>";
                        echo "<td><a href=\"delete.php?id=".$row['id']."\">DELETE</a>&nbsp <a href=\"edit.php?id=".$row['id']."\">EDIT</a><br>"."<a href=\"addOrders.php?id=".$row['id']."\">ADD ORDERS</td></tr>";}?>
                        
                        <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
                        <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
                        <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
                        <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
                        <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
                        <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
                        <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
                        <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
                        <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
                        <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
                        <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
            </table>
        
        </div>
        
        <div id="num">
        <p>Number of enteries = <?php echo $count['total'];?></p>
        </div>
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