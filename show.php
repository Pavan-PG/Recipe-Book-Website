<html>
<head>
<title>Contributors</title>
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
                <div class="w3-center">
                <div class="w3-container w3-card-4" style="display:inline-block; width:90%;">
                 <div class="w3-round-xlarge w3-pale-yellow w3-container w3-margin-left w3-margin-right w3-margin-bottom" style="margin-top:70px; padding:2px; border:5px dotted blue;">
                <p class="w3-xlarge w3-white w3-round-xlarge" style="text-align:center; padding:10px;">Contributor's List</p>
                 <h2>
                 <?php
                    $servername = "localhost";
                        $username = "id4324709_pavanroot";
                        $password = "ait15beis0361";
                        $dbname="id4324709_pavan";
                            $conn = new mysqli($servername, $username, $password, $dbname);

                            if ($conn->connect_error) {
                                        die("Connection failed: " . $conn->connect_error);
                                                                    } 
                                                    
                                                    $sql = "SELECT id,addname,recipename FROM userrecipe";
                                                                        $result = $conn->query($sql);

                                                                                if ($result->num_rows > 0) {
                                                                                     echo "<table class=w3-table-all>";
                                                                                     echo "<th>Contributor Name</th>";
                                                                                     echo "<th>Recipe Name</th>";
                                                                                     while($row = $result->fetch_assoc()) {
                                                                                         $id = $row['id'];
                                                                                    echo "<tr><td>".$row['addname']."</td><td><a href=/useritem.php?id=$id style=text-decoration:none;>".$row['recipename']."</a></td></tr>";
                                                         }                          echo "</table>"; 
} else {
    echo "No Contributors found.<br>Please add recipies to make this website better!";
}
$conn->close();
?>
                 </h2>
                 <p class="w3-xlarge w3-white w3-round-xlarge" style="text-align:center; padding:10px;">Click on the recipe to view details if any.<br>Thank you to all contributors!<br>Let's make this website even more better.</p>
                 </div>
                 </div>
                 </div>
                  </div>
        </div>
        <div class="w3-center">
                <div class="w3-blue w3-round-large w3-margin w3-padding-8 w3-leftbar w3-rightbar w3-border-red" style="display:inline-block;">
        <div class="w3-section w3-text-white w3-margin w3-padding-4" style="font-size:20px; display:inline-block;">
                  <p style="display:inline-block;">The number of recipes here are : <?php
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
            ?></p>
                  </div></div>
        </div>
<footer class="w3-container w3-orange w3-border w3-round-xlarge w3-padding-8 w3-leftbar w3-rightbar w3-border-blue w3-bottom">
            <h5 class="my">Hope you are enjoying here!<br>(Contents subjected to copyrights)<br><i style="color:bisque;">&#10077 Make it as simple as possible, but not simpler.&#10078</i></h5>
        </footer>
</body>
</html