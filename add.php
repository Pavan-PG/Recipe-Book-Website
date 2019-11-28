<?php
                        $servername = "localhost";
                        $username = "id4324709_pavanroot";
                        $password = "ait15beis0361";
                        $dbname="id4324709_pavan";
                        $recipename = $_POST['recipename'];
                         $imglink = $_POST['imglink'];
                          $steps = $_POST['steps'];
                           $indg = $_POST['indg'];
                            $name = $_POST['name'];
                            $wikilink = $_POST['wikilink'];
                            $address = $_POST['address'];
                        $conn = new mysqli($servername, $username, $password, $dbname);
                            if ($conn->connect_error) {
                                     die("Connection failed: " . $conn->connect_error);
                                }
                        $sql =  "INSERT INTO `userrecipe`(`recipename`, `imglink`, `steps`, `indg`, `name`, `wikilink`,`address`) VALUES ('$recipename','$imglink','$steps','$indg','$name','$wikilink','$address')"; 
                        if( $conn->query($sql) === TRUE) {
                        
                            echo "Successfully added";
                         
                     }
                     else {
                            echo "Not added";
                        }
                    $conn->close();
            ?>