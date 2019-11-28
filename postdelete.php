<html>
<head>
<title>Status</title>
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
             .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
  }
            </style>
</head>
<body class="w3-mobile">
<div class="w3-display-middle w3-orange w3-round-xlarge">
<div class="w3-center">
<h1 class="w3-center w3-white w3-round-large"><?php
                       $servername = "localhost";
                        $username = "id4324709_pavanroot";
                        $password = "ait15beis0361";
                        $dbname="id4324709_pavan";
                            $name = $_POST['name'];
                            $address = $_POST['address'];
                        $conn = new mysqli($servername, $username, $password, $dbname);
                            if ($conn->connect_error) {
                                     die("Connection failed: " . $conn->connect_error);
                                }
                                $check ="select `addname` from `userrecipe` where `addname`='$name'";
                                $check1 = "select `address` from `userrecipe` where `address`='$address'";
                                $result = $conn->query($check);
                                $result1 = $conn->query($check1);
                                    if ($result->num_rows > 0){
                                                if ($result1->num_rows > 0) {
                                                             $sql ="DELETE from `userrecipe` where `address`='$address' AND `addname`='$name'"; 
                        if( $conn->query($sql) === TRUE) {
                            echo "Your entry deleted succesfully";  
                     }
                                                }
                                                else {
                            echo "Sorry fields mismatch! Enter correct details";
                     }
                                                
                                    } 
                     else {
                            echo "Sorry fields mismatch! Enter correct details";
                     }
                    $conn->close();
            ?></h1>
            <div class="w3-center w3-container w3-blue w3-round-xlarge" >
            <div class="w3-center w3-container w3-blue"  style="display:inline-block;">
            <a href="/index.php"><input type="button" value="Click here to return home" class="w3-button w3-green w3-round-xlarge"></a>
            </div>
             <div class="w3-center"  style="display:inline-block;">
            <a href="/recipeupdelete.php"><input type="button" value="Click here to delete more recipes" class="w3-button w3-green w3-round-xlarge"></a>
            </div>
            </div>
            </div>
</body>
</html>