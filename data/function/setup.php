<?php
/**
 * Created by PhpStorm.
 * User: Robin
 * Date: 27.12.2018
 * Time: 04:58
 */

/** ConnectorDB */
$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password);

$pwr = $_POST["pwr"];

if ($pwr == "remove") {
    /** Remove DB */

    $DROP = "DROP DATABASE `kfp`;";

    $entry = mysqli_query($conn, $DROP);

    /** Create DB */

    $CREATE = "CREATE DATABASE `kfp`;";

    $entry = mysqli_query($conn, $CREATE);

    /** Create Table */

    /** Teilnehmer */
    $drop = "DROP TABLE `kfp`.`teilnehmer`";

    $entry = mysqli_query($conn, $drop);

    $build = "CREATE TABLE `kfp`.`teilnehmer` ( `ID` INT NOT NULL AUTO_INCREMENT , `vname` VARCHAR(30) NOT NULL , `nname` VARCHAR(30) NOT NULL , PRIMARY KEY (`ID`)) ENGINE = InnoDB;";

    $entry = mysqli_query($conn, $build);

    /** Offerlist */
    $drop = "DROP TABLE `kfp`.`offerlist`";

    $entry = mysqli_query($conn, $drop);

    $build = "CREATE TABLE `kfp`.`offerlist` ( `ID` INT NOT NULL AUTO_INCREMENT , `Name` VARCHAR(30) NOT NULL , `Kurzbeschreibung` VARCHAR(400) NOT NULL , `TeilnehmerAnzahl` INT(100) NOT NULL , PRIMARY KEY (`ID`)) ENGINE = InnoDB;";

    $entry = mysqli_query($conn, $build);


}
?>
<meta http-equiv="refresh" content="0; URL=../../dashboard.php">
