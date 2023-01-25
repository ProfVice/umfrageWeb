<!DOCTYPE html>
<html lang="de">

<head>
  <title>temphandler</title>
</head>

<body> aaaa 
</body>
</html>

<?php
$servername = "localhost";
$username = "bt5";
$password = "bt5pw";
$dbname = "bt5";
$jugname = $_POST['name'];
$prefrage = $_POST['frage0'];
$frage1 = $_POST['frage1'];
$frage2 = $_POST['frage2'];
$frage3 = $_POST['frage3'];
$frage4 = $_POST['frage4'];
$frage5 = $_POST['frage5'];
$frage6 = $_POST['frage6'];


try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Bis hierhin";
    $sql = "INSERT INTO umfrageLernW (jugName, prefrage, frage1, frage2, frage3, frage4, frage5, frage6)
    VALUES ('$jugname', '$prefrage', '$frage1', '$frage2', '$frage3', '$frage4', '$frage5', '$frage6')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
  } catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }
  $conn = null;
header("Location: ./umfrageseite.html");
exit;
?>