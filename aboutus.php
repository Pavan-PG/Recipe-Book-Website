<html>
<head>
<title>About us</title>
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
        <style>
            body {
                background-repeat: no-repeat;
                background-size: cover;
                background-image: url("/cooking.jpg");
            }
        
            .my {
                text-align: center;
                color: white;
            }
            </style>
</head>
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
                </div>
                 <div class="w3-round-xlarge w3-pale-yellow w3-container w3-center w3-margin-left w3-margin-right w3-margin-bottom" style="padding:2px; border:5px dotted blue; margin-top:70px;">
                  <div class="w3-card-4 w3-margin-left" style="display:inline-block;">
                    <header class="w3-container w3-blue w3-round-large">
                        <h1>About us</h1>
                    </header>
                </div>
                </div>
                 <div class="w3-round-xlarge w3-pale-yellow w3-container w3-margin-left w3-margin-right w3-margin-bottom" style="padding:2px; border:5px dotted blue;">
                 <div class="w3-center w3-margin-left">
                      <h1>Developers</h1>
                      <img class="w3-round-large" src="/me.jpg" alt="myprofile"  style="width:9cm; max-height:8cm;">
                    <h1 class="w3-margin-left">Pavan P Galagali</h1></div>
                    <div class="w3-margin-right">
                    <div class="w3-white">
               <h4 name="Title" style="font-family:Verdana;" class="w3-margin">
                    <b>A note from the developer's perspective </b> :<br><br>
                     I'am Pavan P Galagali currently pursuing Bachelor's degree on Information Science and Engineering.<br>
                     I'am passionate in developing new things such as this website, this is my dream that this will be a collaborative
                     work and efforts from all of us to make this website better day by day and help with your convinience and ease to let 
                     know different recipes that could be prepared and also its knowledge.
                     <br>
                     Hoping in the near future that this website will be far better with your contribution and suggestions on improvements.<br>
                     <br><b>Thank you</b>.
               <h4>
           </div>
            <div class="w3-white">
               <h4 name="Title" style="font-family:Verdana;" class="w3-margin">
                    <b>About the website </b> :<br><br>
                    Hoping that you are enjoying the website.<br>
                    This website is a database of all the recipes that can be prepared and showcase people's talents on different recipies.<br>
                    Starting from categories like starters to delicious curries are being constantly delivered to you by the admin and these
                    are updated frequently to delight your experience not only in design but also efficient way of preparing it.
                    <br>
                    It also lets you add your own recipies and maintain your own database of recipies to help your neighbour for an instance
                    of your contribution to a website by highlighting your recipe talents.
                    <br>
                    Health benifits of all the recipies are provided in the glossary section for understanding the importance of each recipe contents.<br>
                    Right from steps to prepare,ingredients required to a video for convinience in understanding the recipe is given by the admin.<br>
                    The future version of this website allows even the user to add a video for understanding the recipe as a contribution.
                    Best efforts are being made from the developer to make this website better.<br>
                    And its our sincere request to contribute this website by adding more recipies and providing suggestions to improve this website<br><br>
                    <b>Your suggestions below are appreciated.</b>.
               <h4>
           </div>
                    </div>
                 </div>
                 </div>
                 <div class="w3-round-xlarge w3-pale-yellow w3-container w3-margin-left w3-margin-right w3-margin-bottom" style="padding:2px; border:5px dotted blue;">
                  <div class="w3-card-4 w3-margin-left" style="display:inline-block;">
                    <header class="w3-container w3-blue w3-round-large">
                        <h1>Suggestions on improvements</h1>
                    </header>
                    <div class="w3-container w3-white w3-round-large">
                       <form action="/successadmin.php" method="post">
                       <textarea rows=7 cols=170 name="suggest" placeholder="Enter your opinions here in about 100 words.Your suggestions are much appreciated!!" required></textarea>
                       <h5>Name :</h5>
                       <input type=text name="revname" placeholder="Your name here please" required><br>
                       <button class="w3-button w3-green w3-margin w3-round-xlarge">Submit</button>
                       </form>
                    </div>
                </div>
                 </div>
                 <footer class="w3-container w3-orange w3-border w3-round-xlarge w3-padding-8 w3-leftbar w3-rightbar w3-border-blue">
                    <h5 class="my">Hope you are enjoying here!
                        <br>(Contents subjected to copyrights)
                        <br>
                        <i style="color:bisque;">&#10077 Make it as simple as possible, but not simpler.&#10078</i>
                    </h5>
                </footer>
</body>
</html>