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
                    <div class="item img-1">
                        <a href="#">
                            <div class="item-info">
                                <h3>Segelfliegen</h3>
                                <p>Kinder können hier mit Segelflugzeugen fliegen</p>
                            </div>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="item img-2">
                        <a href="#">
                            <div class="item-info">
                                <h3>Kochen mit Jochen</h3>
                                <p>Kinder kochen bei dieser Aktivität mit Jochen dem Chefkoch</p>
                            </div>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </body>
</html>