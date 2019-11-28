<html>
    <head>
        <title>Home</title>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>       
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script>
        function myfunction(){
            var string="<?php
                       $servername = "localhost";
                        $username = "id4324709_pavanroot";
                        $password = "ait15beis0361";
                        $dbname="id4324709_pavan";
                        $conn = new mysqli($servername, $username, $password, $dbname);
                            if ($conn->connect_error) {
                                     die("Connection failed: " . $conn->connect_error);
                                }
                        $sql = "CALL Get_Count()"; 
                        $result = $conn->query($sql);
                        if($result->num_rows > 0) {
                         while($row = $result->fetch_assoc()){
                            echo $row['admincount'];
                         }
                     }
                    $conn->close();
            ?>"
            var string2 ="<?php
                        $servername = "localhost";
                        $username = "id4324709_pavanroot";
                        $password = "ait15beis0361";
                        $dbname="id4324709_pavan";
                        $conn = new mysqli($servername, $username, $password, $dbname);
                            if ($conn->connect_error) {
                                     die("Connection failed: " . $conn->connect_error);
                                }
                        $sql = "CALL Get_Countuser()"; 
                        $result = $conn->query($sql);
                        if($result->num_rows > 0) {
                         while($row = $result->fetch_assoc()){
                            echo $row['useradded'];
                         }
                     }
                    $conn->close();
            ?>"
            document.getElementById("demo").innerHTML="Number of recipes added by admin  : "+string+"</br>Number of recipes added by contributors  : "+string2+"</br> (Your contribution is valuable please add more recipies!)";
        }
        </script>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
        <style>
            body{
                background-repeat: no-repeat;
                background-size: cover;
                background-image: url("/cooking.jpg");
            }
             .my{
                text-align: center;
                color: white;
             }
             .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
  }
            </style>
            <body class="w3-mobile">
                <div>
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
                <div>
                    <p style="text-align:center; margin-top:50px; color:gray; font-size:40px; background-color:blanchedalmond;">Recipe Book</p>
                </div>
                <div class="container">
                    <br>
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                            <li data-target="#myCarousel" data-slide-to="3"></li>
                        </ol>
                
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                
                            <div class="item active">
                                <a href="/Item.php/?varname=Idly"><img src="https://img1.nbstatic.in/la1-m/578cb99e590801000c24a5b9.jpg" alt="Idly" width="460" height="345"></a>
                                <div class="carousel-caption">
                                    <h3>Idly</h3>
                                    <p>Idly is a traditional breakfast in South Indian households</p>
                                </div>
                            </div>
                
                            <div class="item">
                                <a href="/Item.php/?varname=Boondi Ladu"><img src="https://4.imimg.com/data4/JJ/JJ/GLADMIN-/images-galleries-large-laddu_9-500x500.jpg" alt="Boondi Ladu" width="460" height="345"></a>
                                <div class="carousel-caption">
                                    <h3>Boondi Ladu</h3>
                                    <p>Indian sweet prepared for special festive occasions</p>
                                </div>
                            </div>
                
                            <div class="item">
                                <a href="/Item.php/?varname=Vegetable Biriyani"><img src="https://theceliacscene.com/wp-content/uploads/2017/11/29856_Vegetable.jpg" alt="Veg biriyani" width="460" height="345"></a>
                                <div class="carousel-caption">
                                    <h3>Vegetable Biriyani</h3>
                                    <p>A Classic Indian vegetable biryani is a perfect dish for any occasion.</p>
                                </div>
                            </div>
                
                            <div class="item">
                               <a href="/Item.php/?varname=Aloo Tikki"> <img src="https://qph.ec.quoracdn.net/main-qimg-154d25641fcc2d00b1a9319b6f644549-c" alt="Aloo Tikki" width="460" height="345"></a>
                                <div class="carousel-caption">
                                    <h3>Aloo Tikki</h3>
                                    <p> Crispy Aloo Tikki is a popular street food chaat</p>
                                </div>
                            </div>
                
                        </div>
                
                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div>
                    <br><br>
                    <p class="w3-xlarge w3-white w3-round-xlarge" style="text-align:center; padding:10px;">Top Recipies</p>
                </div>
                <br><br>
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
                    <img class="w3-round-large" src="http://foodsandflavorsbyshilpi.com/wp/wp-content/uploads/2016/10/Potato-Lolipop-1c.jpg" alt="potato lollipop" style="width:9cm; max-height:8cm;">
                    <footer class="w3-container w3-blue w3-round-xlarge w3-hover-shadow w3-hover-display">
                        <a href="/Item.php/?varname=Potato Lollipop" class="w3-green w3-container w3-round-xlarge w3-hover-shadow w3-button w3-mobile" style="text-align:center; color:white; text-decoration:none;">Potato Lollipop</a>
                    </footer>
                </div>
                <div class="w3-card-4 w3-round-xlarge w3-section w3-animate-left" style="display:inline-block; width:9cm; margin-left:5em;">
                    <img class="w3-round-large" src="http://fabfoodies.in/wp-content/uploads/2017/09/Paneer-_Cutlet.jpg" alt="cutlet" style="width:9cm; max-height:8cm;">
                    <footer class="w3-container w3-blue w3-round-xlarge w3-hover-shadow w3-hover-display">
                        <a href="/Item.php/?varname=Cutlet" class="w3-green w3-container w3-round-xlarge w3-hover-shadow w3-button w3-mobile"
                            style="text-align:center; color:white; text-decoration:none;">Cutlet</a>
                    </footer>
                </div>
                <div class="w3-card-4 w3-round-xlarge w3-section w3-animate-left" style="display:inline-block; width:9cm; margin-left:6em;">
                    <img class="w3-round-large" src="http://www.vegrecipesofindia.com/wp-content/uploads/2014/05/tava-pulao-recipe11.jpg" alt="veg_pulao"
                        style="width:9cm; max-height:8cm;">
                
                    <footer class="w3-container w3-blue w3-round-xlarge w3-hover-shadow">
                        <a href="/Item.php/?varname=Pulao" class="w3-green w3-container w3-round-xlarge w3-hover-shadow w3-button w3-mobile" style="text-align:center; color:white; text-decoration:none;">Pulao</a>
                    </footer>
                </div>
                <div class="w3-card-4 w3-round-xlarge w3-section w3-animate-right" style="display:inline-block; width:9cm; margin-left:5em;">
                    <img class="w3-round-large" src="https://upload.wikimedia.org/wikipedia/commons/e/ea/Aloo_Bonda.jpg" alt="bonda" style="width:9cm; max-height:8cm;">
                
                    <footer class="w3-container w3-blue w3-round-xlarge w3-hover-shadow">
                        <a href="/Item.php/?varname=Mangalorean Bonda" class="w3-green w3-container w3-round-xlarge w3-hover-shadow w3-button w3-mobile" style="text-align:center; color:white; text-decoration:none;">Mangalorean Bonda</a>
                    </footer>
                </div>
                <br><br>
                
                <div class="w3-center">
                <div class="w3-bar w3-blue w3-border w3-card w3-round-large w3-large">
                <div class="w3-center" style="display:inline-block;">
        <a href="/recipies.php"><button class="w3-button w3-green w3-margin w3-round-xlarge">Click here for more recipies</button></a>
        </div>
        </div>
        </div>
                <div>
                    <br>
                    <p class="w3-xlarge w3-white w3-round-xlarge" style="text-align:center; padding:10px;">Top Categories</p>
                </div>
                <br><br>
                <div class="w3-card-4" style="width:20em; display:inline-block; margin-left:80px;">
                    <header class="w3-container w3-blue w3-round-large">
                        <h1>Snacks</h1>
                    </header>
                    <div class="w3-container w3-white w3-round-large">
                        <br>
                        <a href="/Item.php/?varname=Masala Vada" class="w3-xlarge" style="text-decoration:none;">Masala Vada</a>
                        <br><br>
                        <a href="/Item.php/?varname=Aloo Tikki" class="w3-medium" style="text-decoration:none;">Aloo Tikki</a>
                        <br><br>
                        <a href="/Item.php/?varname=Cutlet" class="w3-medium" style="text-decoration:none;">Cutlet</a>
                        <br><br>
                        <a href="/recipies.php" class="w3-medium" style="text-decoration:none; color:black;">More....</a>
                        <br><br>
                    </div>
                </div>
                <div class="w3-card-4 w3-margin-left" style="width:20em; display:inline-block;">
                    <header class="w3-container w3-blue w3-round-large">
                        <h1>Curries</h1>
                    </header>
                <div class="w3-container w3-white w3-round-large">
                    <br>
                    <a href="/Item.php/?varname=Malai Kofta" class="w3-xlarge" style="text-decoration:none;">Malai Kofta</a>
                    <br>
                    <br>
                    <a href="/Item.php/?varname=Veg Keema Masala" class="w3-medium" style="text-decoration:none;">Veg Keema Masala</a>
                    <br>
                    <br>
                    <a href="/Item.php/?varname=Paneer Matar" class="w3-medium" style="text-decoration:none;">Paneer Matar</a>
                    <br>
                    <br>
                    <a href="/recipies.php" class="w3-medium" style="text-decoration:none; color:black;">More....</a>
                    <br>
                    <br>
                </div>
                </div>
                <div class="w3-card-4 w3-margin-left" style="width:20em; display:inline-block;">
                    <header class="w3-container w3-blue w3-round-large">
                        <h1>Quick Recipies</h1>
                    </header>
                    <div class="w3-container w3-white w3-round-large">
                        <br>
                        <a href="/Item.php/?varname=Upma" class="w3-xlarge" style="text-decoration:none;">Upma</a>
                        <br>
                        <br>
                        <a href="/Item.php/?varname=Lifafa Parata" class="w3-medium" style="text-decoration:none;">Lifafa Parata</a>
                        <br>
                        <br>
                        <a href="/Item.php/?varname=Veg grilled Sandwich" class="w3-medium" style="text-decoration:none;">Veg grilled Sandwich</a>
                        <br>
                        <br>
                        <a href="/recipies.php" class="w3-medium" style="text-decoration:none; color:black;">More....</a>
                        <br>
                        <br>
                    </div>
                </div>
                <div class="w3-card-4 w3-margin-left" style="width:20em; display:inline-block;">
                    <header class="w3-container w3-blue w3-round-large">
                        <h1>Lunch</h1>
                    </header>
                    <div class="w3-container w3-white w3-round-large">
                        <br>
                        <a href="/Item.php/?varname=Vegetable Biriyani" class="w3-xlarge" style="text-decoration:none;">Vegetable Biriyani</a>
                        <br>
                        <br>
                        <a href="/Item.php/?varname=Pulao" class="w3-medium" style="text-decoration:none;">Pulao</a>
                        <br>
                        <br>
                        <a href="/Item.php?varname=Aloo Parota" class="w3-medium" style="text-decoration:none;">Aloo Parota</a>
                        <br>
                        <br>
                        <a href="/recipies.php" class="w3-medium" style="text-decoration:none; color:black;">More....</a>
                        <br>
                        <br>
                    </div>
                </div>
                <br><br><br><br><br>
                <div class="w3-center">
                <div class="w3-blue w3-round-large w3-margin w3-padding-8 w3-leftbar w3-rightbar w3-border-red" style="display:inline-block;">
        <div class="w3-section w3-text-white w3-margin w3-padding-4" style="font-size:20px; display:inline-block;"><p id="demo" style="display:inline-block;">Click on the button to know the number of recipies in the website!</p></div></div>
        </div>
        <div class="w3-bar w3-blue w3-border w3-card w3-round-large w3-large">
        <div class="w3-center">
        <div class="w3-center" style="display:inline-block;">
        <button onclick="myfunction()" class="w3-button w3-green w3-margin w3-round-xlarge">Get number of recipies</button>
        </div>
         <div class="w3-center"  style="display:inline-block;">
        <a href="/recipeadding.php"><button class="w3-button w3-green w3-margin w3-round-xlarge">Add a recipe</button></a>
        </div>
        <div class="w3-center"  style="display:inline-block;">
        <a href="/recipeupdelete.php"><button class="w3-button w3-green w3-margin w3-round-xlarge">Update or delete recipies</button></a>
        </div>
        <div class="w3-center"  style="display:inline-block;">
        <a href="/show.php"><button class="w3-button w3-green w3-margin w3-round-xlarge">Show added recipies and contributors</button></a>
        </div>
        </div>
        </div>
                <div class="w3-round-xlarge" style="background-color:antiquewhite; display:inline-block; margin-bottom:-70px;">
                    <h2 style="text-align:center;">Disclaimer</h2>
                    <p>&#10077 Welcome to Recipe Book. This website is only for demonstration purposes and has no intension 
                        of promotion of elements present in this website.This is just a informational website to understand the basics of
                        HTML and Database management.No such usage is made for outrageous events whatsoever.
                        Some of the elements used here are copyright subjected and hence used without acknowleged considering the fact that
                        this is a demonstration &#10078</p>
                </div>
                
                <footer class="w3-container w3-orange w3-border w3-round-xlarge w3-padding-8 w3-leftbar w3-rightbar w3-border-blue" style="margin-top:70px;">
                    <h5 class="my">Hope you are enjoying here!<br>(Contents subjected to copyrights)<br>
                        <i style="color:bisque;">&#10077 Make it as simple as possible, but not simpler.&#10078</i></h5>
                </footer>
                </div>
    </body>
</html>