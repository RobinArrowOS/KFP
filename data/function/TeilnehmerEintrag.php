<?php
/**
 * Created by PhpStorm.
 * User: Robin
 * Date: 18.12.2018
 * Time: 13:07
 */

/** ConnectDB */

    $servername = "localhost";
    $username = "root";
    $password = "";

    $conn = new mysqli($servername, $username, $password);

/** Teilnehmer */

    $nname = $_POST["nname"];
    $vname = $_POST["vname"];

    $TeilnehmerInfo = "INSERT INTO `kfp`.`teilnehmer` (`ID`, `vname`, `nname`) VALUES (NULL, '$vname', '$nname');";

    $entry = mysqli_query($conn, $TeilnehmerInfo);

?>
<meta http-equiv="refresh" content="0; URL=../../dashboard.php">