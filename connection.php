<?php

$server = "localhost";
$username = "root";
$password = "Husenahmad";
$db = "registrationform";

$con = mysqli_connect($server, $username, $password, $db);

if ($con) {

} else {
?>
    <script>
        alert("Connection Not Successfully !...");
    </script>
<?php
}

?>