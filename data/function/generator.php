<?php
/**
 * Created by PhpStorm.
 * User: Robin
 * Date: 24.12.2018
 * Time: 16:50
 */

include 'random.php';



$servername = "localhost";
$username = "root";
$password = "";
$db = "kfp";

$conn = new mysqli($servername, $username, $password, $db);

$actiontimes = $_POST["actiontimes"];


if($actiontimes == "0")
{
    echo "0 Results";
} else {
    for($i=0; $i < $actiontimes; $i++) {
        $e1 = randomVName();
        $e2 = randomNName();
        $insert = "INSERT INTO `Teilnehmer` (`ID`, `vname`, `nname`) VALUES (NULL, '$e1', '$e2');";

        $entry = mysqli_query($conn,$insert);
    }
}
?>
<meta http-equiv="refresh" content="0; URL=../../dashboard.php">