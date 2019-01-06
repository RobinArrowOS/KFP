<?php
/**
 * Created by PhpStorm.
 * User: Robin
 * Date: 26.12.2018
 * Time: 20:42
 */

/** ConnectDB */

    $servername = "localhost";
    $username = "root";
    $password = "";

    $conn = new mysqli($servername, $username, $password);

/** Angebote */

    $OfferName = $_POST["OfferName"];
    $Kurzbeschreibung = $_POST["Kurzbeschreibung"];
    $TeilnehmerAnzahl = $_POST["TeilnehmerAnzahl"];

    $OfferEintrag = "INSERT INTO `kfp`.`offerlist` (`ID`, `Name`, `Kurzbeschreibung`, `TeilnehmerAnzahl`) VALUES (NULL, '$OfferName', '$Kurzbeschreibung', '$TeilnehmerAnzahl');";

    $entry =  mysqli_query($conn, $OfferEintrag);

?>
<meta http-equiv="refresh" content="0; URL=../../dashboard.php">