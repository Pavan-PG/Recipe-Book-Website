<html>
<head>
<title>Add recipe</title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
                <div class="w3-center" style="margin-top:70px;">
                <div class="w3-card-4" style="width:50%; display:inline-block;">
                    <header class="w3-container w3-blue w3-round-large">
                        <h1>Add Recipe Details</h1>
            </header>
            <form action="/postadd.php" method="post">
                    <div class="w3-container w3-white w3-round-large">
                        <table class="w3-table-all">
                       <br>
                        <tr>
                        <td><b>Recipe Name*</b></td>
                        <td><input type="text" name="recipename" required></td>
                        </tr>
                        <tr>
                        <td><b>Ingredients*</b></td>
                        <td><textarea rows="20" cols="50" name="indg" required></textarea>
                    <br><code><h4>(Note : use /br enclosed in <> tag at end of the line for proper rendering purposes)</h4></code></td>
                        </tr>
                        <tr>
                        <td><b>Steps to prepare*</b></td>
                        <td><textarea rows="20" cols="50" name="steps" required></textarea>
                    <br><code><h4>(Note : use /br enclosed in <> tag at end of the line for proper rendering purposes)</h4></code></td>
                        </tr>
                        <tr>
                        <td><b>Image Link*</b></td>
                        <td><input type="text" name="imglink" required></td>
                        </tr>
                        <tr>
                        <td><b>Wikipedia(information) Link*</b></td>
                        <td><input type="text" name="wikilink" required></td>
                        </tr>
                        <tr>
                        <td><b>Adder Name*</b></td>
                        <td><input type="text" name="name" required></td>
                        </tr>
                        <tr>
                        <td><b>Adder email address*</b></td>
                        <td><input type="text" name="address" required>
                        </td>
                        </tr>
                         <td><b>Phone number*</b></td>
                        <td><input type="text" name="phoneno" required>
                        <code><h4>(Note : *fields are mandatory)</h4></code></td>
                        </tr>
                        </table>
                        <input type="submit" value="Submit" class="w3-button w3-green w3-round-xlarge">
                        </form>
                    </div>
                </div>
                </div> 
                <div>
                  <footer class="w3-container w3-orange w3-border w3-round-xlarge w3-padding-8 w3-leftbar w3-rightbar w3-border-blue" style="margin-top:70px;">
                    <h5 class="my">Hope you are enjoying here!<br>(Contents subjected to copyrights)<br>
                        <i style="color:bisque;">&#10077 Make it as simple as possible, but not simpler.&#10078</i></h5>
                </footer>
                </div>

</body>
</html>