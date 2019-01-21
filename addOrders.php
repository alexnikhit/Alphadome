<?php
mysql_connect('localhost','root','');
mysql_select_db('AntidoteDB');

$id = $_GET['id']; // $id is now defined

$query = "SELECT * FROM customer WHERE id = '".$id."'";
$result = mysql_query($query);
?>

<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <script type="text/javascript" src="server.js"></script>
        
        <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <style>
            @import url('https://fonts.googleapis.com/css?family=Chakra+Petch:700|Roboto:700');
            @import url('https://fonts.googleapis.com/css?family=Roboto');
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
            
            <form id="myform" method="post" action="update.php">
                <!-- Form starts from here -->
                        <div id="center" class="container-fluid">
            <div id="cent" class="container">
            <form id="cent" method="post" action="post.php">
                <div class="form-group form-inline"> 
                <!-- First Name and Last Name Div starts from here -->
                    
                    
                    <input id="fname" readonly class="offset-md-3 col-md-2 col-5 form-control form-control-sm" type="text" name="fName" value="<?php while($row = mysql_fetch_array($result)) {
                        echo $row['firstName'];?>">
                    <input id="lName" readonly class="offset-md-1 col-md-2 offset-2 col-5 form-control form-control-sm" type="text" name="lName" value="<?php echo $row['lastName'];?>">
                </div>
                
                
                
                <!-- Mobile Number and Email div starts from here -->
                
                <div class="form-group form-inline">
                    <input id="mNum" readonly class="offset-md-3 col-md-2 col-5 form-control form-control-sm" type="text" name="mNum" placeholder="Mobile" value="<?php echo $row['phoneNumber'];?>" >
                    <input id="eMail" readonly class="offset-md-1 col-md-3 offset-1 col-6 form-control form-control-sm" type="text" name="eMail" value="<?php echo $row['eMail'];?>">
                </div>
                
                
                <!-- This is the Address Div -->
                <div class="form-group form-inline">
                    <input id="dAddress" readonly class="offset-md-3 col-12 col-md-6 form-control form-control-sm" type="text" name="dAddress" placeholder="Address" value="<?php echo $row['delAddress'];?>">
                </div>
                
                <!-- This is the ID div --->
                 <div class="form-group form-inline">
                    <input id="id" readonly class="offset-md-3 col-12 col-md-6 form-control form-control-plaintext" type="text" name="id" value="<?php echo $row['id'];}?>">
                </div>
                
                <!-- This is the area and the state div --->
                <div class="form-group form-inline">
                    <input id="area51" class="offset-md-3 col-4 col-md-2 form-control form-control-sm" type="text" name="area51" placeholder="Area">
                    <select id="state" class="offset-3 offset-md-1 col-5 col-md-3 form-control form-control-sm custom-select-sm" type="text" name="state" placeholder="State">
                    <option>Delhi</option>
                    <option>Haryana</option>
                    <option>Uttar Pradesh</option>    
                    </select>
                </div>
                
                <!-- This the Order details div which include the  Delivery Content and the Delivery Date and choosing the Address if there is a change in it-->
                <div class="form-group form-inline">
                    <input id="order" class="offset-md-3 form-control form-control-sm" type="text" name="order" placeholder="Order">
                </div>
                
                
                <div class="form-group form-inline">
                    <button class="btn btn-primary btn-sm col-md-2 mx-auto" type="submit" name="submit" value="submit">Submit</button>
                </div>
                </form>
                </div>
            </div>
                    
                        
                    </form>
             
            </div>
    </body>
</html>