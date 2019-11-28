<html>
    <head>
        <title>Recipe_Book</title>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
        <style>
            .my{
                text-align: center;
                color: white;
            }
            .display{
               width: 30%;
            }
            body{
                background-repeat: no-repeat;
                background-size: cover;
                background-image: url("/cooking.jpg");
            }
        </style> 
    </head>
    <body class="w3-mobile">
     <div class="w3-bar w3-blue w3-border w3-card w3-round-large w3-large w3-top">
                 <a href="/index.php" class="w3-bar-item w3-button w3-mobile w3-hover-gray" style="text-decoration:none; font-family:Tangerine;">Recipe Book Home</a>
                    <a href="/recipies.php" class="w3-bar-item w3-button w3-mobile w3-hover-gray" style="text-decoration:none;">Recipies</a>
                    <a href="<?php $servername = "localhost";
                        $username = "id4324709_pavanroot";
                        $password = "ait15beis0361";
                        $dbname="id4324709_pavan";
                        $conn = new mysqli($servername, $username, $password, $dbname);
                            if ($conn->connect_error) {
                                     die("Connection failed: " . $conn->connect_error);
                                }
                        $sql = "Select glosslink from Glossarylink"; 
                        $result = $conn->query($sql);
                        if($result->num_rows > 0) {
                         while($row = $result->fetch_assoc()){
                            echo $row["glosslink"];
                         }
                     }
                    $conn->close();?>" class="w3-bar-item w3-button w3-mobile w3-hover-gray" style="text-decoration:none;">Glossary(Health Benifits)</a>
                    <a href="/aboutus.php" class="w3-bar-item w3-button w3-mobile w3-hover-gray" style="text-decoration:none;">About us</a>
                </div>
        <div class="w3-container w3-orange w3-border w3-round-xlarge w3-padding-8 w3-panel w3-leftbar w3-rightbar w3-border-blue w3-animate-top" style="margin-top:70px;">
            <h3 class="my">Delicious recipies just for you!</h3>
            <h3 class="my">Welcome to recipe menu section</h3>
        </div>
        <br><br>
        <div class="w3-card-4 w3-round-xlarge w3-section w3-animate-left" style="display:inline-block; width:9cm; margin-left:5em;">
            <img class="w3-round-large" src="http://fabfoodies.in/wp-content/uploads/2017/09/Paneer-_Cutlet.jpg" alt="cutlet" style="width:9cm; max-height:8cm;">
            <footer class="w3-container w3-blue w3-round-xlarge w3-hover-shadow w3-hover-display">
                <a href="/Item.php/?varname=Cutlet" class="w3-green w3-container w3-round-xlarge w3-hover-shadow w3-button w3-mobile" style="text-align:center; color:white; text-decoration:none;">Cutlet</a>
            </footer>
        </div>
        <div class="w3-card-4 w3-round-xlarge w3-section w3-animate-left" style="display:inline-block; width:9cm; margin-left:6em;">
                        <img class="w3-round-large" src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d9/Mysore_masala_dosa_in_Mysuru%2C_July_2013.jpg/640px-Mysore_masala_dosa_in_Mysuru%2C_July_2013.jpg"
                            alt="masala_dosa" style="width:9cm; max-height:8cm;">

            <footer class="w3-container w3-blue w3-round-xlarge w3-hover-shadow">
            <a href="/Item.php/?varname=Masala Dosa" class="w3-green w3-container w3-round-xlarge w3-hover-shadow w3-button w3-mobile" style="text-align:center; color:white; text-decoration:none;">Masala Dosa</a>
            </footer>
        </div>
        <div class="w3-card-4 w3-round-xlarge w3-section w3-animate-left" style="display:inline-block; width:9cm; margin-left:6em;">
                        <img class="w3-round-large" src="http://www.vegrecipesofindia.com/wp-content/uploads/2014/05/tava-pulao-recipe11.jpg"
                            alt="veg_pulao" style="width:9cm; max-height:8cm;">

            <footer class="w3-container w3-blue w3-round-xlarge w3-hover-shadow">
                <a href="/Item.php/?varname=Pulao" class="w3-green w3-container w3-round-xlarge w3-hover-shadow w3-button w3-mobile" style="text-align:center; color:white; text-decoration:none;">Pulao</a>
            </footer>
        </div>
        <br>
        <br><br><br>
        <div class="w3-card-4 w3-round-xlarge w3-section w3-animate-right" style="display:inline-block; width:9cm; margin-left:5em;">
                        <img class="w3-round-large" src="https://upload.wikimedia.org/wikipedia/commons/8/87/Marro_Dhokla.jpg"
                            alt="dokla" style="width:9cm; max-height:8cm;">

            <footer class="w3-container w3-blue w3-round-xlarge w3-hover-shadow">
                <a href="/Item.php/?varname=Dokla" class="w3-green w3-container w3-round-xlarge w3-hover-shadow w3-button w3-mobile" style="text-align:center; color:white; text-decoration:none;">Dokla</a>
            </footer>
        </div>
        <div class="w3-card-4 w3-round-xlarge w3-section w3-animate-right" style="display:inline-block; width:9cm; margin-left:5em;">
                        <img class="w3-round-large" src="https://upload.wikimedia.org/wikipedia/commons/e/ea/Aloo_Bonda.jpg"
                            alt="bonda" style="width:9cm; max-height:8cm;">

            <footer class="w3-container w3-blue w3-round-xlarge w3-hover-shadow">
                <a href="/Item.php/?varname=Mangalorean Bonda" class="w3-green w3-container w3-round-xlarge w3-hover-shadow w3-button w3-mobile" style="text-align:center; color:white; text-decoration:none;">Mangalorean Bonda</a>
            </footer>
        </div>
        <div class="w3-card-4 w3-round-xlarge w3-section w3-animate-right" style="display:inline-block; width:9cm; margin-left:6em;">
                    <img class="w3-round-large" src="http://media2.sailusfood.com/wp-content/uploads/2010/03/dahi-sev-puri.jpg"
                        alt="dahi_puri" style="width:9cm; max-height:8cm;">

            <footer class="w3-container w3-blue w3-round-xlarge w3-hover-shadow">
                <a href="/Item.php/?varname=Dahi puri" class="w3-green w3-container w3-round-xlarge w3-hover-shadow w3-button w3-mobile" style="text-align:center; color:white; text-decoration:none;">Dahi puri</a>
            </footer>
        </div>
        <br>
        <br>
        <div class="w3-card-4 w3-round-xlarge w3-section w3-animate-left" style="display:inline-block; width:9cm; margin-left:5em;">
                    <img class="w3-round-large" src="https://i.ytimg.com/vi/PlFChSVy-F4/hqdefault.jpg" alt="cutlet" style="width:9cm; max-height:8cm;">
                    <footer class="w3-container w3-blue w3-round-xlarge w3-hover-shadow w3-hover-display">
                        <a href="/Item.php/?varname=Veg Keema Masala" class="w3-green w3-container w3-round-xlarge w3-hover-shadow w3-button w3-mobile"
                            style="text-align:center; color:white; text-decoration:none;">Veg Keema Masala</a>
                    </footer>
                </div>
                <div class="w3-card-4 w3-round-xlarge w3-section w3-animate-left" style="display:inline-block; width:9cm; margin-left:5em;">
                        <img class="w3-round-large" src="https://i.ytimg.com/vi/tk3DHjeyhUw/hqdefault.jpg" alt="cutlet" style="width:9cm; max-height:8cm;">
                        <footer class="w3-container w3-blue w3-round-xlarge w3-hover-shadow w3-hover-display">
                            <a href="/Item.php/?varname=Malai Kofta" class="w3-green w3-container w3-round-xlarge w3-hover-shadow w3-button w3-mobile" style="text-align:center; color:white; text-decoration:none;">Malai Kofta</a>
                        </footer>
                </div>
                <div class="w3-card-4 w3-round-xlarge w3-section w3-animate-left" style="display:inline-block; width:9cm; margin-left:5em;">
                    <img class="w3-round-large" src="http://foodsandflavorsbyshilpi.com/wp/wp-content/uploads/2016/10/Potato-Lolipop-1c.jpg" alt="cutlet" style="width:9cm; max-height:8cm;">
                    <footer class="w3-container w3-blue w3-round-xlarge w3-hover-shadow w3-hover-display">
                        <a href="/Item.php/?varname=Potato Lollipop" class="w3-green w3-container w3-round-xlarge w3-hover-shadow w3-button w3-mobile" style="text-align:center; color:white; text-decoration:none;">Potato Lollipop</a>
                    </footer>
                </div>
                <div class="w3-center" style="margin-top:20px;">
                <div class="w3-card-4 w3-round-xlarge w3-section w3-animate-left" style="display:inline-block; width:9cm; margin-right:3em;">
                    <img class="w3-round-large" src="http://www.vegrecipesofindia.com/wp-content/uploads/2014/05/tava-pulao-recipe11.jpg" alt="veg_pulao"
                        style="width:9cm; max-height:8cm;">
                
                    <footer class="w3-container w3-blue w3-round-xlarge w3-hover-shadow">
                        <a href="/Item.php/?varname=Pulao" class="w3-green w3-container w3-round-xlarge w3-hover-shadow w3-button w3-mobile" style="color:white; text-decoration:none;">Pulao</a>
                    </footer>
                </div>
                </div>
                <div class="w3-center" style="margin-right:40px;">
                <div class="w3-blue w3-round-large w3-margin w3-padding-8 w3-leftbar w3-rightbar w3-border-red" style="display:inline-block;">
        <div class="w3-section w3-text-white w3-margin w3-padding-4" style="font-size:20px; display:inline-block;">Add your own favorite recipe here : </div>
        <a href="/recipeadding.php" style="text-decoration: none;"><button class="w3-btn w3-round-xxlarge w3-orange w3-text-white" style="font-size:20px; margin-top:-10px; margin-right:5px;">+</button></a>
        </div>
        </div>
        <br><br>
        <footer class="w3-container w3-orange w3-border w3-round-xlarge w3-padding-8 w3-leftbar w3-rightbar w3-border-blue">
            <h5 class="my">Hope you are enjoying here!<br>(Contents subjected to copyrights)<br><i style="color:bisque;">&#10077 Make it as simple as possible, but not simpler.&#10078</i></h5>
        </footer>
    </body>
</html>
