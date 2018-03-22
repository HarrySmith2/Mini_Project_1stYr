<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head></head>
<body>
<?php

$serverName = "localhost";
$username = "root";
$password = "";
$dbName = "CovFreeWifi";


//Retrieve values from previous page.
if (isset($_POST['email'])){
    $email = $_POST['email'];
    $mac = $_SESSION['mac'];
    $log = 1;
    $UserPK = $_SESSION['primKey'];
}

$conn = new mysqli($serverName, $username, $password, $dbName);

if ($conn->connect_error){
  die("Unsuccessful". mysqli_connect_error());
}

//Hashing the User's Email.
$hashEmail = hash(sha256,$email);

//Set the primary key from the database to be the PK where the login count is updated
$sql = "SELECT * FROM WifiData WHERE DB_Email = '$hashEmail'";
$query = mysqli_query($conn,$sql);


//If a Hashed Email is not in the Database.
//Insert values to database.
if (mysqli_num_rows($query) === 0 ){
   $sql = $conn->prepare("UPDATE WifiData SET DB_Email= ?, DB_LoginCount = ? WHERE PrimKey =$UserPK AND DB_Email IS NULL and DB_LoginCount IS NULL");
        $sql->bind_param("si",$hashEmail,$log);
        $sql->execute();
}
//If the Hashed Email exists in the database ++LoginCount
else
{
    $sql = $conn->prepare("UPDATE WifiData SET DB_LoginCount = DB_LoginCount + ? WHERE DB_Email = '$hashEmail'");
         $sql->bind_param("i", $log);
         $sql->execute();
}
//To delete excess entry added by the previous webpage.
$sql = "DELETE FROM WifiData WHERE PrimKey = $UserPK AND DB_Email IS NULL AND DB_LoginCount IS NULL";
mysqli_query($conn,$sql);

$conn->close();

    //Check for successful addition to Db.
//    echo "\n\n Successfull add/increment";
    header ("Location:Email_input.html");
?>
<h1>Hello</h1>
</body>
</html>
