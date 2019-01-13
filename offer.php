<?php
/**
 * Created by PhpStorm.
 * User: Robin
 * Date: 18.12.2018
 * Time: 16:50
 */

/** ConnectorDB */
$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password);

?>
<html>
    <head>
        <title>Angebote</title>
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link rel="stylesheet" type="text/css" href="css/offer.css">
    </head>
    <body>
        <div class="item-main-container">
            <ul class="item-list">


                <li>
                    <div class="item img-2">
                        <a href="#">
                            <div class="item-info">
                                <h3>Blindtext mit Gefühl</h3>
                                <p> Test Text Test Text Test Text Text Text Text Text Text Text Text Text</p>
                            </div>
                        </a>
                        <div class="item-tz">
                            <h4 class="item-tz-info">[0/20]</h4>
                        </div>
                    </div>
                </li>



                <?php

                /**
                $sql = "SELECT * FROM `kfp`.`offerlist`";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {

                    $row = $result->fetch_assoc();
                    echo "<li>";
                        echo "<div class='item img-2'>";
                            echo "<a href='#'>";
                                echo "<div class='item-info'>";
                                    echo "<h3>";
                                        echo $row['Name'];
                                    echo "</h3>";
                                    echo "<p>";
                                        echo $row['Kurzbeschreibung'];
                                    echo "</p>";
                                    echo "<div class='item-tz'>";
                                        echo "<h4 class='item-tz-info'>";
                                            echo "[" . "var1" . "/" . $row['TeilnehmerAnzahl'] . "]";
                                        echo "</h4>";
                                    echo "</div>";
                                echo "</div>";
                            echo "</a>";
                        echo "</div>";
                    echo "</li>";
                } else {
                    echo "0 Results";
                }
                */
                ?>



                <!--

                Vorlage

                <li>
                    <div class="item img-2">
                        <a href="#">
                            <div class="item-info">
                                <h3>Name</h3>
                                <p>Kurzbeschreibung</p>
                            </div>
                        </a>
                    </div>
                </li>

                -->
            </ul>
        </div>
    </body>
</html>