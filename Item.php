<html>
    <head>
        <title>Recipe</title>
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
            <div class="w3-mobile">
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
                <div class="w3-round-xlarge w3-pale-yellow w3-container w3-margin-left w3-margin-right w3-margin-bottom" style="margin-top:70px; padding:2px; border:5px dotted blue;">
                    <h1 style="text-align:center; font-family:Verdana;"><?php echo $_GET['varname']?></h1>
                    <br>
                    <div class="w3-center">
                    <img class="w3-round-large"  src=<?php
                        $servername = "localhost";
                        $username = "id4324709_pavanroot";
                        $password = "ait15beis0361";
                        $dbname="id4324709_pavan";
                        $name = $_GET['varname'];
                        $conn = new mysqli($servername, $username, $password, $dbname);
                            if ($conn->connect_error) {
                                     die("Connection failed: " . $conn->connect_error);
                                }
                        $sql = "Select imglink from recipe where recipename='$name'"; 
                        $result = $conn->query($sql);
                        if($result->num_rows > 0) {
                         while($row = $result->fetch_assoc()){
                            echo $row["imglink"];
                         }
                     }
                     else {
                            echo "Image not added!";
                        }
                    $conn->close();
            ?> alt="<?php $_GET['varname']?>"  style="width:9cm; max-height:8cm;"></div>
                    <br>
                    <div class="w3-margin-right">
                    <h2 name="Title" style="text-align:center; font-family:Verdana;">Ingredients</h2>
           </div>
           <div class="w3-white">
               <h3 name="Title" style="text-align:center; font-family:Verdana;" class="w3-margin"><?php
                       $servername = "localhost";
                        $username = "id4324709_pavanroot";
                        $password = "ait15beis0361";
                        $dbname="id4324709_pavan";
                        $name = $_GET['varname'];
                        $conn = new mysqli($servername, $username, $password, $dbname);
                            if ($conn->connect_error) {
                                     die("Connection failed: " . $conn->connect_error);
                                }
                        $sql = "Select indg from recipe where recipename='$name'"; 
                        $result = $conn->query($sql);
                        if($result->num_rows > 0) {
                         while($row = $result->fetch_assoc()){
                            echo $row["indg"];
                         }
                     }
                     else {
                            echo "Ingredients not added!";
                        }
                    $conn->close();
            ?><h3>
           </div>
           <div class="w3-margin-right">
            <h2 name="Title" style="text-align:center; font-family:Verdana;">Steps to prepare</h2>
                    </div>
           <div class="w3-white">
               <h4 name="Title" style="font-family:Verdana;" class="w3-margin">
                   <?php
                        $servername = "localhost";
                        $username = "id4324709_pavanroot";
                        $password = "ait15beis0361";
                        $dbname="id4324709_pavan";
                        $name = $_GET['varname'];
                        $conn = new mysqli($servername, $username, $password, $dbname);
                            if ($conn->connect_error) {
                                     die("Connection failed: " . $conn->connect_error);
                                }
                        $sql = "Select steps from recipe where recipename='$name'"; 
                        $result = $conn->query($sql);
                        if($result->num_rows > 0) {
                         while($row = $result->fetch_assoc()){
                            echo $row["steps"];
                         }
                     }
                     else {
                            echo "Steps not added!";
                        }
                    $conn->close();
            ?>
                    </h4>
                    </div>
                    <br>
                    <div class="w3-margin w3-center w3-white w3-round-xlarge">
            <h2 name="Title" style="text-align:center; font-family:Verdana;" class="w3-margin">Video</h2>
              <h2 name="Title" style="text-align:center; font-family:Verdana;" class="w3-margin">(Disclaimer : Steps and ingredients may be different)</h2>
            <iframe width="560" height="315" src=<?php
                       $servername = "localhost";
                        $username = "id4324709_pavanroot";
                        $password = "ait15beis0361";
                        $dbname="id4324709_pavan";
                        $name = $_GET['varname'];
                        $conn = new mysqli($servername, $username, $password, $dbname);
                            if ($conn->connect_error) {
                                     die("Connection failed: " . $conn->connect_error);
                                }
                        $sql = "Select ytblink from recipe where recipename='$name'"; 
                        $result = $conn->query($sql);
                        if($result->num_rows > 0) {
                         while($row = $result->fetch_assoc()){
                            echo $row["ytblink"];
                         }
                     }
                     else {
                            echo "Youtube link not added!";
                        }
                    $conn->close();
            ?> frameborder="0" allowfullscreen></iframe>
                <br><br>
                
            </div>
            <div>
            <h2 style="text-align:center; font-family:Verdana; margin-left:50px;" class="w3-margin w3-center"><a href=<?php
                       $servername = "localhost";
                        $username = "id4324709_pavanroot";
                        $password = "ait15beis0361";
                        $dbname="id4324709_pavan";
                        $name = $_GET['varname'];
                        $conn = new mysqli($servername, $username, $password, $dbname);
                            if ($conn->connect_error) {
                                     die("Connection failed: " . $conn->connect_error);
                                }
                        $sql = "Select wikilink from recipe where recipename='$name'"; 
                        $result = $conn->query($sql);
                        if($result->num_rows > 0) {
                         while($row = $result->fetch_assoc()){
                            echo $row["wikilink"];
                         }
                     }
                     else {
                            echo "Wikipedia link not added!";
                        }
                    $conn->close();
            ?> style="text-decoration:none;">Click here for more information on <?php echo $_GET['varname']; ?></a><h2>
                    </div>
                     <div class="w3-center">
                <div class="w3-container w3-card-4" style="display:inline-block; width:90%;">
                 <div class="w3-round-xlarge w3-pale-yellow w3-container w3-margin-left w3-margin-right w3-margin-bottom" style="margin-top:70px; padding:2px; border:5px dotted blue;">
                <p class="w3-xlarge w3-white w3-round-xlarge" style="text-align:center; padding:10px;">User reviews</p>
                 <h2>
                 <?php
                    $servername = "localhost";
                        $username = "id4324709_pavanroot";
                        $password = "ait15beis0361";
                        $dbname="id4324709_pavan";
                     $name = $_GET['varname'];
                            $conn = new mysqli($servername, $username, $password, $dbname);

                            if ($conn->connect_error) {
                                        die("Connection failed: " . $conn->connect_error);
                                                                    } 
                                                    
                                                    $sql = "SELECT revname,review FROM adminrecipereviews where recipename='$name'";
                                                                        $result = $conn->query($sql);

                                                                                if ($result->num_rows > 0) {
                                                                                     echo "<table class=w3-table-all>";
                                                                                     echo "<th>Name</th>";
                                                                                     echo "<th>Review</th>";
                                                                                     while($row = $result->fetch_assoc()) {
                                                                                    echo "<tr><td>".$row['revname']."</td><td>".$row['review']."</td></tr>";
                                                         }                          echo "</table>"; 
} else {
    echo "No Reviews found yet for this recipe!.<br>";
}
$conn->close();
?>
                 </h2>
                 </div>
                 </div>
                 </div>
                  </div>
        </div>
                </div>
                 <div class="w3-round-xlarge w3-pale-yellow w3-container w3-margin-left w3-margin-right w3-margin-bottom" style="padding:2px; border:5px dotted blue;">
                  <div class="w3-card-4 w3-margin-left" style="display:inline-block;">
                    <header class="w3-container w3-blue w3-round-large">
                        <h1>Add review for the recipe <?php echo $_GET['varname']; ?></h1>
                    </header>
                    <div class="w3-container w3-white w3-round-large">
                       <form action="/reviewtab.php/?varname=<?php echo $_GET['varname'];?>" method="post">
                       <textarea rows=7 cols=170 name="review" placeholder="Enter your review here in about 100 words.Your review is much appreciated!!" required></textarea>
                       <h5>Name :</h5>
                       <input type=text name="revname" placeholder="Your name here please" required><br>
                       <button class="w3-button w3-green w3-margin w3-round-xlarge">Submit</button>
                       </form>
                    </div>
                </div>
                 </div>
                <footer class="w3-container w3-orange w3-border w3-round-xlarge w3-padding-8 w3-leftbar w3-rightbar w3-border-blue" style="margin-top:70px;">
                    <h5 class="my">Hope you are enjoying here!
                        <br>(Contents subjected to copyrights)
                        <br>
                        <i style="color:bisque;">&#10077 Make it as simple as possible, but not simpler.&#10078</i>
                    </h5>
                </footer>

    </body>
</html>