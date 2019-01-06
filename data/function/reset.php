<?php
/**
 * Created by PhpStorm.
 * User: Robin
 * Date: 24.12.2018
 * Time: 21:50
 */

$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password);


$res = $_POST["Database"];

if ($res == "teilnehmer") {
    $drop = "DROP TABLE `kfp`.`teilnehmer`";

    $entry = mysqli_query($conn,$drop);

    $build = "CREATE TABLE `kfp`.`teilnehmer` ( `ID` INT NOT NULL AUTO_INCREMENT , `vname` VARCHAR(30) NOT NULL , `nname` VARCHAR(30) NOT NULL , PRIMARY KEY (`ID`)) ENGINE = InnoDB;";

    $entry = mysqli_query($conn, $build);
} else {
    if ($res == "offer") {
        $drop = "DROP TABLE `kfp`.`offerlist`";

        $entry = mysqli_query($conn,$drop);

        $build = "CREATE TABLE `kfp`.`offerlist` ( `ID` INT NOT NULL AUTO_INCREMENT , `Name` VARCHAR(30) NOT NULL , `Kurzbeschreibung` VARCHAR(400) NOT NULL , `TeilnehmerAnzahl` INT(100) NOT NULL , PRIMARY KEY (`ID`)) ENGINE = InnoDB;";

        $entry = mysqli_query($conn, $build);
    }
}


?>
<meta http-equiv="refresh" content="0; URL=../../dashboard.php">