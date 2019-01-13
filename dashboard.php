<?php
/**
 * Created by PhpStorm.
 * User: Robin
 * Date: 18.12.2018
 * Time: 15:21
 */

/** ConnectorDB */
$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password);

?>

<html>
    <head>
        <title>Dashboard</title>
        <link rel="stylesheet" type="text/css" href="./css/main.css">
        <link rel="stylesheet" type="text/css" href="./css/dashboard.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    </head>
    <body>
        <div class="dash-main-sidebar">
            <h2>Dashboard</h2>
            <div class="dash-main-sidebar-logged">
                <h2>Nutzername<!-- <- Nutzername + Abmelden -->  <a href="#Logout"><i class="fas fa-power-off"></i></a></h2>
            </div>
            <ul>
                <li><a href="#U"><i class="fas fa-chart-pie"></i> Übersicht</a></li>
                <li><a href="#T"><i class="fas fa-address-card"></i> Teilnehmer</a></li>
                <li><a href="#A"><i class="fas fa-edit"></i> Angebote</a></li>
                <li><a href="#R"><i class="fas fa-sync-alt"></i> Reset</a></li>
                <li><a href="#S"><i class="fas fa-server"></i> Setup</a></li>
                <li><a href="index.php"> <i class="far fa-arrow-alt-circle-left"></i> Zurück</a></li>
            </ul>
        </div>
        <div class="dash-main-container">

            <div class="dash-main-item">
                <h2 id="U"><i class="fas fa-chart-pie"></i> Übersicht</h2>
                <br>
                <br>
                <div class="thingie">
                    <h3>
                        <i class="fas fa-address-card"></i> Teilnehmer: <a>
                            <?php
                                $sql = "SELECT COUNT(ID) AS total FROM `kfp`.`teilnehmer`";
                                $result = $conn->query($sql);
                                if ($total=mysqli_fetch_array($result)) {
                                    echo $total['total'];
                                }
                            ?>
                        </a>
                    </h3>
                </div>
                <div class="thingie1">
                    <h3><i class="fas fa-edit"></i> Angebote: <a>
                            <?php
                            $sql = "SELECT COUNT(ID) AS total FROM `kfp`.`offerlist`";
                            $result = $conn->query($sql);
                            if ($total=mysqli_fetch_array($result)) {
                                echo $total['total'];
                            }
                            ?>
                        </a>
                    </h3>
                </div>
            </div>

            <div class="dash-main-item">

                <h2 id="T"><i class="fas fa-address-card"></i> Teilnehmer</h2>
                <br>
                <h3>Eintragen</h3>
                <br>
                <a>Individuelle Identitäten eintragen.</a>
                <br><br>
                <form method="post" action="./data/function/TeilnehmerEintrag.php">
                    <input type="text" name="vname" placeholder="Vorname"><br>
                    <input type="text" name="nname" placeholder="Nachname"><br>
                    <input type="submit" value="Eintragen">
                </form>
                <br>
                <h3>Erzeugen</h3>
                <br>
                <a>Erzuegt zufällig generierte Identitäten und fügt diese in Datenbank ein.</a>
                <br><br>
                <form method="post" action="./data/function/generator.php">
                    <input type="number" name="actiontimes" placeholder="Anzahl" min="0"><br>
                    <input type="submit" value="Generieren">
                </form>
                <br>
                <?php


                $sql = "SELECT * FROM `kfp`.`teilnehmer`";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {

                    echo '<table border="1px solid white">';

                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>". $row['ID'] . "</td>";
                        echo "<td>". $row['vname'] . "</td>";
                        echo "<td>". $row['nname'] . "</td>";
                        echo "</tr>";
                    }

                    echo "</table>";

                } else {
                    echo "0 results";
                }
                ?>
            </div>

            <div class="dash-main-item">
                <h2 id="A"><i class="fas fa-edit"></i> Angebote</h2>
                <br>
                <h3>Eintragen</h3>
                <br>
                <a>Hier lassen sich manuell Datensätz eintragen.</a>
                <br><br>
                <form method="post" action="./data/function/OfferEintrag.php">
                    <input type="text" name="OfferName" placeholder="Name"><br>
                    <textarea type="text" maxlength="300" name="Kurzbeschreibung" placeholder="Kurzbeschreibung"></textarea><br>
                    <input type="number" name="TeilnehmerAnzahl" placeholder="TeilnehmerAnzahl" min="0" max="100"><br>
                    <input type="submit" value="Eintragen">
                </form>
                <br>
                <?php
                $sql = "SELECT * FROM `kfp`.`offerlist`";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {

                    echo '<table border="1">';

                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>". $row['ID'] . "</td>";
                        echo "<td>". $row['Name'] . "</td>";
                        echo "<td>". $row['Kurzbeschreibung'] . "</td>";
                        echo "<td>". $row['TeilnehmerAnzahl'] . "</td>";
                        echo "</tr>";
                    }

                    echo "</table>";

                } else {
                    echo "0 results";
                }
                ?>
            </div>

            <div class="dash-main-item">
                <h2 id="R"><i class="fas fa-sync-alt"></i> Reset</h2>
                <br>
                <a>Diese Funktion setzt ausgewählte Tabellen zuück.</a>
                <br><br>
                <form method="post" action="./data/function/reset.php">
                    <select name="Database">
                        <option value="teilnehmer">Teilnehmer</option><br>
                        <option value="offer">Offer</option>
                    </select>
                    <br><br>
                    <input type="submit" value="Reset">
                </form>
            </div>
            <div class="dash-main-item">
                <h2 id="S"><i class="fas fa-server"></i> Setup</h2>
                <br>
                <a>Setup-Funktion für die Installation auf neuer Datenbank.</a>
                <br><br>
                <form method="post" action="./data/function/setup.php">
                    <input name="pwr" type="password" placeholder="Passwort"><br>
                    <input type="submit" value="Setup">
                </form>
            </div>
        </div>
    </body>
</html>