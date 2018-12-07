<!DOCTYPE html>
<html>
    <head>
        <style>
            @import url('https://fonts.googleapis.com/css?family=Chakra+Petch:700|Roboto:700');
            
            body {
                text-align: center;
                background: linear-gradient(to right, rgba(120,240,234,1) 0%, rgba(134,194,204,1) 25%, rgba(134,134,204,1) 53%, rgba(162,134,204,1) 81%, rgba(204,134,185,1) 100%);
            }
            
          
            #search {
                position: inherit;
                border-radius: 20px;
                width: 500px;
                background-color: #E7ECEF;
                position: relative;
                display: inline-block;
                
                text-align: center;
                height: 300px;
            }
            
            #sbox {
                font-size: 20px;
                top: 70px;
                width: 400px;
                height: 50px;
                position: relative;
                border-radius: 5px;
                padding-left: 10px;
                padding-right: 10px;
                border: none;
                
            }
            
            #title {
                position: relative;
                top: 60px;
                font-family: 'Chakra Petch', sans-serif;
                text-align: center;
                font-size: 50px;
                margin: 0;
                padding: 0;
            }
            
            #btn {
                position: relative;
                font-size: 14px;
                font-stretch: ultra-condensed;
                font-weight:normal;
                background: linear-gradient(to right, rgba(73,155,234,1) 0%, rgba(32,227,195,1) 51%, rgba(34,227,134,1) 99%, rgba(34,227,134,1) 100%);
                color: #39393A;
                border-radius: 10px;
                width: 150px;
                height: 30px;
                padding: 0;
                border: none;
                top: 70px;
            }
            
            .hm {
                position: relative;
                left: 10px;
                background-color: transparent;
                border: none;
                padding: 0;
            }
            
            #tool {
                position: inherit;
                top: 10px;
            }
            
            #center {
                position: inherit;
                display: inline-block;
            }
            
        </style>
    </head>
    
    <body>
        <div id="tool">
            <button type="button" class="hm" onclick="onclick=location.href='http://localhost/Antidote-Dash/Index.html'">
            <img src="home.png">
            </button>
        </div>
        <form action="result.php" method="post">
            <div id="center">
                <div id="search">
                    <h5 id="title">Customer Search</h5>
                    <input id="sbox" type="text" name="fname"><br><br>
                    <button id="btn"  type="submit" value="submit" name="submit">Submit</button>
                </div>
                </div>
        </form>
    </body>

</html>
